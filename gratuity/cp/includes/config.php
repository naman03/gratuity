
<?php
require('functions.php');
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
ini_set('display_errors', 1);
//$ip = $_SERVER['REMOTE_ADDR'];
@session_start();
//$connection = mysqli_connect("127.7.139.130:3306","admindvZG3BI","MtrkvpRkRVsH","g");
$connection = mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b822159450f28e","d2895993","ad_a324ffdadb6f960");
//$connection = mysqli_connect("localhost","root","hamburger","g");

//$connection = mysqli_connect("127.7.139.130:3306","admindvZG3BI","MtrkvpRkRVsH","g");

uniqid();

?>