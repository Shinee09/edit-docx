<?php 

$taxCode = $_POST["company-taxcode"];
$taxPlace = $_POST["tax-place-issued"];
$taxDay = $_POST["tax-day-issued"];
$taxMonth = $_POST["tax-month-issued"];
$taxYear = $_POST["tax-year-issued"];
$taxDateIssued = $taxDay . "/" . $taxMonth . "/" . $taxYear ;


$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];
$email = $_POST["email"];

$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];

$idCard = $_POST["id-card"];
$idDay = $_POST["day-issued"];
$idMonth = $_POST["month-issued"];
$idYear = $_POST["year-issued"];
$dateIssued = $idDay . "/" . $idMonth . "/" . $idYear ;
$placeIssued = $_POST["place-issued"];



$package = $_POST["package"];
$new = "";
$extend = "";
$packMonth = "";
$packTextMonth = "";
$money = "";
$moneyText = "";

if ($day === ""){
    $day = "....";
}
if ($month === ""){
    $month = "....";
}
if ($year === ""){
    $year = "......";
}

switch($package) {
    case 0:
        $new = " &#9744; ";
        $extend = " &#9744; ";
        $packMonth = "...";
        $packTextMonth = "...";
        $money = "...";
        $moneyText = "...";
    break;
    case 1:
        $new = " &#9746; ";
        $extend = " &#9744; ";
        $packMonth = "12";
        $packTextMonth = "Mười hai";
        $money = "1.826.000 đ";
        $moneyText = "Một triệu tám trăm hai mươi sáu nghìn đồng chẵn";
    break;
    case 2:
        $new = " &#9746; ";
        $extend = " &#9744; ";
        $packMonth = "24";
        $packTextMonth = "Hai mươi bốn";
        $money = "2.741.000 đ";
        $moneyText = "Hai triệu bảy trăm bốn mươi mốt nghìn đồng chẵn";
    break;
    case 3:
        $new = " &#9746; ";
        $extend = " &#9744; ";
        $packMonth = "36";
        $packTextMonth = "Ba mươi sáu";
        $money = "3.109.000 đ";
        $moneyText = "Ba triệu một trăm lẻ chín nghìn đồng chẵn";
    break;
    case 4:
        $extend = " &#9746; ";
        $new = " &#9744; ";
        $packMonth = "12";
        $packTextMonth = "Mười hai";
        $money = "1.276.000 đ";
        $moneyText = "Một triệu hai trăm bảy mươi sáu ngàn đồng chẵn";
    break;
    case 5:
        $extend = " &#9746; ";
        $new = " &#9744; ";
        $packMonth = "24";
        $packTextMonth = "Hai mươi bốn";
        $money = "2.191.000 đ";
        $moneyText = "Hai triệu một trăm chín mươi mốt ngàn đồng chẵn";
    break;
    case 6:
        $extend = " &#9746; ";
        $new = " &#9744; ";
        $packMonth = "36";
        $packTextMonth = "Ba mươi sáu";
        $money = "2.909.000 đ";
        $moneyText = "Hai triệu chín trăm lẻ chín ngàn đồng chẵn";
    break;
}


$template_file_name = 'viettelca-inputGDK.docx';
$fileName = "GDK_" . $taxCode. ".docx";
$folder   = "Viettel-CA";
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

        $message = str_replace("taxplace",$taxPlace,$message);
        $message = str_replace("taxdateplace",$taxDateIssued,$message);

        $message = str_replace("tokenname",$name,$message);
        $message = str_replace("tokenaddress",$address,$message); 
        $message = str_replace("tokendirector",$director,$message); 
        $message = str_replace("tokenposition",$position,$message);
        $message = str_replace("tokenemail",$email,$message);


        $message = str_replace("tokenday",    $day,  $message); 
        $message = str_replace("tokenmonth",   $month, $message); 
        $message = str_replace("tokenyear",     $year,   $message);

        $message = str_replace("tokenid",$idCard,  $message);
        $message = str_replace("tokendateplace",    $dateIssued,  $message);
        $message = str_replace("tokenplace",  $placeIssued,$message);   

        $message = str_replace("1pack", $new,  $message); 
        $message = str_replace("2pack", $extend,  $message);

        $message = str_replace("tpack",$packMonth,  $message);
        $message = str_replace("tcpack",$packTextMonth,  $message);
        $message = str_replace("tmoney",$money,  $message);
        $message = str_replace("tcmoney",$moneyText,  $message);




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