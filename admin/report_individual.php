<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<body>
<?php include ('menunav.php') ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   
                           <img src="images/banner4.png">
			
    </div>
  </div>
<!--- body -->
<div class="container">
<div class="row-fluid">

<div class="span12">

	

   <div class="hero-unit-3">
   

<legend>Individual reports</legend>
<table style="width:1128px;" class="table table-hover table-bordered" id="example">
 
     <thead>
	   <th>Faculty Name</th>
	   <th>Subject</th>
	   <th>Action</th>
     </thead>
     <tbody>
	   <?php
	     
         $result= mysql_query("select * FROM details order BY id_teacher") or die (mysql_error());
         while ($row= mysql_fetch_array ($result) ){
          $id=$row['id_teacher'];
	     $fname=$row['fname'];
		 $lname=$row['lname'];
		 $subject=$row['subject'];
		
         ?>

  <tr>
       <td> <?php echo $row ['fname']; ?>
        <?php echo $row ['lname']; ?>
       </td>
	    <td width="500"> <?php echo $row ['subject']; ?></td>
	   
      
	   <td width="50">
<a href="individualreport.php  <?php echo '?id_teacher='.$id;?>" class="btn btn-info">View</a>
</td>
  </tr>
		 <?php } ?>
     </tbody>
 
 </table>
</div>

	
	
	
	
	
	
	
</div>	
</div>	
<?php include ('footer.php'); ?>
</div>	
	

</div>
</div>
</div>
</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>