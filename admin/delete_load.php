<?php 

include('dbcon.php');
$get_id=$_GET['id_load'];


mysql_query("DELETE FROM classload where id_load='$get_id'")or die(mysql_error());
echo "<script>alert('Load Deleted!'); window.location='classload.php'</script>";
?>