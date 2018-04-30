<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>

<title>Manage | Load</title>

<head>
    <style>
        .wrapperteacher{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperteacher">


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
<br/>
<br/>
<br/>
<legend><h3><center>Teacher's Load</center></h3></legend>

<a href="#addteacher" data-toggle="modal" class="btn btn-inverse"><i class="icon-plus-sign"></i>&nbsp;Add Load</a>

<br>
<br>
<!--- table -->

<table   cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" id="example">

<caption><div class="pagination">
  <ul>
    <li class="active"><a href="teacher.php"><font color="#000000">All</font></a></li>
    <li><a href="bsis.php"><font color="#000000">BSIS</font></a></li>
    <li><a href="bsom.php"><font color="#000000">BSOM</font></a></li>
    <li><a href="comsec.php"><font color="#000000">ComSec</font></a></li>
    <li><a href="ccm.php"><font color="#000000">CCM</font></a></li>
    <li><a href="hrs.php"><font color="#000000">HRS</font></a></li>
    <li><a href="eim.php"><font color="#000000">EIM</font></a></li>
   
  </ul>
</div></caption>


<thead>

<tr>
<th style="text-align:center;">Teacher ID</th>
<th style="text-align:center;">Teacher</th>
<th style="text-align:center;">Program</th>
<th style="text-align:center;">Subject</th>
<th style="text-align:center;">Year</th>
<th style="text-align:center;">Section</th>
<th style="text-align:center;">Action</th>
</tr>

</thead>
<tbody>
<?php
$result= mysql_query("select *from teacherload order by teacherid ASC" ) or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_teacher'];
$year=$row['yr'];
$section=$row['sec'];
?>

<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['teacherid']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['fname']; ?> <?php echo $row ['lname']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['program']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['subject']; ?></td>
<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['yr']; ?></td>
<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['sec']; ?></td>




<td style="text-align:center; width:586px;">
<a href="edit_teacher.php <?php echo '?id='. $id; ?>" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp; Edit </a>
<a href="#delete<?php echo $id;?>" data-toggle="modal" class="btn btn-danger"> <i class="icon-trash icon-large"></i>&nbsp; Unload </a>
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
<a href="delete_teacher.php<?php echo '?id_teacher='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
</div>
</div>
	
    </tr>
	
 <!-- Modal Bigger Image -->
    <div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel"><b><?php echo $row['fname']." ".$row['lname']; ?></b></h3>
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
<?php include ('footer.php'); ?>
</div>

</div>
</div>
</div>
<?php include ('addteacher_modal.php'); ?>
<?php include('modal.php'); ?>	
</body>
</html>