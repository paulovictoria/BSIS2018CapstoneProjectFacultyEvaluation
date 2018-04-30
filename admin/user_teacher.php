<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>

<title>User | Teacher</title>

<head>
    <style>
        .wrapperpersonnel{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperpersonnel">
<?php include ('menunav.php') ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/bpcbanner3.png">
						 </div>
                    </div>
      </div>
    </div>
	<!-- end banner & menunav -->
	<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<center><legend><h3>Teacher's Account list</h3></legend></center>


<br>
<br>
<!--- table -->
<table style="width:1129px;" class="table table-bordered table-hover table-striped" id="example">


<thead>

<tr>
<th style="text-align:center;">Username</th>
<th style="text-align:center;">Password</th>
<th style="text-align:center;">First Name</th>
<th style="text-align:center;">Last Name</th>
<th style="text-align:center;">Department</th>
<th style="text-align:center;">Category</th>
<th style="text-align:center;">Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from teacher where approved=1") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_teacher'];
?>

<tr>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['usernamee']; ?></td>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['passwordd']; ?></td>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['fname']; ?></td>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['lname']; ?></td>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['program']; ?></td>
<td style="text-align:center; word-break:break-all;"> <?php echo $row ['category']; ?></td>




<td style="text-align:center; width:201px;">

	<a href="edit_teacher.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit</a>
	 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><i class="icon-trash icon-large"></i>&nbsp; Delete </a>
	</td>
	
		<!-- Modal -->
<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
</div>
<hr>
<div class="modal-footer">
<a href="delete_userteach.php<?php echo '?id_teacher='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
</div>
</div>
</div>
	
    </tr>
	
 <!-- Modal Bigger Image -->
    <div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['lname']; ?></b></h3>
    </div>
    <div class="modal-body">
	<?php if($row['profile_pic'] != ""): ?>
	<img src="upload/<?php echo $row['profile_pic']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
	<?php else: ?>
	<img src="../images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
	<?php endif; ?>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
	
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
<?php include('addpersonnel_modal.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>
	
	
	
	



