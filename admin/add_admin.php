<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
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
  <form class="form-vertical" method="post"  enctype="multipart/form-data">
                                <legend><h4>Add admin</h4></legend>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Username:</label>
                                    <div class="controls">
                                        <input type="text" name="username"  placeholder="Username" required>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="text" name="password" placeholder="Password" required>
                                </div>
                            </div>

								
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname"  placeholder="First Name" required>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
                                        <input type="text"  name="lname"  placeholder="Last Name" required>
                                    </div>
                                </div>
                               
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Rank/Designation:</label>
                                    <div class="controls">
									     
										 <div class="controls">
                                        <input type="text"  name="rank"  placeholder="Rank/Designation" required>
                                    </div>
										 
                                       
                                    </div>
                                </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="user.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                            if (isset($_POST['update'])) {

                                $username = $_POST['username'];
                                $password= $_POST['password']; 
								
								$fname= $_POST['fname'];
								$lname= $_POST['lname'];
								$rank= $_POST['rank'];
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("insert into admin (username,password,fname,lname,rank) values('$username','$password','$fname','$lname','$rank')")or die(mysql_error());
						header("location:admin.php");

					
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
								<?php include('modal.php'); ?>	
														
</body>
</html>
								