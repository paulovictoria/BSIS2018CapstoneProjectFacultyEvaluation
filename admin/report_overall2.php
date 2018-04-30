
<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<title>Report | Students</title>

<head>
    <style>
        .wrapperreport{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapper.jpg");
        }
    </style>
</head>

<body class="wrapperreport">
<?php include ('menunav.php'); ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/bpcbanner5.png">
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
<div class="pull-right"><a href="#" id="print" class="btn btn-inverse" onClick="window.print()"><i class="icon-print"></i>&nbsp;Print</a></div> 
<form method="post" action="">
	<div class="form-group span3">
		<label>Semester: <label>
		<select class="form-control" required name="semester">
			<option value="">Select Semester</option>
		<?php
		$semesters = array("1st","2nd");
		$selectedSem = "";
		foreach($semesters as $semester){
		if(isset($_POST['submit']))
		{
			$selectedSem = ($_POST['semester'] == $semester) ? "selected" : "";
		}
		?>
			<option <?php echo $selectedSem; ?> value="<?php echo $semester; ?>"><?php echo $semester; ?> Semester</option>
		<?php 
		}
		?>
		</select>
	</div>	
	<div class="form-group span3">
		<label>School Year: <label>
		<select class="form-control" required name="schoolyear">
			<option value="">Select School Year</option>
			<?php for($i=2000; $i <= date('Y'); $i++){ 
			$selectedSY = "";
			if(isset($_POST['submit']))
			{
				$selectedSY = ($_POST['schoolyear'] == $i) ? "selected" : "";
			}
			?>
			<option <?php echo $selectedSY; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group span3">
		<label>&nbsp;<label>
		<button type="submit" name="submit" class="btn btn-info btn-xs">Submit</button>
	</div>
</form>
<br />
<br />
<center><h3>Overall Results Evaluated by Students</h3></center>


      <table class="table table-bordered  table-hover" id="example">
           <thead>
		     <tr>
			     						<th>Teacher</th>
			               <th>Q1</th> 
			              <th>Q2</th>
			             <th>Q3</th>
			       		  <th>Q4</th>
			    			 <th>Q5</th> 
			    		 <th>Q6</th> 
			     	  <th>Q7</th> 
				     <th>Q8</th> 
				    <th>Q9</th>
			     <th>Q10</th>
			      <th>Q11</th>
			       <th>Q12</th>
			        <th>Q13</th>
			         <th>Q14</th>
			          <th>Q15</th>
			           <th>Q16</th>
			     				 <th>Total Grade</th> 
			     				  <th>Status</th>
			     				   <th>EC</th>
			             
			     
			      
			      
			      
			      
			      
		     </tr>
		   <tbody>
			<?php
			if(isset($_POST['submit']))
			{
$teachers = mysql_query("SELECT *, (SELECT SUM(avetotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS aveTotal, 
					   (SELECT SUM(q1) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q1, 
					   (SELECT SUM(q2) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q2, 
					   (SELECT SUM(q3) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q3, 
					   (SELECT SUM(q4) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q4, 
					   (SELECT SUM(q5) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q5,
					   (SELECT SUM(q6) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q6,
					   (SELECT SUM(q7) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q7,
					   (SELECT SUM(q8) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q8,
					   (SELECT SUM(q9) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q9,
					   (SELECT SUM(q10) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q10,
					   (SELECT SUM(q11) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q11,
					   (SELECT SUM(q12) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q12,
					   (SELECT SUM(q13) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q13,
					   (SELECT SUM(q14) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q14,
					   (SELECT SUM(q15) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q15,
					    (SELECT SUM(q16) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS q16, 
					   (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS evaluateCount FROM teacher group by fname");
			}
			else
			{
$teachers = mysql_query("SELECT *, (SELECT SUM(avetotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS aveTotal, 
					   (SELECT SUM(q1) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q1, 
					   (SELECT SUM(q2) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q2, 
					   (SELECT SUM(q3) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q3, 
					   (SELECT SUM(q4) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q4, 
					   (SELECT SUM(q5) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q5,
					   (SELECT SUM(q6) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q6,
					   (SELECT SUM(q7) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q7,
					   (SELECT SUM(q8) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q8,
					   (SELECT SUM(q9) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q9,
					   (SELECT SUM(q10) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q10,
					   (SELECT SUM(q11) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q11,
					   (SELECT SUM(q12) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q12,
					   (SELECT SUM(q13) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q13,
					   (SELECT SUM(q14) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q14, 
					   (SELECT SUM(q15) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q15,
					   (SELECT SUM(q16) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS q16,
					   (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'student') AS evaluateCount FROM teacher group by fname");
			}			
			while($teacher = mysql_fetch_array($teachers))
			{	
			?>
			<?php if($teacher['aveTotal'] !=""){?>
			<tr>
				<td><?php echo $teacher['fname']; ?> <?php echo $teacher['lname']; ?></td>
				<td><?php echo ($teacher['q1'] != "") ? number_format((float)$teacher['q1'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q2'] != "") ? number_format((float)$teacher['q2'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q3'] != "") ? number_format((float)$teacher['q3'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q4'] != "") ? number_format((float)$teacher['q4'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q5'] != "") ? number_format((float)$teacher['q5'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q6'] != "") ? number_format((float)$teacher['q6'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q7'] != "") ? number_format((float)$teacher['q7'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q8'] != "") ? number_format((float)$teacher['q8'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q9'] != "") ? number_format((float)$teacher['q9'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q10'] != "") ? number_format((float)$teacher['q10'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q11'] != "") ? number_format((float)$teacher['q11'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q12'] != "") ? number_format((float)$teacher['q12'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q13'] != "") ? number_format((float)$teacher['q13'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q14'] != "") ? number_format((float)$teacher['q14'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q15'] != "") ? number_format((float)$teacher['q15'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['q16'] != "") ? number_format((float)$teacher['q16'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['aveTotal'] != "") ? number_format((float)$teacher['aveTotal'] / $teacher['evaluateCount'] ,2,".",'') : 0; ?></td>
				<td>
				<?php
				if($teacher['aveTotal'] != "")
				{
				$total = $teacher['aveTotal'] / $teacher['evaluateCount'];
				if($total >= 4.2 && $total <= 5){
					echo 'Outstanding';
				}elseif($total >= 3.4 && $total <= 4.19){
					echo 'Very satisfactory';
				}elseif($total >= 2.6 && $total <= 3.39){
					echo 'Satisfactory';
				}elseif($total >= 1.8 && $total <= 3.59){
					echo 'Unsatisfactory';
				}elseif($total >= 1.0 && $total <= 1.79){
					echo 'Poor';
				}elseif($total >= 0 && $total <= 0){
					echo 'Undefined';
				}
				}
				else
				{
				echo "Not Rated";
				}
				?>	
				</td>
				<td><?php echo $teacher['evaluateCount']; ?></td>
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