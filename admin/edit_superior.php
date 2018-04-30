

<?php 
include ('dbcon.php'); 
include ('header.php'); 
$id=$_GET['id'];
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
  $query=mysql_query("select * from superiors where id_sup='$id'") or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Admin</h4></legend>
                     
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">User name:</label>
                                    <div class="controls">
                                        <input type="text" name="username" value=<?php echo $row['username']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password:</label>
                                    <div class="controls">
                                        <input type="text" name="password" value=<?php echo $row['password']; ?>>
                                    </div>
                                </div>
                                
							   <div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name:</label>
                                    <div class="controls">
									     <input type="text" name="fname" value=<?php echo $row['fname']; ?>>
                                       
                                    </div>
                                
                               </div>
							   <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name:</label>
                                    <div class="controls">
									     <input type="text" name="lname" value=<?php echo $row['lname']; ?>>
                                       
                                    </div>
                                
                               </div>
							  	<div class="control-group">
                                    <label class="control-label" for="inputEmail">Program:</label>
                                    <div class="controls">
									     
                                       <select type="text" name="rank" required value="<?php echo $row['rank']; ?>" >
											<option><?php echo $row['rank']; ?></option>
															<option value="College President">College President</option>
															<option value="VPAA">VPAA</option>
															<option value="Dean of Student Affairs">Dean of Student Affairs</option>
															<option value="Extension Services">Extension Services</option>
															<option value="Program Head">Program Head</option>
															<option value="VPPREQA">VPPREQA</option>
										
											
																			 </select>
                                    </div>
                               </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="superiors.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							

							
							<?php
							
							
							$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM superiors WHERE id_sup = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				
				$username=$test['username'] ;
				$password=$test['password'] ;
				$fname=$test['fname'] ;
				$lname=$test['lname'] ;
				$rank=$test['rank'] ;
				
				
                            
if (isset($_POST['update'])) {
				
                $username_save= $_POST['username'];
                $password_save= $_POST['password']; 
								$fname_save= $_POST['fname'];
								$lname_save= $_POST['lname'];
								$rank_save= $_POST['rank'];
                                
mysql_query("UPDATE superiors SET username = '$username_save',password ='$password_save',lname ='$lname_save',fname ='$fname_save', rank ='$rank_save'
				
	WHERE id_sup = '$id'")
				or die(mysql_error()); 	
	echo "<script>window.location='superiors.php'</script>";

					
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
								