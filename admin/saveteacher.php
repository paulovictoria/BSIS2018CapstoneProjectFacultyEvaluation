
<?php
$i = 0;
foreach( $_POST['id_teacher'] as $id ): 
	$query = mysql_query("UPDATE teacher SET fname = '".$_POST['fname'][$i]."', lname = '".$_POST['lname'][$i]."', academic_rank = '".$_POST['academic_rank'][$i]."', program = '".$_POST['program'][$i]."', subject = '".$_POST['subject'][$i]."', yr = '".$_POST['yr'][$i]."' WHERE id_teacher = '".$id."'")
	or die(mysql_error());
$i++;
endforeach;
?>


