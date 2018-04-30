<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>

<head>
  <style>
    .wrapperbsis{
      background-size: cover;
      background-attachment: fixed;
      background-image: url("images/wrapper.jpg");
    }
  </style>
</head>

<body class="wrapperbsis">


<?php include ('menunav.php') ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
  
                           <img src="images/bpcbanner2.png">
			
    </div>
    </div>
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Student Account List</center></h3></legend>
<a href="#addstudent" data-toggle="modal" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Student Account</a>


<br>
<br>
<!--- table -->
<table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="example">

<caption><div class="pagination">
  <ul>
    <li><a href="student.php"><font color="#000000">All</font></a></li>
    <li class="active"><a href="bsisstudent.php"><font color="#000000">BSIS</font></a></li>
    <li><a href="bsomstudent.php"><font color="#000000">BSOM</font></a></li>
    <li><a href="comsecstudent.php"><font color="#000000">ComSec</font></a></li>
    <li><a href="ccmstudent.php"><font color="#000000">CCM</font></a></li>
    <li><a href="hrsstudent.php"><font color="#000000">HRS</font></a></li>
    <li><a href="eimstudent.php"><font color="#000000">EIM</font></a></li>
	
   
  </ul>
</div></caption>

<thead>

<tr>
<th>ID Number</th>
<th>Program</th>
<th>Year</th>
<th>Section</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>
<tbody>

<?php
$result= mysql_query("select *from student where program='BSIS'") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_student'];
?>

<tr>
<td> <?php echo $row ['id_number']; ?></td>
<td> <?php echo $row ['program']; ?></td>
<td> <?php echo $row ['yr']; ?></td>
<td> <?php echo $row ['sec']; ?></td>
<td> <?php echo $row ['status']; ?></td>



<td width = "180"> 
	<a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit</a>
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
<a href="delete_student.php<?php echo '?id_student='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
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
<?php include ('addstudent_modal.php'); ?>
<?php include('modal.php'); ?>	
</body>
</html>