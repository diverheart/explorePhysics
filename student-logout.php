<?php
session_start();
if (!isset($_SESSION['student'])) {
    header('location: stulogin.php');
}
session_destroy();
header('location: index.php');
?>