<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<title>Details | Comments</title>

<head>
    <style>
        .wrappercomment{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrappercomment">
<?php include ('menunav.php'); ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/bpcbanner6.png">
						 </div>
           </div>         </div>
      </div>
    </div>
  </div>
<!--- body -->
<div class="container">
<div class="row-fluid">
<div class="span12">

  	
<div class="span12">
   <div class="hero-unit-3">
<div class="pull-right"><a href="#" id="print" class="btn btn-inverse" onClick="window.print()"></i>&nbsp;Print</a></div>  
<center><legend>Professor</legend></center>


      <table style="width:1129px;" class="table table-bordered table-hover" id="example">
      	<caption><div class="pagination">
  <ul>
  	<li><a href="comment.php"><font color="#000000">All</font></a></li>
    <li><a href="1stcomment.php"><font color="#000000">1st Semester</font></a></li>
    <li><a href="2ndcomment.php"><font color="#000000">2nd Semester</font></a></li>
    
   
  </ul>
</div></caption>
           <thead>
		     <tr>
			     <th>First Name</th>
			     <th>Last Name</th>
			     <th>Semester</th>
			     <th>Year</th>
			     <th>Comments</th> 
			     
			      
			      
			      
			      
			      
		     </tr>
           </thead>
		   <tbody>

			   
								
							

								<?php
								$result3 = mysql_query("select *from details where semester='1st' group by fname, lname, sy, comment, teacherid");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								  if($row3['comment'] != "")
								  {
								  ?>
								 <tr>
									
									<td> <?php echo $row3['fname']; ?> </td>
									<td> <?php echo $row3['lname']; ?> </td>
									<td> <?php echo $row3['semester']; ?> </td>
									<td> <?php echo $row3['sy']; ?> </td>
									<td> <?php echo $row3['comment']; ?> </td>

									
									
									
								 </tr>
							<?php
								}
							}
			  
			  ?>	   
		   </tbody>
      
      </table>
            
	
             	
</div>	
</div>	
	
	
	
	
	
	
	
</div>	
</div>

<?php include ('footer.php'); ?>	
</div>	
	

</div>
</div>
</div>
</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>