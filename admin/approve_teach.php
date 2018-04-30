<?php 

include('dbcon.php');
$get_id=$_GET['id_teacher'];


mysql_query("UPDATE teacher SET approved = '1' WHERE id_teacher = '$get_id'")or die(mysql_error());
echo "<script>alert('Account Approved!'); window.location='applicants_teach.php'</script>";
?>