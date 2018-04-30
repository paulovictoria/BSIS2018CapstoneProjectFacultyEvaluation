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
<title>Student | Register</title>
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
 <center><legend><h4>Student's Registration</h4></legend></center>
													 <div class="control-group">
                                <label class="control-label" for="inputEmail">ID Number:</label>
                                <div class="controls">
                                    <input type="text" name="id_number" id="inputEmail" placeholder="ID no." required>
                                </div>
                              </div>
                             <div class="control-group">
                                <label class="control-label" for="inputEmail">First Name</label>
                                <div class="controls">
                                    <input type="text" name="fname" id="inputEmail" placeholder="First Name" required>
                                </div>
                            </div>

                           <div class="control-group">
                                <label class="control-label" for="inputEmail">Middle Name</label>
                                <div class="controls">
                                    <input type="text" name="mname" id="inputEmail" placeholder="Middle Name" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Last Name</label>
                                <div class="controls">
                                    <input type="text" name="lname" id="inputEmail" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Course</label>
                                <div class="controls">
                                
                                     
                                            <select type ="text" name="program">
                                            <option></option>
                                            <?php echo $options;?>
                                             </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label" for="inputEmail">Year</label>
                                <div class="controls">
                                     <select type="text" name="yr" required>
                                            <option></option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                         </select>
                                </div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label" for="inputPassword">Section</label>
                                    <div class="controls">
                                         <select type="text" name="sec" required>
                                                                              <option></option>
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
                                    <button type="submit" name="register" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                                    <a href="index.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
								</div>
							
							</div>
							
    </form>
		
							
						 <?php

                        if(isset($_POST['register']))
                        {
                            $id_number=$_POST['id_number'];
                            $fname=$_POST['fname'];
                            $mname=$_POST['mname'];
                            $lname=$_POST['lname'];
                            $program=$_POST['program'];
                            $yr=$_POST['yr'];
                            $sec=$_POST['sec'];
                        
                        mysql_query("insert into student (id_number,fname,mname,lname,program,yr,sec,status,approved) values('$id_number','$fname','$mname','$lname','$program','$yr','$sec','Not-Evaluate','0')")or die(mysql_error());
                        echo "<script>alert('You have successfully registered! Wait for Admin Approval!'); window.location='index.php'</script>";
                            
                            
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
								