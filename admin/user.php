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
<div class="hero-unit-3">
<legend><h3>User's Account list</h3></legend>

<a href="#adduser" data-toggle="modal" class="btn"><i class="icon-plus-sign"></i>&nbsp;Add User</a>
<br>
<br>
<!--- table -->
<table style="width:1129px;" class="table table-bordered table-hover table-striped" id="example">


<thead>

<tr>
<th>Username</th>
<th>Password</th>

<th>First Name</th>
<th>Last Name</th>


<th>Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from user") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_user'];
?>

<tr>
<td> <?php echo $row ['username']; ?></td>
<td> <?php echo $row ['password']; ?></td>

<td> <?php echo $row ['fname']; ?></td>
<td> <?php echo $row ['lname']; ?></td>




<td width = "180">
	<a href="edit_user.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit</a>
	 <a href="#<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><i class="icon-trash icon-large"></i>&nbsp; Delete </a>
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
<a href="delete_user.php<?php echo '?id_user='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
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
<?php include('adduser_modal.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>
	
	
	
	



