<!-- Modal -->
<div id="addstudent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header"  style="background-color: lightgreen;">
	<center><h4>Add Student account</h4></center>
</div>

<div class="modal-body">
	<center>
	  <form class="form-horizontal" method="post"  enctype="multipart/form-data"> 
												<div class="control-group">
                            <label class="control-label" for="inputEmail">ID Number:</label>
                            <div class="controls">
                                <input type="text" name="id_number" placeholder="ID no." required>
                            </div>
                        </div>
                        	<div class="control-group">
                            <label class="control-label" for="inputEmail">First Name:</label>
                            <div class="controls">
                                <input type="text" name="fname"  placeholder="First Name" required>
                            </div>
                        </div>
                        	<div class="control-group">
                            <label class="control-label" for="inputEmail">Middle Name:</label>
                            <div class="controls">
                                <input type="text" name="mname"  placeholder="Middle Name" required>
                            </div>
                        </div>
                        	<div class="control-group">
                            <label class="control-label" for="inputEmail">Last Name:</label>
                            <div class="controls">
                                <input type="text" name="lname"  placeholder="Last Name" required>
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="inputPassword">Program:</label>
                            <div class="controls">
					     
						 <select type="text" name="program" required>
                              <option>--Select Course--</option>
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
                            <label class="control-label" for="inputemail">Year:</label>
                            <div class="controls">
                                <select type="text" name="yr" required>
							<option>--Select Year Level--</option>
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
												 <select type="text" name="sec">
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

                                <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
						<a href="student.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                            </div>
                        </div>
	                            </form>
								
								
								<?php
	                            if (isset($_POST['update'])) {

	                                $id_number = $_POST['id_number']; 
	                                $fname= $_POST['fname']; 
	                                $mname= $_POST['mname'];
	                                $lname= $_POST['lname'];  
	                                $program= $_POST['program']; 
	                                $yr= $_POST['yr']; 
	                                $sec= $_POST['sec'];
	                                $status= $_POST['status'];


	                                
							mysql_query("insert into student (id_number,fname,mname,lname,program,yr,sec,status) values('$id_number','$fname','$mname','$lname','$program','$yr','$sec','Non-Evaluate')")or die(mysql_error());
							echo "<script>alert('Add Successfully'); window.location='student.php'</script>";

						
									}
									?>
	</center>
</div>