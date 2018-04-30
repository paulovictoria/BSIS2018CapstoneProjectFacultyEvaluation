<?php
include ('dbcon.php');
include ('header.php');
?>

<title>Log In | Admin</title>
<head>
    <style>
        .wrapperindex{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperindex">
<div class="container">
<div class = "row-fluid">
<div class = "span12">

<div class="navbar navbar-fixed-top navbar-inverse">
<div class="navbar-inner">
</div>
</div>
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
  </div>
</div>



 <div class="container">
                <div class="row-fluid">
				
                       <div class="span3">
                   
                        
                </div>
                    <div class="span6">
<div class="hero-unit" style="opacity: .9; border-radius: 10px;">
                        <div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  
<strong>Log in Admin!</strong> Please fill out the details below.

</div>
                        <!-- login -->
                        <form class="form-horizontal" method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Username</label>
                                <div class="controls">
                                    <input type="text" name="username" id="inputEmail" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                                </div>
                            </div>


                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="login" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                                  
                                </div>
                
								
<br>
		<?php


if (isset($_POST['login'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysql_query("select * from personnel where username='$username' and password='$password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
		session_start();
		$_SESSION['id_personnel']=$row['id_personnel'];
		header('location:home.php');
		}else{?>
		 <div class="alert alert-error">
    <button class="close" data-dismiss="alert">x</button>
   Please check your Username and Password
    </div>
		<?php
		}
}
?>
	
   
	</div>
    </form>
	</div>

	<div class="span3">
                   
                        
                </div>
	<!-- login -->





</div>
</div>






</div>


<?php include ('footer.php'); ?>
</div>
<?php include ('addpersonnel_modal.php'); ?>
</div>
</div>

</div>




</body>
</html>
