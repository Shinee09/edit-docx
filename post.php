<?php
$tax = trim($_POST["company-taxcode"]);


require_once 'simple_html_dom.php';
    ini_set('user_agent', 'My-Application/2.5');


    $context  = stream_context_create(
        array(
        "http" => array(
            "header" => "User-Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0"
        )
    ));

    $html = file_get_html("https://masothue.com/Search/?q=". $tax . "&type=auto", false, $context);

?>

<?php
echo '<script language="javascript">';
echo '</script>';
?>
<p><?php echo $html; ?></p>