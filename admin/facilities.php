<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<title>Comments | Facilities</title>

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
<center><legend>Facilities</legend></center>


      <table style="width:1129px;" class="table table-bordered table-hover" id="example">
           <thead>
		     <tr>
			     <th>Comments</th> 
			     <th>Semester</th>
			     <th>Year</th>      
		     </tr>
           </thead>
		   <tbody>

			   
								
							

								<?php
								$result3 = mysql_query("SELECT * FROM details ORDER by teacherid");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {
								  if($row3['comment'] != "")
								  {
								  ?>
								 <tr>
									
									<td> <?php echo $row3['rooms']; ?> </td>
									<td> <?php echo $row3['semester']; ?> </td>
									<td> <?php echo $row3['sy']; ?> </td>
									

									
									
									
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