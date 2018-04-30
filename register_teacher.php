<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
 <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_bpc-ofes";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `program`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<title>Teacher | Register</title>
<body>



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


<div class="hero-unit-3">

  <form class="form-horizontal" method="post" style="margin-left: 54px;">
 <center><legend><h4>Teacher's Registration</h4></legend></center>
													 <div class="control-group">
													 	<center><strong>Account Information</strong></center>
													 	<br>
                                <label class="control-label" for="inputEmail">ID Number:</label>
                                <div class="controls">
                                    <input type="text" name="teacherid" id="inputEmail" placeholder="ID No." required>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label" for="inputEmail">Username:</label>
                                <div class="controls">
                                    <input type="text" name="usernamee" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password:</label>
                                <div class="controls">
                                    <input type="password" name="passwordd" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
                             <center><strong>Personal Information</strong></center>
                           <br>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">First Name:</label>
                                <div class="controls">
                                    <input type="text" name="fname" id="inputEmail" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Last Name:</label>
                                <div class="controls">
                                    <input type="text" name="lname" id="inputEmail" placeholder="Last Name" required>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label" for="inputEmail">Department:</label>
                                <div class="controls">
                                
                                     
                                            <select type ="text" name="program">
                                            <option></option>
                                            <?php echo $options;?>
                                             </select>
                                </div>
                            </div>
                
 														<div class="control-group">
                                                <label class="control-label" for="inputPassword">Category:</label>
                                                    <div class="controls">
                                                         
                                                         <select type="text" name="category" required>
                                                            <option></option>
                                                            <option>QUASI</option>
                                                            <option>Full Time</option>
                                                            <option>Part Time</option>                          
                                                         </select>                   
                                                    </div>
                                            </div>


                        
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="register" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                                    <a href="index.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
								</div>
							
							</div>
							
    </form>
		
							
						<?php

						if(isset($_POST['register']))
						{
							$teacherid=$_POST['teacherid'];
							$fname=$_POST['fname'];
							$lname=$_POST['lname'];
							$usernamee=$_POST['usernamee'];
							$passwordd=$_POST['passwordd'];
                            $program=$_POST['program'];
                            $category=$_POST['category'];
					
							mysql_query("insert into teacher (teacherid,fname,lname,usernamee,passwordd,program,category,approved) values('$teacherid','$fname','$lname','$usernamee','$passwordd','$program','$category','0')")or die(mysql_error());
						echo "<script>alert('You have successfully registered!'); window.location='index.php'</script>";
							
						}
						?>

								
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
								