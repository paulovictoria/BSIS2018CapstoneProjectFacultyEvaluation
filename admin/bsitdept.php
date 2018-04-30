<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<body>


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
<div class="hero-unit-3">
<legend><h3><center>Teacher's List</center></h3></legend>
<div class="span12">
				<div class="pagination">
				<ul>
					<li><a href="department.php"><font color="#000000">All</font></a></li>
    <li><a href="bsisdept.php"><font color="#000000">BSIS</font></a></li>
    <li><a href="bscedept.php"><font color="#000000">BSCE</font></a></li>
    <li><a href="bshrmdept.php"><font color="#000000">BSHRM</font></a></li>
    <li class="active"><a href="bsitdept.php"><font color="#000000">BSIT</a></font></li>
				
				</ul>
				</div>
				</div>
<!--- table -->
<table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="example">


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
$result= mysql_query("select *from teacher where program='BSIT'") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_teacher'];
?>

<tr>
<td> <?php echo $row ['teacherid']; ?></td>
<td> <?php echo $row ['fname']; ?></td>
<td> <?php echo $row ['lname']; ?></td>
<td> <?php echo $row ['academic_rank']; ?></td>
<td> <?php echo $row ['program']; ?></td>
<td> <?php echo $row ['subject']; ?></td>
<td> <?php echo $row ['yr']; ?></td>


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
</body>
</html>