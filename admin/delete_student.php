<?php 

include('dbcon.php');
$get_id=$_GET['id_student'];


mysql_query("DELETE FROM student where id_student='$get_id'")or die(mysql_error());
echo "<script>alert('Drop Successful!'); window.location='student.php'</script>";

?>