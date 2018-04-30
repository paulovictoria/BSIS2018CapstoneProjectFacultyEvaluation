<?php 

include('dbcon.php');
$get_id=$_GET['id_student'];


mysql_query("UPDATE student SET approved = '1' WHERE id_student = '$get_id'")or die(mysql_error());
echo "<script>alert('Account Approved!'); window.location='applicants.php'</script>";
?>




