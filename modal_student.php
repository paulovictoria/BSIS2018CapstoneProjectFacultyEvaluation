<!-- Modal -->

<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  
<strong>Log in Student!</strong> Please fill in the details below...

</div>
</div>
 <form class="form-horizontal" method="post" style="margin-left: 54px;">
 
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">ID Number</label>
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
                                     <select type="text" name="program" required>
                                            <option>--Select Course--</option>
											<option value="BSIS">BSIS</option>
											<option value="BSOM">BSOM</option>
											<option value="ComSec">ComSec</option>
											<option value="CCM">CCM</option>
											<option value="HRS">HRS</option>
											<option value="EIM">EIM</option>
										 </select>
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label" for="inputEmail">Year</label>
                                <div class="controls">
                                     <select type="text" name="yr" required>
                                            <option>--Select Year--</option>
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
                                            <option>--Select Section--</option>
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
                                    <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
								</div>
							<br>
							</div>
							
    </form>

<?php

						if(isset($_POST['login']))
						{
							$id_number=$_POST['id_number'];
							$fname=$_POST['fname'];
							$mname=$_POST['mname'];
							$lname=$_POST['lname'];
							$program=$_POST['program'];
							$yr=$_POST['yr'];
							$sec=$_POST['sec'];
						{
							$result = mysql_query("select * from student where id_number='$id_number' 
							and fname = '$fname' and mname = '$mname' and lname = '$lname' and program='$program' and yr='$yr' and sec='$sec' and status = 'Non-Evaluate'")
							or die(mysql_error());
							
							$row = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
								if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['id_student'];
										echo "<script>window.location='student.php'</script>";
									}
								else if ($count == 0) 
									{
									echo "<script>alert('Please check your information or You have already Evaluated!'); window.location='index.php'</script>";
									} 
						}				
						}
						?>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>close</button>
</div>

</div>