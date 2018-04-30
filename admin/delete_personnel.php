<?php 

include('dbcon.php');
$get_id=$_GET['id_personnel'];

mysql_query("delete from personnel where id_personnel='$get_id'")or die(mysql_error());
header('location:personnel.php');
?>