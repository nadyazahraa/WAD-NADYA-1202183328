<?php 
include_once('connection.php');
$connect = new connect();

if(isset($_REQUEST['Id']) and $_REQUEST['Id']!=""){
 $database->delete($_REQUEST['Id']);
 header('location: home.php');
 exit;
}
?>