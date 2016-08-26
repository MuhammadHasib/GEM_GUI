<?php
include 'globals.php';
/*
 * Name: generateDetachXml
 * Description:  Generate XML files for detaching child parts from its parent parts.
 * Usage: in show pages deatach chils listed in there
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */

function generateDetachXml($partid, $kind) {

        /* Error Reporting */
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    global $ROOT_BARCODE;
    $xml = new DOMDocument("1.0");
    
    $root = $xml->createElement("ROOT");
    $xml->appendChild($root);
    
    $parts = $xml->createElement("PARTS");
    $root->appendChild($parts);

    $part = $xml->createElement("PART");
    $barcode = $xml->createElement("BARCODE");
    $barcodeText = $xml->createTextNode($ROOT_BARCODE);
    $barcode->appendChild($barcodeText);
    $part->appendChild($barcode);
    
    
    $child = $xml->createElement("CHILDREN");
    $part1 = $xml->createElement("PART");
    
    $serial = $xml->createElement("SERIAL_NUMBER");
    $serialText = $xml->createTextNode($partid);
    $serial->appendChild($serialText);
    $part1->appendChild($serial);
    
    $kindofpart = $xml->createElement("KIND_OF_PART");
    $kindofpartText = $xml->createTextNode($kind);
    $kindofpart->appendChild($kindofpartText);
    $part1->appendChild($kindofpart);
    
    $child->appendChild($part1);
    $part->appendChild($child);
    $parts->appendChild($part);

    $xml->formatOutput = true;

    $serialNum = str_replace("/", "-",$partid);
    $LocalFilePATH = "gen_xml/" . $serialNum . "-detach.xml";
    //Generate the file and save it on directory
    $xml->save("../gen_xml/" . $serialNum . "-detach.xml"); // or die("Error");
    echo "test test";
    // Send the file to the spool area
    SendXML($LocalFilePATH);

    return 1;
}

/*
 * Name: generateXml
 * Description:  Generate XML files for parts, chambers and super chambers following the db-loader formate
 * Usage: in all add_new_parts/chamber/superchamber scripts
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */

function generateXml($arr) {

    //print_r($arr);

    /* Error Reporting */
//    error_reporting(E_ALL);
//    ini_set('display_errors', 1);

    $xml = new DOMDocument("1.0");
    $root = $xml->createElement("ROOT");
    $xml->appendChild($root);
    $parts = $xml->createElement("PARTS");
    $root->appendChild($parts);

    $part = $xml->createElement("PART");
    $serialNum = "Default";
    $flag = 0;
    $filename_isset = 0;
    $filename = "";
    for ($i = 0; $i < sizeof($arr); $i++) {

        foreach ($arr[$i] as $key => $value) {
//            echo $key;
//            echo $value."<br>";
            if ($key == "SERIAL_NUMBER") {
                $serial = $xml->createElement($key);
                $serialText = $xml->createTextNode($value);
                $serialNum = $value;
                $serial->appendChild($serialText);
                $part->appendChild($serial);
            } else if ($key == "children") {
                $flag = 1;
                $child = $xml->createElement("CHILDREN");

                for ($j = 0; $j < sizeof($value); $j++) {
                    $part1 = $xml->createElement("PART");

                    foreach ($value[$j] as $key1 => $value1) {
                        if ($key1 == "attr") {
                            $preattr = $xml->createElement("PREDEFINED_ATTRIBUTES");
                            $attr = $xml->createElement("ATTRIBUTE");


                            foreach ($value1 as $key2 => $value2) {
                                $tag = $xml->createElement($key2);
                                $tagText = $xml->createTextNode($value2);
                                $tag->appendChild($tagText);
                                $attr->appendChild($tag);
                            }
                            $preattr->appendChild($attr);
                            $part1->appendChild($preattr);
                        } else {

                            $tag = $xml->createElement($key1);
                            $tagText = $xml->createTextNode($value1);
                            $tag->appendChild($tagText);
                            $part1->appendChild($tag);
                        }
                    }

                    $child->appendChild($part1);
                }
            }else if ($key == "filename") {
                $filename_isset = 1;
                $filename = $value;
                
            } else {
                $tag = $xml->createElement($key);
                $tagText = $xml->createTextNode($value);
                $tag->appendChild($tagText);
                $part->appendChild($tag);
            }
        }
    }

    if ($flag) {
        $part->appendChild($child);
    }
    $parts->appendChild($part);

    $xml->formatOutput = true;
    //echo "<xmp>". $xml->saveXML() ."</xmp>";
    //echo $xml_contents;
    
    // if file name is set to specific value 
    if($filename_isset) $serialNum = $filename;
    $serialNum = str_replace("/", "-", $serialNum);
    //echo exec('whoami');
    //chmod("gen_xml/", 0755);
    $LocalFilePATH = "gen_xml/" . $serialNum . ".xml";
    $LocalFileName = $serialNum . ".xml";
    //Generate the file and save it on directory
    $xml->save("gen_xml/" . $serialNum . ".xml"); // or die("Error");
    // Send the file to the spool area
    SendXML($LocalFilePATH);

    return 1;
}

/*
 * Name: SendXML
 * Description:  start a SSH connection with gem-machine-a to send files from GUI to spool area there
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */

function SendXML($LocalFilePATH) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

//CURL
    $username = $_SESSION['user'];
    $password = "kucr3PREruVUchAwEc";
    //$target_url = "http://gem-machine-a.cern.ch/cmsdbldr/gem/int2r";
    $target_url = "http://gem-machine-b.cern.ch/cmsdbldr/gem/int2r";
     

    $file_name_with_full_path = realpath($LocalFilePATH);
    echo $file_name_with_full_path;
    $post = array('file' => '@' . $file_name_with_full_path);

    $ch = curl_init($target_url);
    echo $ch;
    curl_setopt($ch, CURLOPT_URL, $target_url);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $return = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    echo "</br>status code:";
    print_r($status_code);
    echo "<hr>exec return:" . $return;

    curl_close($ch);
}
