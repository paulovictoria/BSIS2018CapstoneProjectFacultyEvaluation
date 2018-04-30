<?php 

include('dbcon.php');


mysql_query("insert into student (status) values('Evaluated')")or die(mysql_error());
header('location:student.php');
?>