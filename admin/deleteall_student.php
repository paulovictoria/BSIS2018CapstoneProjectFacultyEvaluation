<?php 

include('dbcon.php');


mysql_query("delete from student")or die(mysql_error());
echo "<script>alert('All Account Expired!'); window.location='student.php'</script>";
?>