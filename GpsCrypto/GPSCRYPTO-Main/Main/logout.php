<?php
session_start();
unset($_SESSION['mobile']);
unset($_SESSION['name']);
header("Location: index.php");
?>