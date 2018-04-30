<?php 
include ('dbcon.php'); 
include ('header.php'); 
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


<div class="hero-unit">
<center>
  <form class="form-vertical" method="post"  enctype="multipart/form-data">
                                <h4><div class="alert alert-info"><center>Add Major</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Program:</label>
                                    <div class="controls">
                                        <input type="text"  name="program"  placeholder="Program" required>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Year & Section:</label>
                                    <div class="controls">
                                        <input type="text"  name="yr_sec"  placeholder="Year & Section" required>
                                    </div>
									<div class="control-group">
                                    <label class="control-label" for="inputEmail">Shool Year:</label>
                                    <div class="controls">
                                        <select type="text" name="sy">
											<option>2013-2014</option>
											<option>2014-2015</option>
											
											
										
											
										 </select>
                                    </div>
                                </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Major:</label>
                                    <div class="controls">
                                        <input type="text"  name="major"  placeholder="Major" required>
                                    </div>
                                </div>
                               
								
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="course.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                            if (isset($_POST['update'])) {

							    $program= $_POST['program'];
                                $yr_sec = $_POST['yr_sec'];
                                $major= $_POST['major']; 
                                $sy= $_POST['sy']; 
								
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("insert into major (yr_sec,major,program,sy) values('$yr_sec','$major','$program','$sy')")or die(mysql_error());
						header("location:major.php");

					
								}
								?></center>
								</center>

								</div>
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
								