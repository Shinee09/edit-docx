<?php 
$year = date('Y');

$taxCode = $_POST["company-taxcode"];
$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];

$package = $_POST["package"];
$new = "";
$extend = "";
$oneYear = "";
$twoYear = "";
$threeYear = "";
$fourYear = "";

switch($package) {
    case 0:
        $new = $extend = $oneYear = $twoYear = $threeYear = $fourYear = " &#9744; ";
    break;
    case 1:
        $extend = $twoYear = $threeYear = $fourYear = " &#9744; ";
        $new = $oneYear = " &#9746; ";
    break;
    case 2:
        $extend = $oneYear = $threeYear = $fourYear = " &#9744; ";
        $new = $twoYear = " &#9746; ";
    break;
    case 3:
        $extend = $oneYear = $twoYear = $fourYear = " &#9744; ";
        $new = $threeYear = " &#9746; ";
    break;
    case 4:
        $extend = $oneYear = $twoYear = $threeYear = " &#9744; ";
        $new = $fourYear = " &#9746; ";
    break;
    case 5:
        $new = $oneYear = $twoYear = $threeYear = $fourYear = " &#9744; ";
        $extend = $oneYear = " &#9746; ";
    break;
    case 6:
        $new = $oneYear = $threeYear = $fourYear = " &#9744; ";
        $extend = $twoYear = " &#9746; ";
    break;
    case 7:
        $new = $oneYear = $twoYear = $fourYear = " &#9744; ";
        $extend = $threeYear = " &#9746; ";
    break;
    case 8:
        $new = $oneYear = $twoYear = $threeYear = " &#9744; ";
        $extend = $fourYear = " &#9746; ";
    break;
 }


$template_file_name = 'vinca-inputgdk.docx';
$fileName = "GDK_" . $taxCode. ".docx";
$folder   = "VIN-CA";
$full_path = $folder . '/' . $fileName;
$pdffile = "VIN-CA" . '/' . "GDK_" . $taxCode . ".pdf";

if ($taxCode == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else if ($name == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else if ($address == "") {
    echo '<script language="javascript">';
    echo 'alert("Input not found")';
    echo '</script>';
    exit;
} else {
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
        $message = str_replace("tokentaxcode", $taxCode,       $message);
        $message = str_replace("tokenname", $name,                  $message);
        $message = str_replace("tokenaddress",   $address,                 $message); 
        $message = str_replace("tokendirector", $director,           $message); 
        $message = str_replace("tokenposition", $position,           $message);  

        $message = str_replace("G1", $oneYear,$message); 
        $message = str_replace("G2", $twoYear,$message); 
        $message = str_replace("G3", $threeYear,$message);
        $message = str_replace("G4", $fourYear,$message);
        $message = str_replace("D1", $new,  $message); 
        $message = str_replace("D2", $extend,  $message);

        $message = str_replace("tokenyear", $year,  $message);

        //Replace the content with the new content created above.
        $zip->addFromString($key_file_name, $message);
        $zip->close();

    }
}
catch (Exception $exc) 
{
    $error_message =  "Error creating the Word Document";
    var_dump($exc);
}
}

require_once('../convertapi/lib/ConvertApi/autoload.php');

use \ConvertApi\ConvertApi;

ConvertApi::setApiSecret('MKmvvSqcSWUU1IrR');

$result = ConvertApi::convert('pdf', ['File' => $full_path], 'docx');

# save to file
$result->getFile()->save($pdffile);

# get file contents (without saving the file locally)
$contents = $result->getFile()->getContents();

if (file_exists($pdffile)) {
    
    header('Content-Type: application/pdf ');
    header("Content-Disposition: attachment; filename=$pdffile");
    header('Expires: 0');
    readfile($pdffile);
    exit;
}
?>

