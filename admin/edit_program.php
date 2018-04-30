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
  $query=mysql_query("select * from program where id_prog='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
	


 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <h4>Edit Program</h4>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Program:</label>
                                    <div class="controls">
                                        <input type="text" name="program" value=<?php echo $row['program']; ?>>
                                    </div>
                                </div>
								
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Person in charge:</label>
                                    <div class="controls">
                                        <input type="text" name="person_incharge" value=<?php echo $row['person_incharge']; ?>>
                                    </div>
                                </div>
								
                                
							   
							  
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="program.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM program WHERE id_prog = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$program=$test['program'] ;
				$person_incharge=$test['person_incharge'] ;
				
				
				
				
                            
if (isset($_POST['update'])) {

                               $program_save=$test['program'] ;
								$person_incharge_save= $_POST['person_incharge'];
                               
								
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("UPDATE program SET program = '$program_save',person_incharge ='$person_incharge_save'
				
	WHERE id_prog= '$id'")
				or die(mysql_error()); 	
	header("Location:program.php");	

					
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
								<?php include ('modal.php'); ?>
</body>
</html>
								