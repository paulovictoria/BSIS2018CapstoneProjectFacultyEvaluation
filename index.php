<?php 
include('dbcon.php'); 
include('header.php');
?>

<title>BPCOFES | HOME</title>
<body>
<div class="container">
<div class="row-fluid">
<div class="span12">


<div class="container">
<?php include ('banner.php'); ?>

<!--- sidebar-->
<div class="container">
    <div class="row-fluid">
      <div class="span3">
    
    <!--- login-->
<div class="hero-unit">


<ul id="tabmenu" style="width: 260px;">
    <li>
        <b style="cursor:pointer;">Student</b>
        <ul>
            <li><a href="login_student.php">Student Login</a></li>
            <li><a href="register_student.php">| Register</a></li>
        </ul>
    </li>

    <li>
         <b style="cursor:pointer;">Teacher</b>
          <ul>
                    <li><a href="login_teacher.php">Teacher Login</a></li>
                    
                    <li><a href="register_teacher.php">| Register</a></li>
                </ul>
            </li>
            <li>
        <ul>
            <li>
      <a href="index.php" style="margin-left: -13px;">Supervisor</a>
                <ul>
                    <li><a href="login_superior.php"  style="font-size:15px;">Log in</a></li>
                </ul>
      </li>
      
           
        </ul>
    </li>
</ul>

<!---
    <div class="btn-group">
    <button class="btn btn-info">Sign in</button>
    <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#student" data-toggle="modal">Student</a></li>
      <li><a href="#teacher" data-toggle="modal">Dean / Admin</a></li>
    </ul>
  <p style="margin-left:104px; margin-top:-30px; margin-bottom:0px;">Please login here.</p>
    </div>
  -->
</div>
          <!-- end-->
        <div class="hero-unit-3">
    <!-- links -->
           <ul class="nav nav-pills nav-stacked">
       <li class="nav-header">Menu</li>
       <li class="active"><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home<div class="pull-right"><i class="icon-double-angle-right"></i></div></a></li>
       <li><a href="#about" data-toggle="modal"><i class="icon-envelope-alt icon-large"></i>&nbsp;About us<div class="pull-right"><i class="icon-double-angle-right"></i></div></a></li>
       <?php include ('contact.php'); ?>
       <!--- end -->
       <!----aboutus--->
       <li class="nav-header">About us</li>
        <li><a href="#mission" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission<div class="pull-right"><i class="icon-double-angle-right"></i></div></a></li>
      <?php include ('modal_mision.php'); ?>
        <li><a href="#vision" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision<div class="pull-right"><i class="icon-double-angle-right"></i></div></a></li>
      <?php include ('modal_vision.php'); ?>
        <li><a href="#history" data-toggle="modal"><i class="icon-list-alt icon-large"></i>&nbsp;History<div class="pull-right"><i class="icon-double-angle-right"></i></div></a></li>
        <?php include ('modal_history.php'); ?>
<!---end-->
    

</ul>
</div>
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <i class="icon-calendar"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>


</div>
<!-- end -->


<!-- body -->
<div class="span9">

<!---- welcome -->

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    
<strong>Hello!</strong> WELCOME to Bulacan Polytechnic College Online Faculty Evaluation Sytem!

</div>

<div class="hero-unit-3">



<!-- slider -->



    <div id="sliderFrame">
        <div id="ribbon"></div>
        <div id="slider">
            <a class="lazyImage" href="img/a.png" title="BPC">BPC</a>
            <a class="lazyImage" href="img/b.jpg" title="BPC">BPC</a>
            <a class="lazyImage" href="img/c.png" title="BPC">BPC</a>
            <a class="lazyImage" href="img/bulpolycol.png" title="BPC" style="background-position: cover;">BPC</a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="img/a.png" /></div>
            <div class="thumb"><img src="img/b.jpg" /></div>
            <div class="thumb"><img src="img/c.png" /></div>
            <div class="thumb"><img src="img/bulpolycol.png"/ ></div>
        </div>
    </div>




<!-- end slider -->
</div>
</div>
<!-- end -->



</div>
</div>
  
 <?php include ('footer.php'); ?>
 
 
 
 </div>
  <?php include ('modal_student.php'); ?>
  
  <?php include ('modal_teacher.php'); ?>
  
  <?php include ('teacher_log.php'); ?>
  
  <?php include ('modal.php'); ?>
  
  </div>
   </div>
   </div>

  
   </body>
   </html>
  