<?php 
$taxCode = $_POST["company-taxcode"];
$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];

$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];


$idCard = $_POST["id-card"];
$placeIssued = $_POST["place-issued"];


$idDay = $_POST["day-issued"];
$idMonth = $_POST["month-issued"];
$idYear = $_POST["year-issued"];
$dateIssued = $idDay . "/" . $idMonth . "/" . $idYear ;

if ($day === ""){
    $day = "......";
}
if ($month === ""){
    $month = "......";
}
if ($year === ""){
    $year = "......";
}


$template_file_name = 'easyca-inputGXN.docx';
$fileName = "GXN_" . $taxCode. ".docx";
$folder   = "EasyCA";
$full_path = $folder . '/' . $fileName;

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
        $message = str_replace("tokentaxcode", $taxCode,   $message);
        $message = str_replace("tokenname", $name,   $message);
        $message = str_replace("tokenaddress",  $address,    $message); 
        $message = str_replace("tokendirector",  $director,    $message); 
        $message = str_replace("tokenposition", $position,   $message);

        $message = str_replace("tokenday",    $day,  $message); 
        $message = str_replace("tokenmonth",   $month, $message); 
        $message = str_replace("tokenyear",     $year,   $message);

        $message = str_replace("tokenid",$idCard,  $message);
        $message = str_replace("tokendateplace",    $dateIssued,  $message);
        $message = str_replace("tokenplace",  $placeIssued,$message);      
  
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
}
exit();
?>