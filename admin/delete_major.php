<?php 

include('dbcon.php');
$get_id=$_GET['id_major'];


mysql_query("delete  from major where id_major='$get_id'")or die(mysql_error());
header('location:major.php');
?>