<?php
include ('dbcon.php'); 
include ('header.php'); 
?>
<?php include ('session.php'); ?>

<body>


<?php include ('menunav.php')?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/banner.png">
						 </div>
                    </div>
      </div>
    </div>
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="hero-unit">
<caption><h3><center>Course Year and Section List</center></h3></caption>
<hr>
<a href="add_course.php" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Course Year/Section</a>
<!--- table -->
<table width="800" class="table table-hover">
<caption><h6>-</h6></caption>

<thead>

<tr>
<th>Course Year Section</th>
<th>Major</th>
<th>Department</th>
<th>Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from course") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_course'];
?>

<tr>
<td> <?php echo $row ['course_yr_sec']; ?></td>
<td> <?php echo $row ['major']; ?></td>
<td> <?php echo $row ['department']; ?></td>


<td width="180"><a href="#<?php echo $id;?>" data-toggle="modal" class="btn btn-danger"> <i class="icon-trash icon-large"></i>&nbsp; Delete </a>
<a href="edit_course.php <?php echo '?id='. $id; ?>" class="btn btn-warning"><i class="icon-pencil icon-large"></i>&nbsp; Edit </a> </td>

	
		<!-- Modal -->
<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
</div>
<hr>
<div class="modal-footer">
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
<a href="delete_course.php<?php echo '?id_course='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
</div>
</div>
	
    </tr>
	<?php } ?>
    </tbody>
    </table>
	</div>
	
	<!-- end table -->
	
	

</div>
</div>
</div>
<?php include ('footer.php'); ?>
</div>
</div>
</div>
<?php
include ('modal.php');
?>
</body>
</html>