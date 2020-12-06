<?php 
include_once('db_con.php');
$database = new database();

if(isset($_REQUEST['Id']) and $_REQUEST['Id']!=""){
 $database->delete($_REQUEST['Id']);
 header('location: output.php');
 exit;
}
?>