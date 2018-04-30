<!-- Modal -->
<div id="addadmin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">

</div>
 <center>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <legend><h4>Add admin</h4></legend>
                                
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left: 39px;" required />
                                    </div>
                                </div>
								
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
                                    <label class="control-label" for="inputPassword">Rank/Designation:</label>
                                    <div class="controls">
									     
										 
                                        <input type="text"  name="rank"  placeholder="Rank/Designation" required>
                                    
										 
                                       
                                    </div>
                                </div>
								
								
                                
	
                                    
                                


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
										<a href="admin.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                    </div>
                                </div>
                            </form>
							
							
							<?php	
							
							include('dbcon.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
                                $username = $_POST['username'];
                                $password= $_POST['password']; 
								$fname= $_POST['fname'];
								$lname= $_POST['lname'];
								$rank= $_POST['rank'];
								
						mysql_query("insert into admin (username,password,fname,lname,rank,location) values('$username','$password','$fname','$lname','$rank','$location')")or die(mysql_error());
						
									}
										header('location:admin.php');
									}
							}
								?>
								</center>
								</center>

								
								</div>
								</div>