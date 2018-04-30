<?php 
include('dbcon.php'); 
include ('header.php'); 

session_start();
if (!isset($_SESSION['id_personnel'])){
header('location:index.php');
}
$ses_id = $_SESSION['id_personnel'];
?>

<title>Admin | Home</title>

<head>
    <style>
        .wrapperhome{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperhome">

<div class="row-fluid">
<div class="span12">

<?php include ('menunav.php'); ?>


<div class="container">
<div class="hero-unit-header-1">
 <div class="container-con">
   
                           <img src="images/banner4.png">
			
    </div>
  </div>
 
<!--- notif --> 
<div class="container">
<div class="row-fluid">


 <div class="span12">
 <div class="alert alert-success">

	  
<strong>HEADS UP!</strong> WELCOME to Bulacan Polytechnic College Online Faculty Evaluation System.

</div>
 </div>
 
 
 </div>
<!-- end --> 


<br>

<!---mission & vision --->
 <div class="container">
  <div class="row-fluid">
  <div class="span12">
  
  
    <div class="span6">
	
	<div class="hero-unit-color">
  
 <legend><center><strong>Mission</strong></center></legend>
						
<p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      1. Equip students with the necessary technological and intellectual capacity to 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          face the fast changing demands of modern technology; </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      2. Develop the ideal working attitudes and values of the students; </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      4. Provide industry-driven curricular programs; </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      5. Enhance the intellectual, moral and spiritual standard of the faculty and staff; </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      7. Sustain efforts towards effective administration; and </br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      8. Strengthen linkages with the private and public sectors.

                        </p>
                    </div>
                    
  
  
  <div class="hero-unit-color">
  <legend> <center><strong>Vision</strong></center></legend>
                      
					   <p>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Bulacan Polytechnic College envisions to become a lead provider of quality and affordable technical-vocational, entrepreneurial and technological education, and a producer of highly competent and productive human resource..
                        </p>
                    </div>
  
  
  </div>
            <div class="span6">
               <div class="hero-unit-color">
			     <legend><center><strong>Online Faculty Evaluation System</strong></center></legend>
				 
                  <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Professors are the key human resources of any education institution in the delivery of quality education. Professors are often held accountable for their students' learning, within the limits of the students' abilities, time and resources available. A good professor knows different ways and techniques to have an effective way of teaching. Although human beings have survived and evolved as a species partly because of a capacity to share knowledge, teaching as a profession did not emerge until quite recently. Evaluation of professor had been practice as generation goes through. Because of the fast innovation of the technologies today, evaluating of professor is straightforward.
                  </p>

               </div>
            </div>
         </div>
  </div>
  </div>
  
 <!--end--> 
 
<?php include ('footer.php'); ?>
 
  </div>
  </div>
 

</div>
</div>

</div>




<?php include('modal.php'); ?>	



</body>
</html>

