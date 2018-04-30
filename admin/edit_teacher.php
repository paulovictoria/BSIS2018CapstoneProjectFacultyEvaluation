

<?php 
include ('dbcon.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<?php include ('session.php'); ?>
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
  $query=mysql_query("select * from teacher where id_teacher='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Teacher</h4></legend>
								
								<hr>
								<div class="control-group">
                                    <label class="control-label">ID:</label>
                                    <div class="controls">
                                        <input type="text" name="teacherid" required value=<?php echo $row['teacherid']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Username:</label>
                                    <div class="controls">
                                        <input type="text" name="usernamee" required value=<?php echo $row['usernamee']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Password:</label>
                                    <div class="controls">
                                        <input type="text" name="passwordd" required value=<?php echo $row['passwordd']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">First name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['fname']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Last name:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['lname']; ?>>
                                    </div>
                                </div>
                               
							   
											 			  <div class="control-group">
				                                    <label class="control-label">Department:</label>
				                                    <div class="controls">
													     
														  <select type="text" name="program">
																		<option><?php echo $row['program']; ?></option>
																	  <option>---------</option>
							                      <?php echo $options;?>            
														  </select>
				                         </div>
				                       </div>
							
                                <div class="control-group">
                                    <label class="control-label">Category:</label>
                                    <div class="controls">
                                         
                                         <select name="category">
                                         		<option><?php echo $row['category']; ?></option>
                                         		<option>-----</option>
                                            <option>Full Time</option>
                                            <option>Part Time</option>
                                            <option>QUASI</option>                       
                                         </select>                   
                                    </div>
                                </div>
                                 
								
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="user_teacher.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                                </div>
                            </form>
							

							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM teacher WHERE id_teacher = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$teacherid=$test['teacherid'] ;
				$usernamee=$test['usernamee'] ;
				$passwordd=$test['passwordd'] ;
				$fname=$test['fname'] ;
				$lname=$test['lname'] ;	
				$program=$test['program'] ;
				$category=$test['category'] ;
				
				
if (isset($_POST['update'])) {

                $teacherid_save= $_POST['teacherid'];
                $usernamee_save= $_POST['usernamee'];
                $passwordd_save= $_POST['passwordd'];
                $fname_save= $_POST['fname'];
                $lname_save= $_POST['lname']; 
								$program_save= $_POST['program'];
								$category_save= $_POST['category'];
								
mysql_query("UPDATE teacher SET teacherid = '$teacherid_save', usernamee = '$usernamee_save', passwordd = '$passwordd_save', fname = '$fname_save', lname ='$lname_save',program ='$program_save', category = '$category_save' WHERE id_teacher = '$id'")or die(mysql_error()); 	
	echo "<script>alert('Editing Successful!'); window.location='user_teacher.php'</script>";

					
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
								</div>
								</div>
								</div>
								</div>
								<?php include('modal.php'); ?>
								<?php include('footer.php'); ?>		
</body>
</html>
								