<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<body>


<?php include ('menunav.php'); ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/banner4.png">
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
                                <h4><div class="alert alert-info"><center>Add Subject List</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject Code:</label>
                                    <div class="controls">
                                        <input type="text"  name="subject_code"  placeholder="Subject Code" >
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject Title:</label>
                                    <div class="controls">
                                        <input type="text"  name="subject_title"  placeholder="Subject Title" >
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject category:</label>
                                    <div class="controls">
                                        <select type="text" name="subject_category" value=<?php echo $row['subject_category']; ?>>
                      <option></option>
											<option>Major</option>
											<option>Minor</option>
											
											</select>
                                    </div>
                                </div>
                               
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Semester:</label>
                                    <div class="controls">
									     
										 <select type="text" name="semester">
										 	 <option></option>
											<option>1st</option>
											<option>2nd</option>
										
											
										 </select>
										 
                                       
                                    </div>
                                </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="subject.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                            if (isset($_POST['update'])) {

                                $subject_code = $_POST['subject_code'];
                                $subject_title= $_POST['subject_title']; 
								$subject_category= $_POST['subject_category'];
								$semester= $_POST['semester'];
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("insert into subject (subject_code,subject_title,subject_category,semester) values('$subject_code','$subject_title','$subject_category','$semester')")or die(mysql_error());
						echo "<script>alert('Subject Added!'); window.location='subject.php'</script>";

					
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
								<?php include('modal.php'); ?>	
</body>
</html>
								