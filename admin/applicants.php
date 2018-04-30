<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>


<title>Applicants | Student</title>

<head>
    <style>
        .wrapperstudent{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperstudent">
<?php include ('menunav.php') ?>
<div class="container">
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
  
                           <img src="images/bpcbanner4.png">
      
    </div>
    </div>
     
  <!-- end banner & menunav -->


<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<br/>
<br/>
<br/>
<legend><h3><center>Student's Account Applicants List</center></h3></legend>



<br>
<br>
<!--- table -->

<table style="width:1129px;" class="table table-hover table-striped" id="example">


<thead>

<tr>
<th>ID Number</th>
<th>Last Name</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Program</th>
<th>Year</th>
<th>Section</th>
<th>Action</th>

</tr>

</thead>
<tbody>

<?php
$result= mysql_query("select * from student where approved= 0") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_student'];

?>

<tr>
<td> <?php echo $row ['id_number']; ?></td>
<td> <?php echo $row ['lname']; ?></td>
<td> <?php echo $row ['fname']; ?></td>
<td> <?php echo $row ['mname']; ?></td>
<td> <?php echo $row ['program']; ?></td>
<td> <?php echo $row ['yr']; ?></td>
<td> <?php echo $row ['sec']; ?></td>



<td width = "180"> 
   <a href="#apps<?php echo $id; ?>" data-toggle="modal" class="btn btn-inverse" ><i></i> Approve</a>
   <a href="#denystud<?php echo $id?>"  data-toggle="modal"  class="btn btn-danger" ><i></i> Deny</a>
  </td>
    <!-- Modal -->
<div id="apps<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<p><div class="alert alert-danger">Are you Sure you want to <strong>"APPROVE"?</strong></p>
</div>
<hr>
<div class="modal-footer">
<a href="approve_app.php<?php echo '?id_student='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
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
<?php include ('footer.php'); ?>
<?php include('denystudent_modal.php'); ?>
</div>
</div>
</div>
</div>
<?php include('addstudent_modal.php'); ?>

<?php include('modal.php'); ?>
</body>
</html>
  
  
  
  



