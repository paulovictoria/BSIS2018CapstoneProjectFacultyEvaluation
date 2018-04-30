<?php 

include('dbcon.php');
$get_id=$_GET['id_subject'];


mysql_query("delete  from subject where id_subject='$get_id'")or die(mysql_error());
echo "<script>alert('Subject Deleted!'); window.location='subject.php'</script>";
?>