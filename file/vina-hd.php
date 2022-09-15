<?php
$taxCode = $_POST["company-taxcode"];
$name = $_POST["company-name"];
$address = $_POST["company-address"];
$director = $_POST["company-director"];
$position = $_POST["company-position"];

$taxCodeC = $_POST["company-taxcode-c"];
$nameC = $_POST["company-name-c"];
$addressC = $_POST["company-address-c"];
$directorC = $_POST["company-director-c"];
$positionC = $_POST["company-position-c"];

$directorId = $_POST["director-c-id"];
$directorIssued = $_POST["director-c-issued"];

$directorDay = $_POST["day-c"];
$directorMonth = $_POST["month-c"];
$directorYear = $_POST["year-c"];
$directorIssuedDate = $directorDay . "/" . $directorDay . "/" . $directorYear ;

$traderName = $_POST["trader-name"];
$traderId = $_POST["trader-id"];
$traderPhone = $_POST["trader-phone"];

$bankName = $_POST["bank-name"];
$bankId = $_POST["bank-id"];
$bankBeneficiary = $_POST["bank-beneficiary"];



$template_file_name = 'vina-inputgdk.docx';
$fileName = "GDK_" . $taxCode. ".docx";
$folder   = "VINA";
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
        $message = str_replace("tokentaxcode", $taxCode, $message);
        $message = str_replace("tokenname", $name, $message);
        $message = str_replace("tokenaddress", $address, $message); 
        $message = str_replace("tokendirector", $director, $message); 
        $message = str_replace("tokenposition", $position, $message);  

        $message = str_replace("tokenctaxcode", $taxCodeC, $message);
        $message = str_replace("tokencname", $nameC, $message);
        $message = str_replace("tokencaddress", $addressC, $message); 
        $message = str_replace("tokencdirector", $directorC, $message); 
        $message = str_replace("tokencposition", $positionC, $message);  

        $message = str_replace("tokencid", $directorId, $message);  
        $message = str_replace("tokencdate", $directorIssuedDate, $message);  
        $message = str_replace("tokencissued", $directorIssued, $message);  

        $message = str_replace("tokentradername", $traderName ,$message);
        $message = str_replace("tokentraderid", $traderId ,$message);
        $message = str_replace("tokentraderphone", $traderPhone ,$message); 

        $message = str_replace("tokencbankname", $bankName ,$message); 
        $message = str_replace("tokencbankid", $bankId ,$message); 
        $message = str_replace("tokenbankbeneficiary", $bankBeneficiary ,$message); 



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