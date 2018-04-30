<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<body>
<?php $ID=$_GET['id']; ?>

<?php include ('menunav.php')?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
  
                           <img src="images/banner.png">
			
    </div>
    </div>
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="hero-unit">
<caption><h3><center>Teacher's List</center></h3></caption>
<hr>
<a href="add_teacher.php" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Teacher</a>

<br>
<br>
<!--- table -->
<form id="saveTeacher" method="POST" action="saveteacher.php">
<table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

<caption><div class="pagination">
  <ul>
    <li class="active"><a href="teacher.php"><font color="#000000">All</font></a></li>
    <li><a href="BSIS.php"><font color="#000000">BSIS</font></a></li>
    <li><a href="BSCE.php"><font color="#000000">BSCE</font></a></li>
    <li><a href="BSHRM.php"><font color="#000000">BSHRM</font></a></li>
    <li><a href="BSIT.php"><font color="#000000">BSIT</a></font></li>
   
  </ul>
</div></caption>

<thead>

<tr>
<th>ID</th>
<th>First name</th>
<th>Last name</th>
<th>Academic rank</th>
<th>Program</th>
<th>Subject assign</th>
<th>Year</th>
<th>Action</th>
</tr>

</thead>
<tbody>

<?php
$result= mysql_query("select *from teacher") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_teacher'];
?>

<tr>
<td><input type="text" class="span12" value="<?php echo $row ['teacherid']; ?>" name="teacherid[]"></td>
<td><input type="text" name="fame[]" class="span12" value="<?php echo $row ['fname']; ?>"></td>
<td><input type="text" name="lname[]" class="span12" value="<?php echo $row ['lname']; ?>"></td>
<td><input type="text" name="academic_rank[]" class="span12" value="<?php echo $row ['academic_rank']; ?>"></td>
<td><input type="text" name="program[]" class="span12" value="<?php echo $row ['program']; ?>"></td>
<td><input type="text" name="subject[]" class="span12" value="<?php echo $row ['subject']; ?>"></td>
<td><input type="text" name="yr[]" class="span12" value="<?php echo $row ['yr']; ?>"></td>


<td width="190">
<a href="edit_teacher.php <?php echo '?id='. $id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit </a>
<a href="#<?php echo $id;?>" data-toggle="modal" class="btn btn-danger"> <i class="icon-trash icon-large"></i>&nbsp; Delete </a>
 </td>

	
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
<a href="delete_teacher.php<?php echo '?id_teacher='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
</div>
</div>
	
    </tr>
	<?php } ?>
    </tbody>
    </table>
	<button type="submit" class="btn btn-success"><i class="icon-edit icon-white"></i>&nbsp;Save Changes</button>
	</form>
	</div>
	
	<!-- end table -->
	
	

</div>
</div>
<?php include ('footer.php'); ?>
</div>

</div>
</div>
</div>
<?php include ('addteacher_modal.php'); ?>
<?php include('modal.php'); ?>	
<script type="text/javascript">
		jQuery( document ).ready( function($){
			$("#saveTeacher").submit( function(evt){
				evt.preventDefault();
				var url = $(this).attr('action');
				var formData = $(this).serialize();
				$.ajax({
					url: url,
					type: 'POST',
					data: formData,
					success: function(result){
						alert('Data Saved');
					}
				});
			});
		});
	</script>
</body>
</html>