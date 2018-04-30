<?php
session_start();

if (!isset($_SESSION['id_student'])){
header('location:index.php');
}



?>