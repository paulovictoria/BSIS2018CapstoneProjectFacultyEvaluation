<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<title>Teacher | Login</title>
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
 <center><legend><h4>Log in as Teacher</h4></legend></center>
													 <div class="control-group">
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
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="log" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                    <a href="index.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
								</div>
							
							</div>
							
    </form>
		
							
						<?php

						if(isset($_POST['log']))
						{
							$teacherid=$_POST['teacherid'];
							$usernamee=$_POST['usernamee'];
							$passwordd=$_POST['passwordd'];
						{
							$result = mysql_query("SELECT * FROM teacher 
							WHERE teacherid='$teacherid' AND usernamee='$usernamee' AND passwordd='$passwordd'")
							or die(mysql_error());
							
							$row = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
								if ($usernamee == "$usernamee" && $passwordd == "$passwordd") 
									{
									session_start();
									$_SESSION['id'] = $row['id_teacher'];
									echo "<script>window.location='teacher_dash.php'</script>";
									}else{
									echo "<script>alert('Please check your Username, Password');</script>";
									}
						}				
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
								