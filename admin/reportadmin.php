<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>

<body>
<?php include ('menunav.php'); ?>
<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
                    <div class="row-fluid">
                         <div class="span12">
                           <img src="images/banner.png">
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
<legend>Dean / Chairperson Evaluation List</legend>


      <table class="table table-bordered  table-hover" id="example">
           <thead>
		     <tr>
			     <th width="90">FirstName</th>
			     <th width="90">LastName</th>
			     <th width="50">Subject</th> 
			     <th width="50">Commitment</th> 
			     <th width="100">Knowledge of the Subject</th> 
			     <th width="100">Teaching for Independent Learning</th> 
			     <th width="50">Management of Learning</th> 
			     <th width="50">Profissionalism</th> 
			     <th>Overall Mean</th> 
			     <th>Verbal Interpretation</th> 
			     <th>Evaluation Count</th> 
			     
			      
			      
			      
			      
			      
		     </tr>
           </thead>
		   <tbody>
			<?php
			if(isset($_POST['submit']))
			{
$teachers = mysql_query("SELECT *, (SELECT SUM(avetotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS aveTotal,
					   (SELECT SUM(ave1) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS ave1, 
					   (SELECT SUM(ave2) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS ave2, 
					   (SELECT SUM(ave3) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS ave3, 
					   (SELECT SUM(ave4) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS ave4, 
					   (SELECT SUM(ave5) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS ave5,
					   (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."' AND details.rater = 'dean/chairperson') AS evaluateCount FROM teacher group by fname");
			}
			else
			{
$teachers = mysql_query("SELECT *, (SELECT SUM(avetotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS aveTotal, 
					   (SELECT SUM(ave1) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS ave1, 
					   (SELECT SUM(ave2) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS ave2, 
					   (SELECT SUM(ave3) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS ave3, 
					   (SELECT SUM(ave4) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS ave4, 
					   (SELECT SUM(ave5) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS ave5, 
					   (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'dean/chairperson') AS evaluateCount FROM teacher group by fname");
			}			
			while($teacher = mysql_fetch_array($teachers))
			{	
			?>
			<tr>
				<td><?php echo $teacher['fname']; ?></td>
				<td><?php echo $teacher['lname']; ?></td>
				<td><?php echo $teacher['subject']; ?></td>
				<td><?php echo ($teacher['ave1'] != "") ? number_format((float)$teacher['ave1'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['ave2'] != "") ? number_format((float)$teacher['ave2'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['ave3'] != "") ? number_format((float)$teacher['ave3'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['ave4'] != "") ? number_format((float)$teacher['ave4'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['ave5'] != "") ? number_format((float)$teacher['ave5'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
				<td><?php echo ($teacher['aveTotal'] != "") ? number_format((float)$teacher['aveTotal'] / $teacher['evaluateCount'],2,".",'') : 0; ?></td>
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