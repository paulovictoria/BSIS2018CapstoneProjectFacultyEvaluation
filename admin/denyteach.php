<?php 

include('dbcon.php');
$get_id=$_GET['id_teacher'];

mysql_query("delete from teacher where id_teacher='$get_id'")or die(mysql_error());
echo "<script>alert('Account Denied!'); window.location='applicants_teach.php'</script>";
?>