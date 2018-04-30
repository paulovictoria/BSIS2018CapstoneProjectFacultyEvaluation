<?php 

include('dbcon.php');
$get_id=$_GET['id_prog'];


mysql_query("delete  from program where id_prog='$get_id'")or die(mysql_error());
header('location:program.php');
?>