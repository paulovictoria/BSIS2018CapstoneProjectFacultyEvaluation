<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<title>Supervisor | Login</title>
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
  <center><legend><h4>Log in as Supervisor</h4></legend></center>
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
                                <div class="controls">
                                    <button type="submit" name="log" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                    <a href="index.php" class="btn"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                                </div>
                            <br>
                            </div>
                            
    </form>
        
                            
                        <?php

                        if(isset($_POST['log']))
                        {
                            $username=$_POST['username'];
                            $password=$_POST['password'];
                            $rank=$_POST['rank'];
                        {
                            $result = mysql_query("select * from superiors 
                            where username='$username' and password='$password' and rank ='$rank'")
                            or die(mysql_error());
                            
                            $row = mysql_fetch_array($result);
                            $count = mysql_num_rows($result);               
                                if ($username == "$username" && $password == "$password" && $rank == 'College President') 
                                    {
                                    session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='collegepres.php'</script>";
                                    } 
                                    elseif($username == "$username" && $password == "$password" && $rank == 'VPAA') 
                                    {
                                   session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='vpaa.php'</script>";
                                    } 
                                    elseif($username == "$username" && $password == "$password" && $rank == 'Dean of Student Affairs') 
                                    {
                                   session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='dean.php'</script>";
                                    }
                                    elseif($username == "$username" && $password == "$password" && $rank == 'Extension Services') 
                                    {
                                   session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='extension.php'</script>";
                                    }
                                    elseif($username == "$username" && $password == "$password" && $rank == 'Program Head') 
                                    {
                                   session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='programhead.php'</script>";
                                    }
                                    elseif($username == "$username" && $password == "$password" && $rank == 'VPPREQA') 
                                    {
                                   session_start();
                                    $_SESSION['id'] = $row['id_sup'];
                                    echo "<script>window.location='vppreqa.php'</script>";
                                    }else{
                                    echo "<script>alert('Please check your Username, Password, and Position!');</script>";
                                    }
                        }               
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
