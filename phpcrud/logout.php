<?php
session_start();
session_destroy();
unset($_SESSION['admin_logged_in']);
header("location:login.php");
die();
?>