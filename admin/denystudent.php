<?php 

include('dbcon.php');
$get_id=$_GET['id_student'];

mysql_query("delete from student where id_student='$get_id'")or die(mysql_error());
echo "<script>alert('Account Denied!'); window.location='applicants.php'</script>";
?>