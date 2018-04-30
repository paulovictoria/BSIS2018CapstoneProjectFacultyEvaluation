<!-- Modal -->

<div id="teach" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  
<strong>Log in Superior!</strong> Please fill in the details below...

</div>
</div>
 <form class="form-horizontal" method="post" style="margin-left: 54px;">
													 <div class="control-group">
                                <label class="control-label" for="inputEmail">ID Number:</label>
                                <div class="controls">
                                    <input type="text" name="id_professor" id="inputEmail" placeholder="ID No." required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Username:</label>
                                <div class="controls">
                                    <input type="text" name="usernamee" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password:</label>
                                <div class="controls">
                                    <input type="password" name="passwordd" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="log" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
								</div>
							<br>
							</div>
							
    </form>

<?php

						if(isset($_POST['log']))
						{
							$id_professor=$_POST['id_professor'];
							$usernamee=$_POST['usernamee'];
							$passwordd=$_POST['passwordd'];
						{
							$result = mysql_query("SELECT * FROM professor 
							WHERE id_professor='$id_professor' AND usernamee='$usernamee' AND passwordd='$passwordd'")
							or die(mysql_error());
							
							$row = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
								if ($usernamee == "$usernamee" && $passwordd == "$passwordd") 
									{
									session_start();
									$_SESSION['id'] = $row['id_prof'];
									echo "<script>window.location='teacher_dash.php'</script>";
									}else{
									echo "<script>alert('Please check your Username, Password');</script>";
									}
						}				
						}
						?>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>Close</button>
</div>

</div>