<?php 
include ('dbcon.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
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
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from teacher where id_teacher='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Teacher</h4></legend>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">ID:</label>
                                    <div class="controls">
                                        <input type="text" name="teacherid" required value=<?php echo $row['teacherid']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">First name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Last name:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Academic rank:</label>
                                    <div class="controls">
									     <input type="text" name="academic_rank" required value=<?php echo $row['academic_rank']; ?>>
                                       
                                    </div>
                                
                               </div>
							   
                                
                          
							   
							   <div class="control-group">
                                    <label class="control-label" for="inputPassword">Program:</label>
                                    <div class="controls">
									     
										 <select type="text" name="program">
											<option>BSIS</option>
											<option>BSHRM</option>
											<option>BSCE</option>
											<option>BSIT</option>
											
										
											
										 </select>
										 
                                       
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject:</label>
                                    <div class="controls">
									     <input type="text" name="subject" value=<?php echo $row['subject']; ?>>
                                       
                                    </div>
                                    </div>
									<div class="control-group">
                                    <label class="control-label" for="inputPassword">Year:</label>
                                    <div class="controls">
									     
										 <select type="text" name="yr">
											<option>1st</option>
											<option>2nd</option>
											<option>3rd</option>
											<option>4th</option>
											
											
										
											
										 </select>
										 
                                       
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Section:</label>
                                    <div class="controls">
									     
										 <select type="text" name="sec">
											<option>A</option>
											<option>B</option>
											<option>C</option>
											<option>D</option>
											<option>E</option>
											
											
										
											
										 </select>
										 
                                       
                                    </div>
                                </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="teacher.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                                </div>
                            </form>
							
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM teacher WHERE id_teacher = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$teacherid=$test['teacherid'] ;
				$fname=$test['fname'] ;
				$lname=$test['lname'] ;
				$academic_rank=$test['academic_rank'] ;
				$program=$test['program'] ;
				$subject=$test['subject'] ;
				$yr=$test['yr'] ;
				$sec=$test['sec'] ;
				
				
				
                            
if (isset($_POST['update'])) {

                                $teacherid_save= $_POST['teacherid'];
                                $fname_save= $_POST['fname'];
                                $lname_save= $_POST['lname']; 
								$academic_rank_save= $_POST['academic_rank'];
								$program_save= $_POST['program'];
								$subject_save= $_POST['subject'];
								$yr_save= $_POST['yr'];
								$sec_save= $_POST['sec'];
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("UPDATE teacher SET teacherid = '$teacherid_save', fname = '$fname_save',lname ='$lname_save', academic_rank ='$academic_rank_save',program ='$program_save',subject = '$subject_save',yr = '$yr_save',sec = '$sec_save'
				
	WHERE id_teacher = '$id'")
				or die(mysql_error()); 	
	header("Location:teacher.php");	

					
								}
								?></center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								<br>
								<br>
								<br>
								<br>
								<br>
								<br>
								<?php include ('footer.php'); ?>
								</div>
								</div>
								</div>
								</div>
								<?php include('modal.php'); ?>	
</body>
</html>
								