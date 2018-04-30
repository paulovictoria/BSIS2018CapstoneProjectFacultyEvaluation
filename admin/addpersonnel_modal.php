<!-- Modal -->
<div id="adduser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header" style="background-color: lightgreen;">
    <center><h4>Sign up Admin Account</h4></center>
</div>

<div class="modal-body">
 <center>
    <form class="form-vertical" method="post"  enctype="multipart/form-data">                 
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Username:</label>
                    <div class="controls">
                        <input type="text"  name="username"  placeholder="Username" required>
                    </div>
                </div>
                
                
                 <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Password" required>
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

                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 66px;">&nbsp;Submit</button>
                        <a href="personnel.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                    </div>
                </div>
    </form>

<?php   
                            include('dbcon.php');
                            
                            if (isset($_POST['update'])) {

                $username= $_POST['username'];
                                $password= $_POST['password']; 
                                $fname= $_POST['fname'];
                                $lname= $_POST['lname'];
                               
            mysql_query("insert into personnel (username, password,fname,lname) 
                        values('$username','$password','$fname','$lname')")or die(mysql_error());
            echo "<script>window.location='personnel.php'</script>";

          
                }
                ?>
                                
    </center>
</div>