<?php 

$taxCode = $_POST["MST-CA2TDTT"];
$name = $_POST["CTY-CA2TDTT"];
$address = $_POST["DC-CA2TDTT"];
$director = $_POST["GD-CA2TDTT"];
$sCMND = $_POST["CMND-CA2TDTT"];
$position = $_POST["CVU-CA2TDTT"];
$namec = $_POST["CTYC-CA2TDTT"];
$addressc = $_POST["DCC-CA2TDTT"];
$sSerial = $_POST["SERIAL-CA2TDTT"];
$sNBD = $_POST["NBD-CA2TDTT"];
$sNKT = $_POST["NKT-CA2TDTT"];
$sNBD2 = date("d/m/Y", strtotime($sNBD));  
$sNKT2 = date("d/m/Y", strtotime($sNKT));
// $day = $_POST["day"];
// $month = $_POST["month"];
// $year = $_POST["year"];


$template_file_name = 'CA2-inputTDTT.docx';
$fileName = "TDTT_" . $taxCode. ".docx";
$folder   = "CA2";
$full_path = $folder . '/' . $fileName;

try
{
    if (!file_exists($folder))
    {
        mkdir($folder);
    }       
         
    //Copy the Template file to the Result Directory
    copy($template_file_name, $full_path);
 
    // add calss Zip Archive
    $zip = new \ZipArchive;
 
    //Docx file is nothing but a zip file. Open this Zip File
    if($zip->open($full_path) == true)
    {
        // In the Open XML Wordprocessing format content is stored.
        // In the document.xml file located in the word directory.
         
        $key_file_name = 'word/document.xml';
        $message = $zip->getFromName($key_file_name);                
                     
        $timestamp = date('d-M-Y H:i:s');
         
        // this data Replace the placeholders with actual values
        $message = str_replace("tokentaxcode",$taxCode,$message);
        $message = str_replace("tokenname",$name,$message);
        $message = str_replace("tokenaddress",$address,$message); 
        $message = str_replace("tokendirector",$director,$message);
        $message = str_replace("tokencmnd",$sCMND,$message);
        $message = str_replace("tokenposition",$position,$message);

        $message = str_replace("tokentencu",$namec,$message);
        $message = str_replace("tokendiachicu",$addressc,$message);

        $message = str_replace("tokenserial",$sSerial,$message);

        $message = str_replace("nbatdau",$sNBD2,$message);
        $message = str_replace("nketthuc",$sNKT2,$message);
        // $message = str_replace("tokenday",    $sNGAYt,  $message);
        // $message = str_replace("tokenmonth",   $sTHANGt,  $message);
        // $message = str_replace("tokenyear",     $dateYeart,  $message);
        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();
        
        header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: attachment; filename=$full_path");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');

        readfile($full_path);
    }
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}

exit();
