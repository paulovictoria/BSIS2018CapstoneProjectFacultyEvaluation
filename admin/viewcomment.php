<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<body>
<?php include ('menunav.php'); ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/banner.png">
						 </div>
           </div>         </div>
      </div>
    </div>
  </div>
<!--- body -->
<div class="container">
<div class="row-fluid">
<div class="span12">

  	
<div class="span12">
   <div class="hero-unit">
  
<caption>Comments</caption>
<br>
<hr>

      <table width="900" class="table table-bordered table-striped table-hover">
           <thead>
		     <tr>
			     <th>FirstName</th>
			     <th>LastName</th>
			    
			     <th>Comments</th> 
			     
			      
			      
			      
			      
			      
		     </tr>
           </thead>
		   <tbody>

			   
								
							

								<?php
								$result3 = mysql_query("SELECT * FROM details");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								  ?>
								 <tr>
									
									<td> <?php echo $row3['fname']; ?> </td>
									<td> <?php echo $row3['lname']; ?> </td>
									<td width="50">
                             <a href="viewcomment.php  <?php echo '?id_teacher='.$id;?>" class="btn btn-info">View</a>
</td>
									
									
									
								 </tr>
							<?php
							}
			  
			  ?>	   
		   </tbody>
      
      </table>
            
	
             	
</div>	
</div>	
	
	
	
	
	
	
	
</div>	
</div>	
</div>	
	
<?php include ('footer.php'); ?>
</div>
</div>
</div>
</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>