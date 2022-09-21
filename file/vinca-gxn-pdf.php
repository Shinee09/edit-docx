<?php 
$year = date('Y');

$taxCode = $_POST["company-taxcode"];
$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];

$template_file_name = 'vinca-inputgxn.docx';
$fileName = "GXN_" . $taxCode. ".docx";
$folder   = "VIN-CA";
$full_path = $folder . '/' . $fileName;
$pdffile = "VIN-CA" . '/' . "GXN_" . $taxCode . ".pdf";


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
        $message = str_replace("tokentaxcode", "$taxCode",       $message);
        $message = str_replace("tokenname", $name,                  $message);
        $message = str_replace("tokenaddress",   $address,                 $message); 
        $message = str_replace("tokendirector", $director,           $message); 
        $message = str_replace("tokenposition", $position,           $message);  
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



?>