<?php

include "globals.php";

/*
 * Name: database_connection
 * Description:  Start db connection
 * Return: return Connection otherwise return 0
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */

function database_connection() {
    $accountname = "CMS_GEM_APPUSER_R";
    $password = "GEM_Reader_2015";
    $servername = "int2r1-v.cern.ch:10121/int2r.cern.ch";

//load oci8 library if not load automatically
    if (!extension_loaded('oci8')) {
        dl("php_oci8.dll");
    }
    //connect to database     
    $conn = oci_connect($accountname, $password, $servername);
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        return $e;
    } else
        return $conn;
}

/*
 * Name: get_part_ID
 * Description: Get part id of latest inserted part by kind of part
 * Parameters: $part_id [ String ] kind of part id, $version [String] -L- or -S- means long or short 
 * Return: return ID [ String ] if exist otherwise return 0
 * Author: Ola Aboamer [o.aboamer@cern.ch]
 */

function get_part_ID($part_id, $version = NULL) {

    // Database connection 
    $conn = database_connection();
    
    //Query string
    if( $version == NULL ){ 
       $sql = "SELECT SERIAL_NUMBER FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='" . $part_id . "' ORDER BY SUBSTR(SERIAL_NUMBER, -4)  asc "; //select data or insert data
    }else{ 
       $sql = "SELECT SERIAL_NUMBER FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='" . $part_id . "' AND SERIAL_NUMBER LIKE '%".$version."%' ORDER BY SUBSTR(SERIAL_NUMBER, -4)  asc"; //select data or insert data 
    }
    // Execute query  
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result_rec = 0;
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {

        foreach ($row as $item) {
            //echo "<li>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</li>";
            if ($item !== null)
                $result_rec = $item;
        }
    }
    if ($result_rec !== 0) {
        //echo $result_rec ;
        $sql = "SELECT SERIAL_NUMBER FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE SERIAL_NUMBER='" . $result_rec . "'"; //select data or insert data
        $query = oci_parse($conn, $sql);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr = oci_execute($query);

        $result_rec = 0;
        while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {

            foreach ($row as $item) {
                //echo "<li>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</li>";
                if ($item !== null)
                    return $item;
            }
        }
    }
    else {
        return 0;
    }
}


/*
 * Name: get_part_ID
 * Description: Get part id of latest inserted part by kind of part
 * Parameters: $part_id [ String ] kind of part id, $version [String] -L- or -S- means long or short 
 * Return: return ID [ String ] if exist otherwise return 0
 * Author: Ola Aboamer [o.aboamer@cern.ch]
 */

function get_list_part_ID($part_id) {

    // Database connection 
    $conn = database_connection();
    
       $sql = "SELECT PART_ID,SERIAL_NUMBER,RECORD_INSERTION_USER  FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='" . $part_id . "'"; //select data or insert data
    
    // Execute query  
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        $result[] = $row ;
        foreach ($row as $item) {
            
                
                
        }
    }
    
    return $result ;

    
}

/*
 * Name: get_part_by_ID
 * Description: Get part by serial
 * Parameters: $part_id [ String ] part serial number
 * Return: return ID [ String ] if exist otherwise return 0
 * Author: Ola Aboamer [o.aboamer@cern.ch]
 */

function get_part_by_ID($part_id) {

    // Database connection 
    $conn = database_connection();
    
       $sql = "SELECT PART_ID,SERIAL_NUMBER,NAME_LABEL,BARCODE,RECORD_INSERTION_USER, COMMENT_DESCRIPTION,RECORD_INSERTION_TIME,MANUFACTURER_ID, LOCATION_ID   FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE SERIAL_NUMBER='" . $part_id . "'"; //select data or insert data
    
    // Execute query  
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        $result[] = $row ;
        
    }
    
    if( !empty($result[0]['LOCATION_ID']) ){
      $sql1 = "SELECT LOCATION_NAME FROM CMS_GEM_CORE_MANAGEMNT.LOCATIONS WHERE LOCATION_ID ='" . $result[0]['LOCATION_ID'] . "'"; 
        $query1 = oci_parse($conn, $sql1);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr1 = oci_execute($query1);
      
        while ($row = oci_fetch_array($query1, OCI_ASSOC + OCI_RETURN_NULLS)) {
            
            $result[0]['LOCATION_ID'] = $row['LOCATION_NAME'];     
        }
    }
    if( !empty($result[0]['MANUFACTURER_ID']) ){
        $sql2 = "SELECT MANUFACTURER_NAME FROM CMS_GEM_CORE_CONSTRUCT.MANUFACTURERS WHERE MANUFACTURER_ID ='" . $result[0]['MANUFACTURER_ID'] . "'"; 
        $query2 = oci_parse($conn, $sql2);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr2 = oci_execute($query2);
        while ($row = oci_fetch_array($query2, OCI_ASSOC + OCI_RETURN_NULLS)) {
            
            $result[0]['MANUFACTURER_ID']  = $row['MANUFACTURER_NAME'];
        } 
    }
   
    //print_r($result);
    return $result ;

    
}

/*
 * Name: get_locations
 * Description: Get list of loacations
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/
function get_locations(){
        $conn = database_connection();
        $sql = "SELECT LOCATION_ID,INSTITUTION_ID ,LOCATION_NAME FROM CMS_GEM_CORE_MANAGEMNT.LOCATIONS "; //select data or insert data
        $query = oci_parse($conn, $sql);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr = oci_execute($query);

        $result_arr = array();
      
//        while ($row = oci_fetch_assoc($query)) {
//            //print_r($row);
//            echo $row['LOCATION_ID'];
//              echo  $row['INSTITUTION_ID'];
//               echo $row['LOCATION_NAME'];
//               echo "-----<br>";
//            foreach ($row as $item) { //echo $item;
//                }
//            }
//        
//          exit;
           
          
          
        while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
            echo '<li><a href="#" class="location" location-id="'.$row['LOCATION_ID'].'">'.$row['LOCATION_NAME'].'</a></li>';
//                $temp['loc_id']= $row['LOCATION_ID'];
//                $temp['inst_id']= $row['INSTITUTION_ID'];
//                $temp['loc_name']= $row['LOCATION_NAME'];
            //foreach ($row as $item) {
                //echo "<li>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</li>";
                
//                if ($item !== null)
//                    return $item;
            //}
          $result_arr[] = $temp;
        }
        
        
        return $result_arr;
    
}

/*
 * Name: get_manufacturers
 * Description: Get list of manufacturers
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/
function get_manufacturers(){
    $conn = database_connection();
    $sql = "SELECT MANUFACTURER_ID,MANUFACTURER_NAME FROM CMS_GEM_CORE_CONSTRUCT.MANUFACTURERS "; //select data or insert data
        $query = oci_parse($conn, $sql);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr = oci_execute($query);

        $result_arr = array();
        while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
            echo '<li><a href="#" class="manufacturer" manufacturer-id="'.$row['MANUFACTURER_ID'].'">'.$row['MANUFACTURER_NAME'].'</a></li>';
            
//                $temp['man_id']= $row['MANUFACTURER_ID'];
//                $temp['man_name']= $row['MANUFACTURER_NAME'];
//            $result_arr[] = $temp;
        }
        return 1;
}

/*
 * Name: get_institutes
 * Description: Get list of institutes
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/
function get_institutes(){
        $conn = database_connection();
        $sql = "SELECT INSTITUTION_ID,INSTITUTE_CODE,NAME FROM CMS_GEM_CORE_MANAGEMNT.INSTITUTIONS "; //select data or insert data
        $query = oci_parse($conn, $sql);
        //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
        $arr = oci_execute($query);

        $result_arr = array();
        
        while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {

            echo '<li><a href="#" class="institue" institute-id="'.$row['INSTITUTION_ID'].'">'.$row['NAME'].'</a></li>';
//                $temp['inst_id']= $row['INSTITUTION_ID'];
//                $temp['inst_code']= $row['INSTITUTE_CODE'];
//                $temp['inst_name']= $row['NAME'];
//               
         //$result_arr[] = $temp;
        }
        
        //return $result_arr;
    
}



/*
 * Name: get_available_parts
 * Description: Get list of parts ( Foil,Drift,Readout, chamber) not attached to chambers according to v (L or S) and kind
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/

function get_available_parts($part_id, $version) {
    // Database connection 
    $conn = database_connection();

    $sql = "SELECT SERIAL_NUMBER FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='" . $part_id . "' AND SERIAL_NUMBER LIKE '%" . $version . "%' AND PART_ID not in (select PART_ID from CMS_GEM_CORE_CONSTRUCT.PHYSICAL_PARTS_TREE) ORDER BY SUBSTR(SERIAL_NUMBER, -4)  asc"; //select data or insert data 
    
    
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result_arr = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        echo '<li><a href="#" class="availablepart" >' . $row['SERIAL_NUMBER'] . '</a></li>';

//                $temp['man_id']= $row['MANUFACTURER_ID'];
//                $temp['man_name']= $row['MANUFACTURER_NAME'];
//            $result_arr[] = $temp;
    }
    return 1;
}

/*
 * Name: get_available_parts_nohtml
 * Description: Get list of parts ( Foil,Drift,Readout, chamber) not attached to chambers according to v (L or S) and kind
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/

function get_available_parts_nohtml($part_id, $version) {
    // Database connection 
    $conn = database_connection();

    $sql = "SELECT SERIAL_NUMBER FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='" . $part_id . "' AND SERIAL_NUMBER LIKE '%" . $version . "%' AND PART_ID not in (select PART_ID from CMS_GEM_CORE_CONSTRUCT.PHYSICAL_PARTS_TREE) ORDER BY SUBSTR(SERIAL_NUMBER, -4)  asc"; //select data or insert data 
    
    
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result_arr = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
//        echo '<li><a href="#" class="availablepart" >' . $row['SERIAL_NUMBER'] . '</a></li>';

                $temp['man_id']= $row['MANUFACTURER_ID'];
                $temp['man_name']= $row['MANUFACTURER_NAME'];
            $result_arr[] = $temp;
    }
    return $result_arr;
}
/*
 * Name: get_attached_parts
 * Description: Get list of parts ( Foil,Drift,Readout, chamber)  attached to chamber/super chamber 
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/

function get_attached_parts($part_id) {
    // Database connection 
    $conn = database_connection();

    $sql = "select PART_ID, RELATIONSHIP_ID from CMS_GEM_CORE_CONSTRUCT.PHYSICAL_PARTS_TREE where PART_PARENT_ID='".$part_id."'"; //select data or insert data 
    
    
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result_arr = array();
    
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        
        // foil -> chamber
        if($row['RELATIONSHIP_ID'] === "10000000000002001"){
            $serialarr = getSerialById($row['PART_ID']);
            $serial = $serialarr[0]['SERIAL_NUMBER'];
            echo '<li class="list-group-item"><label> GEM Foil:</label> <a href="show_gem.php?id='.$serial.'">'.$serial.'</a> </li>';
        }
        // Drift -> chamber
        else if($row['RELATIONSHIP_ID'] === "10000000000002002"){
            $serialarr = getSerialById($row['PART_ID']);
            $serial = $serialarr[0]['SERIAL_NUMBER'];
            echo '<li class="list-group-item"><label> Drift:</label> <a href="show_drift.php?id='.$serial.'">'.$serial.'</a> </li>';
        }
        // Readout -> chamber
        else if($row['RELATIONSHIP_ID'] === "10000000000002000"){
            $serialarr = getSerialById($row['PART_ID']);
            $serial = $serialarr[0]['SERIAL_NUMBER'];
            echo '<li class="list-group-item"><label> Readout:</label> <br> <a href="show_readout.php?id='.$serial.'">'.$serial.'</a> </li>';
        }else{}
        
        
    }
    return 1;
}


/*
 * Name: getSerialById
 * Description: Get  part serial number by its ID
 * return: Array
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/

function getSerialById($id){
    
    // Database connection 
    $conn = database_connection();
    
    $sql = "SELECT SERIAL_NUMBER  FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE PART_ID='" . $id . "'"; //select data or insert data
    
    // Execute query  
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        $result[] = $row ;
        
    }
    return $result;
}

/*
 * Name: list_chambers
 * Description: list all chambers
 * usage: list chambers page
 * return: html
 * Autor: Ola Aboamer [o.aboamer@cern.ch]
*/ 
function list_chambers(){
    
    // Database connection 
    $conn = database_connection();
    global $CHAMBER_KIND_OF_PART_ID;
    $sql = "SELECT SERIAL_NUMBER  FROM CMS_GEM_CORE_CONSTRUCT.PARTS WHERE KIND_OF_PART_ID='".$CHAMBER_KIND_OF_PART_ID."'"; //select data or insert data
    
    // Execute query  
    $query = oci_parse($conn, $sql);
    //Oci_bind_by_name($query,':bind_name',$bind_para); //if needed
    $arr = oci_execute($query);

    $result = array();
    while ($row = oci_fetch_array($query, OCI_ASSOC + OCI_RETURN_NULLS)) {
        echo '<li><a class="foils" href="#"> '.$row['SERIAL_NUMBER'].'</a></li>';
        
    }
    return 1;
}