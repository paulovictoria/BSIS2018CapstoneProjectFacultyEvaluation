<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
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
<caption><h3><center>Major list</center></h3></caption>

<a href="add_major.php" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Major</a>
<div class="pull-right">
  <form class="navbar-search pull-left">
  <input type="text" class="search-query" placeholder="Search">
</form>
</div>
<hr>
<div class="pagination">
  <ul>
  
    <li class="active"><a href="schedule.php"><font color="black">All</font></a></li>
    
      <a href="BSIS.php"><font color="black">BSIS</font></a>
    
    <li><a href="BSCE.php"><font color="black">BSCE</font></a></li>
    <li><a href="BSHRM.php"><font color="black">BSHRM</font></a></li>
    <li><a href="BSIT.php"><font color="black">BSIT</a></font></li>
    
  </ul>
  
</div>


<!--- table -->
<table width="800" class="table table-hover">


<thead>

<tr>

<th>Program</th>
<th>Year & Section</th>
<th>School Year</th>
<th>Major</th>
<th>Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from major") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_major'];
?>

<tr>
<td> <?php echo $row ['program']; ?></td>
<td> <?php echo $row ['yr_sec']; ?></td>
<td> <?php echo $row ['sy']; ?></td>
<td> <?php echo $row ['major']; ?></td>



<td width="180">
<a href="edit_major.php <?php echo '?id='. $id; ?>" class="btn btn-warning"><i class="icon-pencil icon-large"></i>&nbsp; Edit </a> 
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
<a href="delete_major.php<?php echo '?id_major='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
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
</div>

<?php include('modal.php'); ?>	
</body>
</html>