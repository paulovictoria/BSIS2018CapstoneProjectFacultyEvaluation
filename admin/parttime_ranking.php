
<?php include ('dbcon.php'); ?>
<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<title>Details | Report</title>

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
<br />
<br />
<center><h3>Overall Results Evaluated by College President/VPAA</h3></center>


      <table class="table table-bordered  table-hover" id="example">
           <thead>
             <tr>
                    <th>Professor</th>
                    <th>Total Grade</th> 
                    <th>Status</th>         
             </tr>
           <tbody>
            <?php
            if(isset($_POST['submit']))
            {
$teachers = mysql_query("SELECT *, (SELECT SUM(suptotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.semester = '".$_POST['semester']."' AND details.rater = 'category1' AND details.sy = '".$_POST['schoolyear']."') AS supTotal, 
                        
                       (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.rater = 'category1' AND details.semester = '".$_POST['semester']."' AND details.sy = '".$_POST['schoolyear']."') AS evaluateCount FROM teacher group by fname");
            }
            else
            {
$teachers = mysql_query("SELECT *, (SELECT SUM(suptotal) FROM details WHERE details.teacherid = teacher.teacherid AND details.role = 'superior') AS supTotal, 
                       
                       (SELECT COUNT(*) FROM details WHERE details.teacherid = teacher.teacherid AND details.role = 'superior') AS evaluateCount FROM teacher group by fname");
            }           
            while($teacher = mysql_fetch_array($teachers))
            {   
            ?>
            <tr>
                <td><?php echo $teacher['fname']; ?> <?php echo $teacher['lname']; ?></td>
                <td><?php echo ($teacher['supTotal'] != "") ? number_format((float)$teacher['supTotal'] / $teacher['evaluateCount'] * .40,2,".",'') : 0; ?></td>
             <td>
                <?php
                if($teacher['supTotal'] != "")
                {
                $total = $teacher['supTotal'] / $teacher['evaluateCount'];
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