<!-- Modal -->
<div id="adduser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">

</div>
 <center>
 <form class="form-vertical" method="post"  enctype="multipart/form-data">
                               <legend><h4>Add User account</h4></legend>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Username:</label>
                                    <div class="controls">
                                        <input type="text"  name="username"  placeholder="Username" required>
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
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="user.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php
                            if (isset($_POST['update'])) {

                                $username= $_POST['username'];
                                $password= $_POST['password']; 
								
								$fname= $_POST['fname'];
								$lname= $_POST['lname'];
								
								
								
                                
                        
                                
								
								
								

                               
					
					
						mysql_query("insert into user (username, password,fname,lname) values('$username','$password','$fname','$lname')")or die(mysql_error());
						header("location:user.php");

					
								}
								?></center>
								</center>

								
								</div>
								</div>