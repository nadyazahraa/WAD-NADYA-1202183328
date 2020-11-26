<?php
session_start();
session_set();
session_destroy();
setcookie('email','',0,'/');
setcookie('nama','',0,'/');
header('location:login.php');
?>