<?php 

include('dbcon.php');
$get_id=$_GET['id_question'];


mysql_query("delete  from teaching where id_question='$get_id'")or die(mysql_error());
header('location:question.php');
?>