<?php 

$taxCode = $_POST["company-taxcode"];
$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];

$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];
$package = $_POST["package"];
$oneYear = "";
$twoYear = "";
$threeYear = "";
$new = "";
$extend = "";
$convert = "";

switch($package) {
    case 0:
        $new = $extend = $convert = $oneYear = $twoYear = $threeYear = " &#9744; ";
    break;
    case 1:
        $extend = $convert = $twoYear = $threeYear = " &#9744; ";
        $new = $oneYear = " &#9746; ";
    break;
    case 2:
        $extend = $convert = $oneYear = $threeYear = " &#9744; ";
        $new = $twoYear = " &#9746; ";
    break;
    case 3:
        $extend = $convert = $oneYear = $twoYear = " &#9744; ";
        $new = $threeYear = " &#9746; ";
    break;
    case 4:
        $new = $convert = $oneYear = $twoYear = $threeYear = " &#9744; ";
        $extend = $oneYear = " &#9746; ";
    break;
    case 5:
        $new = $convert = $oneYear = $threeYear = " &#9744; ";
        $extend = $twoYear = " &#9746; ";
    break;
    case 6:
        $new = $convert = $oneYear = $twoYear = " &#9744; ";
        $extend = $threeYear = " &#9746; ";
    break;
    case 7:
        $extend = $new = $twoYear = $threeYear = " &#9744; ";
        $convert = $oneYear = " &#9746; ";
    break;
    case 8:
        $extend = $new = $oneYear = $threeYear = " &#9744; ";
        $convert = $twoYear = " &#9746; ";
    break;
    case 9:
        $extend = $new = $oneYear = $twoYear = " &#9744; ";
        $convert = $threeYear = " &#9746; ";
    break;

 }

 

if ($day === ""){
    $day = "...";
}
if ($month === ""){
    $month = "...";
}
if ($year === ""){
    $year = "......";
}


$template_file_name = 'fastca-inputGDK.docx';
$fileName = "GDK_" . $taxCode. ".docx";
$folder   = "Fast-CA";
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
        $message = str_replace("tokentaxcode",$taxCode,$message);
        $message = str_replace("tokenname",$name,$message);
        $message = str_replace("tokenaddress",$address,$message); 
        $message = str_replace("tokendirector",$director,$message); 
        $message = str_replace("tokenposition",$position,$message);

        $message = str_replace("tokenday",    $day,  $message); 
        $message = str_replace("tokenmonth",   $month, $message); 
        $message = str_replace("tokenyear",     $year,   $message);

        $message = str_replace("1year", $oneYear,$message); 
        $message = str_replace("2year", $twoYear,$message); 
        $message = str_replace("3year", $threeYear,$message);
        $message = str_replace("1pack", $new,  $message); 
        $message = str_replace("2pack", $extend,  $message);
        $message = str_replace("3pack", $convert,  $message);

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