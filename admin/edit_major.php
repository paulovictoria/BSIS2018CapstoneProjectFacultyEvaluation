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
  $query=mysql_query("select * from major where id_major='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <h4>Edit Major</h4>
                                <hr>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Program:</label>
                                    <div class="controls">
                                        <input type="text" name="program" required value=<?php echo $row['program']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Year & Section:</label>
                                    <div class="controls">
                                        <input type="text" name="yr_sec" required value=<?php echo $row['yr_sec']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">School Year:</label>
                                    <div class="controls">
									     
                                       <select type="text" name="sy" value=<?php echo $row['sy']; ?>>
											
											<option>2013-2014</option>
											<option>2014-2015</option>
											
										
											
										 </select>
                                    </div>
                                
                               </div>
                                
							   
							   <div class="control-group">
                                    <label class="control-label" for="inputEmail">Major:</label>
                                    <div class="controls">
                                        <input type="text" name="major" required value=<?php echo $row['major']; ?>>
										
                                    </div>
                                </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="major.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM major WHERE id_major = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		         $program=$test['program'] ;
				$yr_sec=$test['yr_sec'] ;
				$major=$test['major'] ;
				$sy=$test['sy'] ;
				
				
				
				
                            
if (isset($_POST['update'])) {

                                 $program_save=$_POST['program'] ;
                                $yr_sec_save= $_POST['yr_sec'];
                                $major_save= $_POST['major']; 
                                $sy_save= $_POST['sy']; 
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("UPDATE major SET program = '$program_save',yr_sec ='$yr_sec_save',major ='$major_save',sy ='$sy_save'
				
	WHERE id_major = '$id'")
				or die(mysql_error()); 	
	header("Location:major.php");	

					
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
								