
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
   <div class="hero-unit-3">
<div class="pull-right"><a href="#" id="print" class="btn btn-inverse" onClick="window.print()"></i>&nbsp;Print</a></div>  
<legend>Overall reports</legend>


      <table class="table table-bordered  table-hover" id="example">
           <thead>
		     <tr>
			     <th width="90">FirstName</th>
			     <th width="90">LastName</th>
			     <th width="50">Subject</th> 
			     <th width="50">Semester</th>
			     <th width="50">A.Y.</th> 
			     <th width="50">Commitment</th> 
			     <th width="100">Knowledge of the Subject</th> 
			     <th width="100">Teaching for Independent Learning</th> 
			     <th width="50">Management of Learning</th> 
			     <th width="50">Profissionalism</th> 
			     <th>Overall Mean</th> 
			     <th>Verbal Interpretation</th> 
			     
			      
			      
			      
			      
			      
		     </tr>
           </thead>
		   <tbody>
<?php
			  
								

								
								$result3 = mysql_query("SELECT * FROM details group by fname, sy, semester, subject");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								$teacher_name =  $row3['fname'];
								$ave1=$row3['ave1'];
								$ave2=$row3['ave2'];
								$ave3=$row3['ave3'];
								$ave4=$row3['ave4'];
								$ave5=$row3['ave5'];
								$avetotal=$row3['avetotal'];
								  ?>
								  
								  
								 <tr>
									
									<td><?php echo $row3['fname']; ?></td>
									<td><?php echo $row3['lname']; ?></td>
									<td><?php echo $row3['subject']; ?></td>
									<td><?php echo $row3['semester']; ?></td>
									<td><?php echo $row3['sy']; ?></td>
									<td>
									<?php
                            $result2 = mysql_query("SELECT *  FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
							$count = mysql_num_rows($result2);			
							?>
		   
	
							<?php
                      
                            $result = mysql_query("SELECT sum(ave1) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
								 <?php $ave11 = $rows['sum(ave1)']; 
							echo $equal = number_format((float)$ave11 / $count,2,".",'');
						  ?>
                            <?php } ?>
									</td>
									
									<td>
									<?php
                      
                            $result = mysql_query("SELECT sum(ave2) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave12 = $rows['sum(ave2)']; 
							echo $equal1 = number_format((float)$ave12 / $count,2,".",'');
						  ?>
                            <?php } ?>
									</td>
									<td>
									<?php
                      
                            $result = mysql_query("SELECT sum(ave3) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave13 = $rows['sum(ave3)']; 
							echo $equal2 = number_format((float)$ave13 / $count,2,".",'');
						  ?>
                            <?php } ?>
							</td>
									<td>
									<?php
                      
                            $result = mysql_query("SELECT sum(ave4) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave14 = $rows['sum(ave4)']; 
							echo $equal3 =	number_format((float)$ave14 / $count,2,".",'');
						  ?>
                            <?php } ?>
									</td>
									<td>
									<?php
                      
                            $result = mysql_query("SELECT sum(ave5) FROM details WHERE fname = '$teacher_name' ") or die(mysql_error());
                   
						
							while ($rows = mysql_fetch_array($result)) {
						
                                ?>
 

                          <?php $ave15 = $rows['sum(ave5)']; 
							echo $equal4 = number_format((float)$ave15 / $count,2,".",'');
						  ?>
                            <?php } ?>
							
							<?php
							
							$total = ($equal + $equal1 + $equal2 + $equal3 + $equal4)/ 5 ;
							
							?>
									</td>
									<td>
									<?php echo number_format((float)$total,2,".",''); ?>
									</td>
									<td>
				
		  <!--Value would be 3.142-->
										<?php
				if($total >= 4.2 && $total <= 5){
					echo 'Outstanding';
				}elseif($total >= 3.4 && $total <= 4.19){
					echo 'Very satisfactory';
				}elseif($total >= 2.6 && $total <= 3.39){
					echo 'Satisfactory';
				}elseif($total >= 1.8 && $total <= 3.59){
					echo 'Unsatisfactory';
				}elseif($total >= 1.0 && $total <= 1.79){
					echo 'Poor';
				}elseif($total >= 0 && $total <= 0){
					echo 'Undefined';
				}
								?>		
								
									</td>	
									</td>
									
				
				
								 </tr>
							
			<?php  }
			  
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