<?php 

include('dbcon.php');
$get_id=$_GET['id_teacher'];


mysql_query("DELETE FROM teacherload where id_teacher='$get_id'")or die(mysql_error());
echo "<script>alert('Unloaded!'); window.location='teacherload.php'</script>";
?>