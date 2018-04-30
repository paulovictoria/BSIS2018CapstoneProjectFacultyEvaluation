<!-- Modal -->

<div id="superiors" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <label class="control-label" for="inputEmail">Username:</label>
                                <div class="controls">
                                    <input type="text" name="username" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password:</label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
							 						<!--<div class="control-group">
                                <label class="control-label" for="inputEmail">Position</label>
                                <div class="controls">
                                     <select type="text" name="rank" required>
                                            <option>--Select Position--</option>
																						<option value="college president">College President</option>
																						<option value="vpaa">VPAA</option>
																						<option value="dean of student affairs">Dean of Student Affairs</option>
																						<option value="extension services">Extension Services</option>
																						<option value="program head">Program Head</option>
																						<option value="vppreqa">VPPREQA</option>
																		 </select>
                                </div>
                            </div>
                          -->
							
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
								</div>
							<br>
							</div>
							
    </form>

<?php


if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysql_query("select * from superiors where username='$username' and password='$password'")or die (mysql_error());
		

$row=mysql_fetch_array($result);
		
		if (isset($_POST['id_sup']) || empty($_POST['username']) || empty($_POST['password'])) {
			session_start();
			$_SESSION['id_sup']=$row['id_sup'];
		echo "<script>window.location='collegepres.php'</script>";
		}
		elseif ($count > 0){
			session_start();
			$_SESSION['id_sup']=$row['id_sup'];

		}


		else{?>
		 <div class="alert alert-error">
   Please check your UserName and Password
    </div>
		<?php
		}
}
?>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>close</button>
</div>

</div>