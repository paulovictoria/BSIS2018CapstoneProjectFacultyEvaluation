<?php 
include('dbcon.php'); 
include('header.php');
session_start();

if (!isset($_SESSION['id'])){
header('location:index.php');
}

$ses_id = $_SESSION['id'];


?>
<?php echo $ses_id; ?>
<head>
  <style>
    .wrapperstudent{
      background-size: cover;
      background-attachment: fixed;
      background-image: url("images/wrapperstudent.jpg");
    }
  </style>
</head>
<body class="wrapperstudent"> 

<?php

$query = mysql_query("select * from student where id_student = '$id_student' ")or die(mysql_error());
$row = mysql_fetch_array($query);
$program = $row['program'];
$yr = $row['yr'];
$sec = $row['sec'];

?>

<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
  
<ul class="nav">
<?php include ('menunav.php') ?>
<li class="active"><a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
</ul>

  </div>
</div>
<!--banner-->
<div class="hero-unit-header-1">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="img/banner4.png">
             </div>
           </div>       
       </div>
      </div>
    </div>
  </div>


 <!---teachers to evaluate--> 
<div class="container">
    <div class="row-fluid">
<center><h4><div class="alert alert-info">Welcome <h3>"<?php echo $row['fname']?> <?php echo $row['lname']?>"</h3>Please select Teacher to Evaluate!</h4></center></div>

<!---table-->

<div class="hero-unit">
   <table width="800" class="table table-hover table-bordered">
      <thead>
         <tr>
          <th>Professor</th>     
          <th>Rank/Position</th>       
          <th>Action</th>  
         </tr>    
      </thead>   
    <tbody>
       <?php
         $result= mysql_query("select * from teacher group by fname") or die (mysql_error());
         while ($row= mysql_fetch_array ($result) ){
         $id=$row['id_teacher'];
         $fname=$row['fname'];
         $lname=$row['lname'];
        ?>

  <tr>
    <?php
    $checkIfEvaluated = mysql_query("SELECT * FROM details WHERE teacherid = '".$row['teacherid']."' AND teacherid= '".$_SESSION['id']."'") or die(mysql_error());
    $evaluationInfo = mysql_fetch_assoc($checkIfEvaluated);
    ?>
       <td> 
        <?php echo $row ['fname']; ?>
        <?php echo $row ['lname']; ?>

       </td>
       <td>
       <?php echo $row ['academic_rank']; ?>
       </td>
     <td width="190">
     <a href="superior_evaluation.php?id_teacher=<?php echo $id; ?>" <?php echo (!empty($evaluationInfo)) ? " disabled onclick='return false;' " : ""; ?> class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp;Evaluate</a>

  </tr>
     <?php } ?>
    </tbody>
   </table>
   </div>
 <!--end table--> 
 
 
 
 
 
 
 
 
 
 </div>
</div>
 <!--end--> 
 
 
 
</div>
  

<?php include('footer.php'); ?> 
     
     
  </div>
  </div>
  

  </div>  





<?php include('modal.php'); ?>  



</body>
</html>