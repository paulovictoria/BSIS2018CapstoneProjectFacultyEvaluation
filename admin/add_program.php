<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<title>Course | Add</title>
<body>


<?php include ('menunav.php') ?>
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
                                <h4><div class="alert alert-info"><center>Add Course</h4>
                                <hr>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Course:</label>
                                    <div class="controls">
									     <input type="text" name="program"  placeholder="Course" required>
                                       
                                    </div>
                                    </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Description:</label>
                                    <div class="controls">
                                        <input type="text"  name="person_incharge"  placeholder="Description" required >
                                    </div>
                                </div>
                                
									
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="program.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                if (isset($_POST['update'])) {

                                
                $person_incharge= $_POST['person_incharge']; 
								$program= $_POST['program'];

						mysql_query("insert into program (program,person_incharge) values('$program','$person_incharge')")or die(mysql_error());
						echo "<script>alert('Course Added!'); window.location='program.php'</script>";
						header("location:program.1php");

					
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
								</div>
								<?php include('modal.php'); ?>	
</body>
</html>
								