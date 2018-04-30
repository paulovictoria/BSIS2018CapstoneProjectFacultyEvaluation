<!-- Modal -->
<div id="addsuperior" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header" style="background-color: lightgreen;">
	<center><h4>Add Superior</h4></center>
</div>
<div class="modal-body">
	<center>
		 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
		                                
		                               
										
										<div class="control-group">
		                                    <label class="control-label" for="inputEmail">Username:</label>
		                                    <div class="controls">
		                                        <input type="text" name="username"  placeholder="Username" required>
		                                    </div>
		                                </div>
										
										 <div class="control-group">
		                                <label class="control-label" for="inputPassword">Password</label>
		                                <div class="controls">
		                                    <input type="text" name="password" placeholder="Password" required>
		                                </div>
		                            </div>

										
										
										<div class="control-group">
		                                    <label class="control-label" for="inputEmail">First Name:</label>
		                                    <div class="controls">
		                                        <input type="text" name="fname"  placeholder="First Name" required>
		                                    </div>
		                                </div>
										<div class="control-group">
		                                    <label class="control-label" for="inputEmail">Last Name:</label>
		                                    <div class="controls">
		                                        <input type="text"  name="lname"  placeholder="Last Name" required>
		                                    </div>
		                                </div>
		                <div class="control-group">
		                                    <label class="control-label" for="inputEmail">Department:</label>
		                                    <div class="controls">
		                                        <input type="text"  name="program"  placeholder="(Only for Program Head)">
		                                    </div>
		                                </div>
		                               
										<div class="control-group">
		                                <label class="control-label" for="inputEmail">Position</label>
		                                <div class="controls">
		                                     <select type="text" name="rank" required>
		                                            <option></option>
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
		                                <label class="control-label" for="inputEmail">Teacher to Evaluate</label>
		                                <div class="controls">
		                                     <select type="text" name="cateogry" required>
		                                            <option></option>
																								<option value="All">All</option>
																								<option value="QUASI">QUASI</option>
																								<option value="">By Department</option>
																								
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
								
								include('dbcon.php');
								
								  if (isset($_POST['update'])) {
								    
	                                $username = $_POST['username'];
	                                $password= $_POST['password']; 
									$fname= $_POST['fname'];
									$lname= $_POST['lname'];
									$rank= $_POST['rank'];	
									$category= $_POST['category'];							
						
									mysql_query("insert into superiors (username,password,fname,lname,rank,category) values ('$username','$password','$fname','$lname','$rank','$category')") or die(mysql_error());
									echo "<script>window.location='superiors.php'</script>";

						
									}
									?>
	</center>
</div>