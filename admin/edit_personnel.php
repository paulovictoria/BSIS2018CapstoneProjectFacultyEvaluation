<?php 
include ('dbcon.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<?php include ('session.php'); ?>
<body class="wrapperedit">
<head>
    <style>
        .wrapperedit{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

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


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from personnel where id_personnel='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Personnel's Account</h4></legend>
								
                                    
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Username:</label>
                                    <div class="controls">
                                        <input type="text" name="username" required value=<?php echo $row['username']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Password:</label>
                                    <div class="controls">
                                        <input type="password" name="password" required value=<?php echo $row['password']; ?>>
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
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="personnel.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							

							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM personnel WHERE id_personnel = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
				 $username=$test['username'] ;
				 $password=$test['password'] ;
				$fname=$test['fname'] ;
				$lname=$test['lname'] ;
				
				
                            
if (isset($_POST['update'])) {
                               
								$username_save= $_POST['username'];
								$password_save= $_POST['password'];
                                $fname_save= $_POST['fname'];
                                $lname_save= $_POST['lname']; 
								
						mysql_query("UPDATE personnel SET password = '$password_save',fname = '$fname_save',lname ='$lname_save',username = '$username_save'
				
	WHERE id_personnel = '$id'")
				or die(mysql_error()); 	
	echo "<script>window.location='personnel.php'</script>";

					
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
								