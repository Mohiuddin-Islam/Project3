<?php 
session_start();
session_destroy();
//header('location:logout.php');

header('location:login.php');

?>