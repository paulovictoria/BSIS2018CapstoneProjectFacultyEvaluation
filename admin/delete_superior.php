<?php 

include('dbcon.php');
$get_id=$_GET['id_sup'];


mysql_query("delete from superiors where id_sup ='$get_id'") or die(mysql_error());
echo "<script>alert('Deleted!'); window.location='superiors.php'</script>";