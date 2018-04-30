<?php 

include('dbcon.php');
$get_id=$_GET['id_dept'];


mysql_query("delete  from department where id_dept='$get_id'")or die(mysql_error());
header('location:department.php');
?>