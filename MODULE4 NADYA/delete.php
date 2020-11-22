<?php 
include_once('database.php');
$database = new database();

if(isset($_REQUEST['Id']) and $_REQUEST['Id']!=""){
 $database->delete($_REQUEST['Id']);
 header('location: cart.php');
 exit;
}
?>