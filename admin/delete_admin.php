<?php 

include('dbcon.php');
$get_id=$_GET['id_admin'];


mysql_query("delete  from admin where id_admin='$get_id'")or die(mysql_error());
header('location:admin.php');
?>