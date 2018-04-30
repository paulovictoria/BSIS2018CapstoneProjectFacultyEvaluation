<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>

<title>User | Student</title>

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
<legend><h3><center>Student's Account List</center></h3></legend>
<div class="pull-right"><a href="#" id="print" class="btn btn-inverse" onClick="window.print()"></i>&nbsp;Print</a></div> 
<a href="#del" data-toggle="modal" class="btn btn-danger">Delete All Account</a>
<br>
<br>
<!--- table -->
<table style="width:1129px;" class="table table-hover table-striped" id="example">

<caption><div class="pagination">
  <ul>
    <li class="active"><a href="student.php"><font color="#000000">All Year</font></a></li>
    <li class="active"><a href="1st.php"><font color="#000000">1st Year</font></a></li>
    <li class="active"><a href="2nd.php"><font color="#000000">2nd Year</font></a></li>
    <li class="active"><a href="3rd.php"><font color="#000000">3rd Year</font></a></li>
    <li class="active"><a href="4th.php"><font color="#000000">4th Year</font></a></li>
    
  </ul>
</div></caption>

<thead>

<tr>
<th>ID Number</th>
<th>Last Name</th>
<th>First Name</th>
<th>Last Name</th>
<th>Program</th>
<th>Year</th>
<th>Section</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>
<tbody>

<?php
$result= mysql_query("select *from student where yr = '3rd'") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['id_student'];
?>

<tr>
<td> <?php echo $row ['id_number']; ?></td>
<td> <?php echo $row ['lname']; ?>,</td>
<td> <?php echo $row ['fname']; ?></td>
<td> <?php echo $row ['mname']; ?>.</td>
<td> <?php echo $row ['program']; ?></td>
<td> <?php echo $row ['yr']; ?></td>
<td> <?php echo $row ['sec']; ?></td>
<td> <?php echo $row ['status']; ?></td>



<td width = "180"> 
  <a href="editstudent_1st.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i></i>Edit</a>
  <a href="#<?php echo $id?>"  data-toggle="modal"  class="btn btn-danger" ><i class="icon-trash icon-large"></i>DROP</a>
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
<a href="delete_student.php<?php echo '?id_student='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
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

</div>
</div>
</div>
</div>
<?php include('addstudent_modal.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>
  
  
  
  



