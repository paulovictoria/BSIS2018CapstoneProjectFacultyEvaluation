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
                           <img class="banner" src="images/banner.png">
						 </div>
           </div>         </div>
      </div>
    </div>
  </div>
<!--- body -->
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="chmsc">

<center>

<p>Republic of the Philippines</p>
<p>Carlos Hilado Memorial State Collge</p>
<p>Talisay City, Negros Occidental</p>
<p>College of Industrial Technology</p>
</center>
<img id="logo"  src="images/chmsc.png" width="150"> 
</div>
  	
<div class="span12">
   <div class="hero-unit-3">
   <div class="pull-right"><a href="#" id="print" class="btn btn-inverse" onClick="window.print()"><i class="icon-print"></i>&nbsp;Print</a></div>
   <br>
   <br>
   
   
      <table id="first_table" class="table table-bordered table-hover">
	  
           <thead>
		     <tr>
			     <th>FirstName</th>
			     <th>LastName</th>
			     <th>Subject</th> 
			     <th>Semester</th>
			     <th>A.Y.</th> 
			     
			     
			      
			      
			      
			      
			      
		     </tr>
           </thead>
		   <tbody>
<?php
			   
		if (isset($_GET['id_teacher']))
		$id=$_GET['id_teacher'];
		$result3 = mysql_query("SELECT * FROM details WHERE id_teacher='$id'");
		while($row3 = mysql_fetch_array($result3)){
		?>
		 <tr>
			
			<td><?php echo $row3['fname']; ?></td>
			<td><?php echo $row3['lname']; ?></td>
			<td><?php echo $row3['subject']; ?></td>
			<td><?php echo $row3['semester']; ?></td>
			<td><?php echo $row3['sy']; ?></td>
			
			
		 </tr>
							
								<?php  }
                                  ?>			  
			 
		   </tbody>
      
      </table>
	  <table class="table table-bordered table-striped table-hover">
	  
           <thead>
		   
		     <tr>
			     <th>Criteria for evaluation</th>
			     <th>Mean score</th>
			     <th>Verbal interpretation</th> 
			     </tr>
           </thead>
		   <tbody>
		   
		   
		   
		        <?php
			  
								

								
								$result3 = mysql_query("SELECT * FROM details WHERE id_teacher='$id'");
								$count = mysql_num_rows($result3);
						
								
								while($row3 = mysql_fetch_array($result3))
								  {
								$teacher_name =  $row3['fname'];
																  $ave1=$row3['q1'];
																  $ave2=$row3['q2'];
																  $ave3=$row3['q3'];
																  $ave4=$row3['q4'];
																  $avetotal=$row3['avetotal'];
								  ?>
		   
		   <tr>
		   <td>Commitment</td>
							<?php
                            $result2 = mysql_query("SELECT *  FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
							$count = mysql_num_rows($result2);			
							?>
		   
	
							<?php
                      
                            $result = mysql_query("SELECT sum(q1) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 
                                   
                          <?php $ave11 = $rows['sum(q1)']; 
							$equal =	$ave11 / $count;
						  ?>
                            <?php } ?>
                      
								
								
								<?php
                      
                            $result = mysql_query("SELECT sum(q2) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave12 = $rows['sum(q2)']; 
							$equal1 =	$ave12 / $count;
						  ?>
                            <?php } ?>
							
							
							
							
							<?php
                      
                            $result = mysql_query("SELECT sum(q3) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave13 = $rows['sum(q3)']; 
							$equal2 =	$ave13 / $count;
						  ?>
                            <?php } ?>
							
							
									<?php
                      
                            $result = mysql_query("SELECT sum(q4) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave14 = $rows['sum(q4)']; 
							$equal3 =	$ave14 / $count;
						  ?>
                            <?php } ?>
							
							<?php
							
							$total = ($equal + $equal1 + $equal2 + $equal3)/ 4 ;
							
							?>
									
								
							
							
							
					  
					
					
		  <td><?php echo $equal; ?></td>
		  
		  
		  <td>
									<?php
									if($equal >= 4.2 && $equal <= 5){
				  /// Value would be 3.142
				
					echo 'Outstanding';
				}elseif($equal >= 3.4 && $equal <= 4.19){
					echo 'Very satisfactory';
				}elseif($equal >= 2.6 && $equal <= 3.39){
					echo 'Satisfactory';
				}elseif($equal >= 1.8 && $equal <= 3.59){
					echo 'Unsatisfactory';
				}elseif($equal >= 1.0 && $equal <= 1.79){
					echo 'Poor';
				}
								?>		
									</td>
		   </tr>
		   <tr>
		   <td>Knowledge of Subject</td>
		   <td><?php echo $equal1; ?></td>
		   <td>
									<?php
									if($equal1 >= 4.2 && $equal1 <= 5){
				   /// Value would be 3.142
				
					echo 'Outstanding';
				}elseif($equal1 >= 3.4 && $equal1 <= 4.19){
					echo 'Very satisfactory';
				}elseif($equal1 >= 2.6 && $equal1 <= 3.39){
					echo 'Satisfactory';
				}elseif($equal1 >= 1.8 && $equal1 <= 3.59){
					echo 'Unsatisfactory';
				}elseif($equal1 >= 1.0 && $equal1 <= 1.79){
					echo 'Poor';
				}
								?>		
									</td>
		   </tr>
		   <tr>
		   <td>Teaching for Independent Learning</td>
		   <td><?php echo $equal2; ?></td>
		   <td>
									<?php
									if($equal2 >= 4.2 && $equal2 <= 5){
				/*  echo round(4.2222, 2);  */// Value would be 3.142
				
					echo 'Outstanding';
				}elseif($equal2 >= 3.4 && $equal2 <= 4.19){
					echo 'Very satisfactory';
				}elseif($equal2 >= 2.6 && $equal2 <= 3.39){
					echo 'Satisfactory';
				}elseif($equal2 >= 1.8 && $equal2 <= 3.59){
					echo 'Unsatisfactory';
				}elseif($equal2 >= 1.0 && $equal2 <= 1.79){
					echo 'Poor';
				}
								?>		
									</td>
		   </tr>
		   <tr>
		   <td>Management of Learning</td>
		   <td><?php echo $equal3 ?></td>
		   <td>
									<?php
									if($equal3 >= 4.2 && $equal3 <= 5){
				/*  echo round(4.2222, 2);  */// Value would be 3.142
				
					echo 'Outstanding';
				}elseif($equal3 >= 3.4 && $equal3 <= 4.19){
					echo 'Very satisfactory';
				}elseif($equal3 >= 2.6 && $equal3 <= 3.39){
					echo 'Satisfactory';
				}elseif($equal3 >= 1.8 && $equal3 <= 3.59){
					echo 'Unsatisfactory';
				}elseif($equal3 >= 1.0 && $equal3 <= 1.79){
					echo 'Poor';
				}
								?>		
									</td>
		   </tr>
		   <tr>
		   <td><center><strong>Overall mean</strong></center></td>
		   <td><?php echo $total; ?></td>
		   <td>
									<?php
									if($total >= 4.2 && $total <= 5){
				/*  echo round(4.2222, 2);  */// Value would be 3.142
				
					echo 'Outstanding';
				}elseif($total >= 3.4 && $total <= 4.19){
					echo 'Very satisfactory';
				}elseif($total >= 2.6 && $total <= 3.39){
					echo 'Satisfactory';
				}elseif($total >= 1.8 && $total <= 3.59){
					echo 'Unsatisfactory';
				}elseif($total >= 1.0 && $total <= 1.79){
					echo 'Poor';
				}
								?>		
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