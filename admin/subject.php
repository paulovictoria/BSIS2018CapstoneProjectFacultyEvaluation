<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<body>


<?php include ('menunav.php') ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/banner4.png">
						 </div>
                    </div>
      </div>
    </div>
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="hero-unit">
<caption><h3><center>Subject List</center></h3></caption>
<hr>
<a href="add_subject.php" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Subject</a>
<div class="pull-right">
  <form class="navbar-search pull-left">
  <input type="text" class="search-query" placeholder="Search">
</form>
</div>
<!--- table -->
<table width="800" class="table table-hover">
<caption><h6>-</h6></caption>

<thead>

<tr>
<th>Subject Code</th>
<th>Subject title</th>
<th>Subject Category</th>
<th>Semester</th>
<th>Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from subject") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_subject'];
?>

<tr>
<td> <?php echo $row ['subject_code']; ?></td>
<td> <?php echo $row ['subject_title']; ?></td>
<td> <?php echo $row ['subject_category']; ?></td>
<td> <?php echo $row ['semester']; ?></td>


<td width="180">
<a href="edit_subject.php <?php echo '?id='. $id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit </a> 
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
<a href="delete_subject.php<?php echo '?id_subject='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
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
<?php include('modal.php'); ?>	
</body>
</html>