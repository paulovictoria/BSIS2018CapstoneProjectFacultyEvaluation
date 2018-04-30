<?php 
include ('dbcon.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
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

<?php
  $query=mysql_query("select * from subject where id_subject='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <h4>Edit Subject</font></h4>

                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject code:</label>
                                    <div class="controls">
                                        <input type="text" name="subject_code" required value=<?php echo $row['subject_code']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject title:</label>
                                    <div class="controls">
                                        <input type="text" name="subject_title" required value=<?php echo $row['subject_title']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject category:</label>
                                    <div class="controls">
                                        <select type="text" name="subject_category" value=<?php echo $row['subject_category']; ?>>
                                        <option><?php echo $row['subject_category']; ?></option>
                                        <option>-----</option>
																				<option>Major</option>
																				<option>Minor</option>
											
											</select>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Semester:</label>
                                    <div class="controls">
                                        <select type="text" name="semester" value=<?php echo $row['semester']; ?>>
                                        <option><?php echo $row['semester']; ?></option>
                                        <option>-----</option>
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
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM subject WHERE id_subject = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$subject_code=$test['subject_code'] ;
				$subject_title=$test['subject_title'] ;
				$subject_category=$test['subject_category'] ;
				$semester=$test['semester'] ;
				
if (isset($_POST['update'])) {

                                $subject_code_save= $_POST['subject_code'];
                                $subject_title_save= $_POST['subject_title']; 
								$subject_category_save= $_POST['subject_category'];
								$semester_save= $_POST['semester'];

						mysql_query("UPDATE subject SET subject_code = '$subject_code_save',subject_title ='$subject_title_save',subject_category ='$subject_category_save',semester='$semester_save'
				
	WHERE id_subject = '$id'")
				or die(mysql_error()); 	
	echo "<script>alert('Editting Successful!'); window.location='subject.php'</script>";	
								}
								?>
								</center>
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
								<?php include ('footer.php'); ?>
								</div>
								</div>
								</div>
								</div>
								
								<?php include('modal.php'); ?>	
</body>
</html>
								