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
$totalMoneyP = $_POST["ttp"];

$sNGAYt = "";
$sTHANGt = "";
$dateYeart = "";

if ($sNGAY == ""){
    $sNGAYt = "...";
} else {
    $sNGAYt = $sNGAY;
}

if ($sTHANG == ""){
    $sTHANGt = "...";
} else {
    $sTHANGt = $sTHANG;
}

if ($dateYear == ""){
    $dateYeart = "......";
} else {
    $dateYeart = $dateYear;
}

$sCM = "";
$sGH = "";
$oneYear = "";
$twoYear = "";
$threeYear = "";


switch($package) {
    case 0:
        $sCM= " &#9744; ";
        $sGH= " &#9744; ";
        $oneYear= " &#9744; ";
        $twoYear= " &#9744; ";
        $threeYear= " &#9744; ";
    break;
    case 1:
        $sCM= " &#9746; ";
        $oneYear= " &#9746; ";
        $sGH= " &#9744; ";
        $twoYear= " &#9744; ";
        $threeYear= " &#9744; ";
    break;
    case 2:
        $sCM = " &#9746; ";
        $twoYear = " &#9746; ";
        $sGH= " &#9744; ";
        $oneYear= " &#9744; ";
        $threeYear= " &#9744; ";
    break;
    case 3:
        $sCM = " &#9746; ";
        $threeYear = " &#9746; ";
        $sGH= " &#9744; ";
        $oneYear= " &#9744; ";
        $twoYear= " &#9744; ";
    break;
    case 4:
        $sGH = " &#9746; ";
        $oneYear = " &#9746; ";
        $sCM= " &#9744; ";
        $twoYear= " &#9744; ";
        $threeYear= " &#9744; ";
    break;
    case 5:
        $sGH = " &#9746; ";
        $twoYear = " &#9746; ";
        $sCM= " &#9744; ";
        $oneYear= " &#9744; ";
        $threeYear= " &#9744; ";
    break;
    case 6:
        $sGH = " &#9746; ";
        $threeYear = " &#9746; ";
        $sCM= " &#9744; ";
        $oneYear= " &#9744; ";
        $twoYear= " &#9744; ";
    break;
 }



$template_file_name = 'EFY-inputGDK.docx';
$fileName = "GDK_" . $taxCode. ".docx";
$folder   = "EFY-CA";
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

        $message = str_replace("tokenttp",    $totalMoneyP,  $message); 

        $message = str_replace("tokenday",    $sNGAYt,  $message);
        $message = str_replace("tokenmonth",   $sTHANGt,  $message);
        $message = str_replace("tokenyear",     $dateYeart,  $message);

        $message = str_replace("G1", $oneYear,$message); 
        $message = str_replace("G2", $twoYear,$message); 
        $message = str_replace("G3", $threeYear,$message);
        $message = str_replace("D1", $sCM,  $message); 
        $message = str_replace("D2", $sGH,  $message);
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