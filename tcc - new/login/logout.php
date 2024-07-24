<?php
session_start();
include("/downloads/htdocs/tcc - new/login/connect.php");
unset($_SESSION['email']);
header("location: /tcc - new/index_teste.php");
?>