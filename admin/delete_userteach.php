<?php 

include('dbcon.php');
$get_id=$_GET['id_teacher'];


mysql_query("DELETE FROM teacher where id_teacher='$get_id'")or die(mysql_error());
echo "<script>alert('Deleted!'); window.location='user_teacher.php'</script>";
?>