
<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>



<?php include ('menunav.php') ?>
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


<div class="hero-unit">
<center>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <h4><legend><center>Add Teacher</center></legend></h4>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">ID:</label>
                                    <div class="controls">
                                        <input type="text" name="teacherid" id="inputEmail" placeholder="ID no." required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" id="inputEmail" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
                                        <input type="text"  name="lname"  placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Academic Rank:</label>
                                    <div class="controls">
									     <input type="text" name="academic_rank"  placeholder="Academic Rank" required>
                                       
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
                                    <label class="control-label" for="inputEmail">Subject handled:</label>
                                    <div class="controls">
									     <input type="text" name="subject"  placeholder="Subject" required>
                                       
                                    </div>
                                    </div>

									 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Year handled:</label>
                                    <div class="controls">
									     
										 <select type="text" name="yr">
											<option>1st</option>
											<option>2nd</option>
											<option>3rd</option>
											<option>4th</option?							
										 </select>                   
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category:</label>
                                    <div class="controls">
									     
										 <select type="text" name="category">
											<option></option>
											<option>Full Time</option>
											<option>Part Time</option>							
										 </select>                   
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="teacher.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                            if (isset($_POST['update'])) {

                                $teacherid = $_POST['teacherid'];
                                $fname = $_POST['fname'];
                                $lname= $_POST['lname']; 
								$academic_rank= $_POST['academic_rank'];
								$program= $_POST['program'];
								$subject= $_POST['subject'];
								$yr= $_POST['yr'];
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("insert into teacher (teacherid,fname,lname,academic_rank,program,subject,yr) values('$teacherid','$fname','$lname','$academic_rank','$program','$subject','$yr')")or die(mysql_error());
						header("location:teacher.php");

					
								}
								?></center>
								</center>

								
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
								</div>
								<?php include('modal.php'); ?>	
</body>
</html>
								