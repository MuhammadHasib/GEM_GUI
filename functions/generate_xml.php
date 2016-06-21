<?php

/*
 * Name: generateXml
 * Description:  Generate XML files for parts, chambers and super chambers following the db-loader formate
 * Usage: in all add_new_parts/chamber/superchamber scripts
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */

function generateXml($arr) {

    //print_r($arr);


    $xml = new DOMDocument("1.0");
    $root = $xml->createElement("ROOT");
    $xml->appendChild($root);
    $parts = $xml->createElement("PARTS");
    $root->appendChild($parts);



//    $serial = $xml->createElement("SERIAL_NUMBER");
//    $serialText = $xml->createTextNode('0001');
//    $serialNum = "0002";
//    $serial->appendChild($serialText);
//    $barcode = $xml->createElement("BARCODE");
//    $barcodeText = $xml->createTextNode('Pjgfdgsfs');
//    $barcode->appendChild($barcodeText);
//
//    $kindofpart = $xml->createElement("KIND_OF_PART");
//    $kindofpartText = $xml->createTextNode('Pjgfdgsfs');
//    $kindofpart->appendChild($kindofpartText);
//
//    $namelabel = $xml->createElement("NAME_LABEL");
//    $namelabelText = $xml->createTextNode('GEM Part');
//    $namelabel->appendChild($namelabelText);
//
//    $commentdesc = $xml->createElement("COMMENT_DESCRIPTION");
//    $commentdescText = $xml->createTextNode('test test');
//    $commentdesc->appendChild($commentdescText);
//
//    $location = $xml->createElement("LOCATION");
//    $locationText = $xml->createTextNode('CERN');
//    $location->appendChild($locationText);
//
//    $user = $xml->createElement("RECORD_INSERTION_USER");
//    $userText = $xml->createTextNode('user');
//    $user->appendChild($userText);

    $part = $xml->createElement("PART");
    $serialNum = "Default";
    $flag = 0;
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
            } else {
                $tag = $xml->createElement($key);
                $tagText = $xml->createTextNode($value);
                $tag->appendChild($tagText);
                $part->appendChild($tag);
            }
        }
    }

//    $part->appendChild($serial);
//    $part->appendChild($barcode);
//    $part->appendChild($kindofpart);
//    $part->appendChild($namelabel);
//    $part->appendChild($commentdesc);
//    $part->appendChild($location);    
//    $part->appendChild($user);
    if ($flag) {
        $part->appendChild($child);
    }
    $parts->appendChild($part);

    $xml->formatOutput = true;
    //echo "<xmp>". $xml->saveXML() ."</xmp>";
    //echo $xml_contents;
    $serialNum = str_replace("/", "-", $serialNum);
    //echo exec('whoami');
    //chmod("gen_xml/", 0777);
    $LocalFilePATH = "gen_xml/" . $serialNum . ".xml";
    $LocalFileName = $serialNum . ".xml";
    //Generate the file and save it on directory
    $xml->save("gen_xml/" . $serialNum . ".xml"); // or die("Error");
    // Send the file to the spool area
    //SendXML($LocalFilePATH, $LocalFileName);

    return 1;
}


/*
 * Name: SendXML
 * Description:  start a SSH connection with gem-machine-a to send files from GUI to spool area there
 * Author: Ola Aboamer [o.aboamer@cern.ch] 
 */
function SendXML($LocalFilePATH, $LocalFileName)
{
//$connection = ssh2_connect('gem-machine-a', 22);
//var_dump($connection);
//ssh2_auth_password($connection, 'gemdbusr', 'Piwanu72');
//$auth_methods = ssh2_auth_none($connection, 'gemdbusr');
//var_dump($auth_methods);
//ssh2_scp_send($connection, $LocalFilePATH, '/home/dbspool/data/gem/int2r/'.$LocalFileName, 0644);


//if (in_array('password', $auth_methods)) {
//  echo "Server supports password based authentication\n";
//}
// Add this to flush buffers/close session 
//ssh2_exec($connection, 'exit'); 

//$cmd = "scp ".$LocalFilePATH." gemdbusr@gem-machine-a:/home/dbspool/data/gem/int2r/".$LocalFileName;
//$cmd = "bash shellscript/authsend";
//echo $cmd;
//$cmd = 'pwd';
//$out = shell_exec ( $cmd );
//var_dump($out);

//CURL
$username= "gemdbusr";
$password= "Piwanu72";
$host= "gem-machine-b";
$target_url= "gem-machine-a:/home/dbspool/data/gem/int2r/";

$file_name_with_full_path = realpath($LocalFilePATH);
$post = array('FILE'=>'@'.$file_name_with_full_path);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$return = curl_exec($ch);
curl_close($ch);


}
