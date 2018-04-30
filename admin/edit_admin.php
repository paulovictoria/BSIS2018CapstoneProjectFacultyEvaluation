
<?php 
include ('dbcon.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<?php include ('session.php'); ?>
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


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from admin where id_admin='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Admin</h4></legend>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['location'] != ""): ?>
										<img src="upload/<?php echo $row['location']; ?>" style="width:85px; height:100px; border:1px solid #333333;">
										<?php else: ?>
										<img src="../images/default.png" style="width:85px; height:100px; border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;"><i class="icon-save"></i>&nbsp;Update</button>
                                    </div>
                                </div>
								
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
                                    <label class="control-label" for="inputEmail">Rank/Designation:</label>
                                    <div class="controls">
									     
                                        <input type="text" name="rank" value=<?php echo $row['rank']; ?>>
                                    </div>
                                
                               </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="admin.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysql_query(" UPDATE admin SET location='$location' WHERE id_admin = '$id' ")or die(mysql_error());
header('location:admin.php');
}
?>
							
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
                                
mysql_query("UPDATE admin SET username = '$username_save',password ='$password_save',lname ='$lname_save',fname ='$fname_save', rank ='$rank_save'
				
	WHERE id_admin = '$id'")
				or die(mysql_error()); 	
	header("Location:admin.php");	

					
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
								