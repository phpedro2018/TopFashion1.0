<?php 
session_start(); 
unset($_SESSION['vn']); 
header("Location: index");
exit;

?>