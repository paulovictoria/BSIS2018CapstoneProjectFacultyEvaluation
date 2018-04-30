<head>
    <style>
        .wrapperedit{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

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
  $query=mysql_query("select * from student where id_student='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Edit Student's Account</h4></legend>
                                
																<div class="control-group">
                                    <label class="control-label" for="inputPassword">ID Number:</label>
                                    <div class="controls">
                                        <input type="text" readonly="true"name="id_number" value="<?php echo $row['id_number']; ?>" style="height:30px; margin-right:10px; " />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" readonly="true" value="<?php echo $row['fname']; ?>" style="height:30px; margin-right:10px; " />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Middle Name:</label>
                                    <div class="controls">
                                        <input type="text" name="mname" readonly="true" value="<?php echo $row['mname']; ?>" style="height:30px; margin-right:10px; " />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Last Name:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" readonly="true" value="<?php echo $row['lname']; ?>" style="height:30px; margin-right:10px; " />
                                    </div>
                                </div>
																<div class="control-group">
                                    <label class="control-label" for="inputEmail">Program:</label>
                                    <div class="controls">
                                    <select type="text" name="program"  required value="<?php echo $row['program']; ?>" >
																			<option><?php echo $row['program']; ?></option>
																			<option></option>
																			<option>BSIS</option>
																			<option>BSOM</option>
																			<option>ComSec</option>
																			<option>CCM</option>
																			<option>HRS</option>
																			<option>EIM</option>
										 								</select>
                                   </div>
                               </div>
							   <div class="control-group">
                                    <label class="control-label" for="inputPassword">Year:</label>
                                    <div class="controls">
                                        <select type="text" name="yr" required value="<?php echo $row['yr']; ?>" >
											
										    <option><?php echo $row['yr']; ?></option>
										    <option></option>
											<option>1st</option>
											<option>2nd</option>
											<option>3rd</option>
											<option>4th</option>
											
										 </select>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Section:</label>
                                    <div class="controls">
                                        <select type="text" name="sec" required value="<?php echo $row['sec']; ?>" >
											
										    <option><?php echo $row['sec']; ?></option>
										    								<option>-------------</option>
																			  <option>Section-A</option>
																			  <option>Section-B</option>
																			  <option>Section-C</option>
																			  <option>Section-D</option>
																			  <option>Section-E</option>
																			  <option>Section-F</option>
																			  <option>Section-G</option>
																			  <option>Section-H</option>
																			  <option>Section-I</option>
																			  <option>Section-J</option>
																			  <option>Section-K</option>
																			  <option>Section-L</option>
																			  <option>Section-M</option>
																			  <option>Section-N</option>
																			  <option>Section-O</option>
																			  <option>Section-P</option>
																			  <option>Section-Q</option>
																			  <option>Section-R</option>
																			  <option>Section-S</option>
																			  <option>Section-T</option>
																			  <option>Section-U</option>
																			  <option>Section-V</option>
																			  <option>Section-W</option>
																			  <option>Section-X</option>
																			  <option>Section-Y</option>
																			  <option>Section-Z</option>

											
										 </select>
                                    </div>
                                </div>
                               
	
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="student.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM student WHERE id_student = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		         $id_number=$test['id_number'] ;
				 $program=$test['program'] ;
				 $yr=$test['yr'] ;
				 $sec=$test['sec'] ;
				 
				
				
                            
if (isset($_POST['update'])) {
                $id_number_save = $_POST['id_number'];
								$program_save = $_POST['program'];
								$fname_save = $_POST['fname'];
								$mname_save = $_POST['mname'];
								$lname_save = $_POST['lname'];
								$yr_save = $_POST['yr'];
								$sec_save = $_POST['sec'];
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("UPDATE student SET id_number = '$id_number_save',fname = '$fname_save',mname = '$mname_save',lname = '$lname_save',program='$program_save',yr='$yr_save', sec='$sec_save'
				
	WHERE id_student = '$id'")
				or die(mysql_error()); 	
	echo "<script>window.location='student.php'</script>";	

					
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
								