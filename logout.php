<?php
include('dbcon.php');
	session_start();
	
	if (!isset($_SESSION['id'])){
header('location:index.php');
}

$ses_id = $_SESSION['id'];


mysql_query("update student set status = 'Evaluated' where id_student = '$ses_id'")or die(mysql_error());
	
	session_destroy();
	header('location:index.php');
?>



