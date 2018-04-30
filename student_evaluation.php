
<?php
include('dbcon.php');
include('header.php');
?>
<title>BPC-OFES | Student Evaluation</title>
<header>
  <style>
        .wrapperindex{
          background-size: cover;
          background-attachment: fixed;
          background-image: url("images/wrapperstudent.jpg");
        }      
    u{
      color: red;
    }
  </style>
</header>

  

<body class="wrapperindex">
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
  <ul class="nav">
<li class="active"><a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
</ul>
</div>
</div>





<!--content-->
             <div class="container">
       <div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
         <img src="images/banner4.png">
    
    </div>
      </div>
    
     </div>
   
    </div>
  <br>
<!--end-->
  <!--functions-->          
<div id="content">    
  <?php
  
    if (isset($_POST['evaluate'])) {
    $id_proof=$_POST['id_proof'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $subject=$_POST['subject'];
    $semester=$_POST['semester'];
    $program=$_POST['program'];
    $sy=$_POST['sy'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
    $q8=$_POST['q8'];
    $q9=$_POST['q9'];
    $q10=$_POST['q10'];
    $q11=$_POST['q11'];
    $q12=$_POST['q12'];
    $q13=$_POST['q13'];
    $q14=$_POST['q14'];
    $q15=$_POST['q15'];
    $q16=$_POST['q16'];
  
    
    $comment=$_POST['comment'];
    $rooms=$_POST['rooms'];
    $avetotal=$_POST['avetotal'];
    $rater=$_POST['rater'];
    
 mysql_query("INSERT INTO details (id_proof, fname, lname, subject, semester, program, sy, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, avetotal, comment, rooms, rater)
    VALUES('$id_proof','$fname', '$lname' , '$subject' , '$semester' ,  '$program', '$sy' , '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11',     '$q12', '$q13', '$q14', '$q15', '$q16', '$avetotal' , '$comment', '$rooms', '$rater')")or die(mysql_error());
    echo "<script>window.location='student.php'</script>";
    
    
    }
    ?>
  
     
        
    <!--endfunctions-->

 


 
<div class="row-fluid">
<div class="span12">
<div class="hero-unit">
<center><legend><h4>Evaluation Form</h4></legend></center>
<div class="span3">


  
   <?php
  
          if (isset($_GET['id_proof']))
  {
    echo '<form  method="post" class="well form-inline" name="autosum" style="float: left; margin-left:30px; width: 248px;" >';
      $id=$_GET['id_proof'];
      $result = mysql_query("SELECT * FROM classload WHERE id_proof = $id");

      while($row = mysql_fetch_array($result))
        { ?>
      
        
        <br />
       <strong style="margin:auto; font-size: 18px;"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </strong>
          <input type="hidden" name="teacherid" value="<?php echo  $row['teacherid']; ?>">
          <input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">
          <input type="hidden" name="lname" value="<?php echo $row['lname']; ?>">
          <input type="text" name="subject" readonly ='readonly' value="<?php echo $row['subject']; ?>">
          <input type="hidden" name="program" value="<?php echo $row['program']; ?>">
        
        
        
        <?php
        }
      }
      ?>
        
   
     </div>

      <div class="span3" style="margin-left: 100px;">
 
        <label class="control-label" for="inputEmail">Term/Semester:</label>
                                    
           <select name="semester" required>
              <option>1st</option>
              <option>2nd</option>
           </select>     
    </div>                              
        <div class="span3">
 
        <label class="control-label" for="inputEmail">School Year:</label>
           <select name="sy" required>
      <?php
      $int=2050; $i=2012; 
      while ($i <= $int){
      echo "<option>".$i."</option>";
      $i++;
      }
      ?>
      </select>                 
  </div>

    <div style="float: left; margin-left: 100px;  margin-top: 50px;">
    <table>
    <thead>
      <th>
        <tr>RATER</tr>
      </th>
    </thead>
    <tbody>
      <tr>
        <td>
          <label class="radio inline" style="margin-right: 35px;">
            <input type="radio" name="rater" id="inlineoptionsRadios1" value="student" checked>Student
          </label>   
        </td>
       
      </tr>
    </tbody>
    </table>
  </div>
    
     
   <!-- table1 -->  
   
 
 
            
       
  <table width="800" class="table table-hover">  
          <br />
          <br />
          <br />
          <br />
                              
           <p>
           <h4><u>INSTRUCTION:</u> Read each statement carefully and indicate your response by selecting the radio buttons below. </h4>
           </p>          

    <thead>
      <tr>
        <th>Scale</th>
        <th>Descriptive Rating</th>
      </tr>   
      
        
      
    </thead>
    <tbody>
      <tr>
       <td>5</td>
       <td>Always</td>
      </tr>
    <tr>
       <td>4</td>
       <td>Most of the time</td>
      </tr>
    <tr>
       <td>3</td>
       <td>Sometimes</td>
      </tr>
    <tr>
       <td>2</td>
       <td>Once in a while</td>
      </tr>
    <tr>
       <td>1</td>
       <td>Rarely</td>
      </tr>
    </tbody>


   </table>
   <!--end table1-->
   <!--table2-->
    
  
  
         
  <table width="800" class="table table-bordered table-hover">







<!--commitment-->
        <thead>
        <th class="alert alert-info"><center><strong><font color="#2B547E">Questions</th>
        <th class="alert alert-info"><center><strong><font color="#2B547E">Scale</th>
        </thead>
        
        
      <tr>
        <td>1. Listens and understands student’s point of view; he/she may not agree but the students feel understood. </td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c1" id="inlineoptionsRadios1" class="first" value="1" required>1
          </label>                                                 
        <label class="radio inline">                               
          <input type="radio" name="c1" id="inlineoptionsRadios2" class="first" value="2" required>2
          </label>                                                 
         <label class="radio inline">                              
          <input type="radio" name="c1" id="inlineoptionsRadios3" class="first" value="3" required>3
          </label>                                                 
         <label class="radio inline">                              
          <input type="radio" name="c1" id="inlineoptionsRadios4" class="first" value="4" required>4
          </label>                                                 
        <label class="radio inline">                               
          <input type="radio" name="c1" id="inlineoptionsRadios5" class="first" value="5" checked>5
          </label>
        
        
        
        </td>
        
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q1" id="first" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
      
        <!--end commitment>  
        <!--knowledge-->  
        <!---- knwledge---->
        <thead>
        
        
        
        </thead>
        
        
        <tr>
        <td>2. Imposes discipline among students fairly and consistently.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c2" id="inlineoptionsRadios1" class="second" value="1" required>1
          </label>                                                 
        <label class="radio inline">                               
          <input type="radio" name="c2" id="inlineoptionsRadios2" class="second" value="2" required>2
          </label>                                                 
         <label class="radio inline">                              
          <input type="radio" name="c2" id="inlineoptionsRadios3" class="second" value="3" required>3
          </label>                                                 
         <label class="radio inline">                              
          <input type="radio" name="c2" id="inlineoptionsRadios4" class="second" value="4" required>4
          </label>                                                 
        <label class="radio inline">                               
          <input type="radio" name="c2" id="inlineoptionsRadios5" class="second" value="5" checked>5
          </label>
        
        
        </td>
        
        </tr>
       <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q2" id="second" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
            
        <!--end knowledge-->
         
        <!-- teaching-->
         <thead>
        
        
        
        </thead>
        
        
        <tr>
        <td>3.Shows respect and consideration to all students.  </td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c3" id="inlineoptionsRadios1" class="third" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c3" id="inlineoptionsRadios2" class="third" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c3" id="inlineoptionsRadios3" class="third" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c3" id="inlineoptionsRadios4" class="third" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c3" id="inlineoptionsRadios5" class="third" value="5" checked>5
          </label>
        
        
        </td>
        
        </tr>
       <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q3" id="third" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        
        <!--end teaching-->   
        <!--management-->   
        <thead>
        
      
        
        </thead>
        
        
        <tr>
        <td>4. Encourages students to study harder.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c4" id="inlineoptionsRadios1" class="fourth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c4" id="inlineoptionsRadios2" class="fourth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c4" id="inlineoptionsRadios3" class="fourth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c4" id="inlineoptionsRadios4" class="fourth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c4" id="inlineoptionsRadios5" class="fourth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q4" id="fourth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
      
        </thead>
        
        
        <tr>
        <td>5. Follows the syllabus/ course provided by BPC.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c5" id="inlineoptionsRadios1" class="fifth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c5" id="inlineoptionsRadios2" class="fifth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c5" id="inlineoptionsRadios3" class="fifth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c5" id="inlineoptionsRadios4" class="fifth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c5" id="inlineoptionsRadios5" class="fifth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q5" id="fifth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
        
        
        </thead>
        
        
        <tr>
        <td>6. Discusses lesson clearly & shows mastery on it.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c6" id="inlineoptionsRadios1" class="sixth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c6" id="inlineoptionsRadios2" class="sixth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c6" id="inlineoptionsRadios3" class="sixth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c6" id="inlineoptionsRadios4" class="sixth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c6" id="inlineoptionsRadios5" class="sixth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q6" id="sixth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
    
        </thead>
        
        
        <tr>
        <td>7. Answers questions intelligently and welcomes comments.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c7" id="inlineoptionsRadios1" class="seventh" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c7" id="inlineoptionsRadios2" class="seventh" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c7" id="inlineoptionsRadios3" class="seventh" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c7" id="inlineoptionsRadios4" class="seventh" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c7" id="inlineoptionsRadios5" class="seventh" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q7" id="seventh" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
        
        
        </thead>
        
        
        <tr>
        <td>8. Uses chalkboard and/or other audio-visual materials to effectively contribute to student’s understanding of the lesson.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c8" id="inlineoptionsRadios1" class="eigth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c8" id="inlineoptionsRadios2" class="eigth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c8" id="inlineoptionsRadios3" class="eigth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c8" id="inlineoptionsRadios4" class="eigth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c8" id="inlineoptionsRadios5" class="eigth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q8" id="eigth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
     
        
        </thead>
        
        
        <tr>
        <td>9. Speaks loudly and uses classroom language efficiently.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c9" id="inlineoptionsRadios1" class="nineth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c9" id="inlineoptionsRadios2" class="nineth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c9" id="inlineoptionsRadios3" class="nineth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c9" id="inlineoptionsRadios4" class="nineth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c9" id="inlineoptionsRadios5" class="nineth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q9" id="nineth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
      
        
        </thead>
        
        
        <tr>
        <td>10. Checks the attendance systematically & consistently.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c10" id="inlineoptionsRadios1" class="tenth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c10" id="inlineoptionsRadios2" class="tenth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c10" id="inlineoptionsRadios3" class="tenth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c10" id="inlineoptionsRadios4" class="tenth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c10" id="inlineoptionsRadios5" class="tenth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q10" id="tenth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
     
        
        </thead>
        
        
        <tr>
        <td>11. Requires students to cooperate in maintaining classroom cleanliness for a better classroom atmosphere.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c11" id="inlineoptionsRadios1" class="eleventh" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c11" id="inlineoptionsRadios2" class="eleventh" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c11" id="inlineoptionsRadios3" class="eleventh" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c11" id="inlineoptionsRadios4" class="eleventh" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c11" id="inlineoptionsRadios5" class="eleventh" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q11" id="eleventh" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
       
        
        </thead>
        
        
        <tr>
        <td>12. Implements school’s rule and regulations  particularly in wearing ID and proper uniform.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c12" id="inlineoptionsRadios1" class="twelveth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c12" id="inlineoptionsRadios2" class="twelveth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c12" id="inlineoptionsRadios3" class="twelveth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c12" id="inlineoptionsRadios4" class="twelveth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c12" id="inlineoptionsRadios5" class="twelveth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q12" id="twelveth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
        
        
        </thead>
        
        
        <tr>
        <td>13. Dresses neatly and respectably.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c13" id="inlineoptionsRadios1" class="thirteenth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c13" id="inlineoptionsRadios2" class="thirteenth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c13" id="inlineoptionsRadios3" class="thirteenth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c13" id="inlineoptionsRadios4" class="thirteenth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c13" id="inlineoptionsRadios5" class="thirteenth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q13" id="thirteenth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
      
        
        </thead>
        
        
        <tr>
        <td>14. Starts and ends classes on time.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c14" id="inlineoptionsRadios1" class="fourteenth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c14" id="inlineoptionsRadios2" class="fourteenth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c14" id="inlineoptionsRadios3" class="fourteenth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c14" id="inlineoptionsRadios4" class="fourteenth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c14" id="inlineoptionsRadios5" class="fourteenth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q14" id="fourteenth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
       
        
        </thead>
        
        
        <tr>
        <td>15. Returns recorded test papers and projects.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c15" id="inlineoptionsRadios1" class="fifteenth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c15" id="inlineoptionsRadios2" class="fifteenth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c15" id="inlineoptionsRadios3" class="fifteenth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c15" id="inlineoptionsRadios4" class="fifteenth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c15" id="inlineoptionsRadios5" class="fifteenth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q15" id="fifteenth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        <thead>
        
        
        </thead>
        
        
        <tr>
        <td>16. Fair in giving grades and criticism.</td>
        <td width = "190">
        
        <label class="radio inline">
          <input type="radio" name="c16" id="inlineoptionsRadios1" class="sixteenth" value="1" required>1
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c16" id="inlineoptionsRadios2" class="sixteenth" value="2" required>2
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c16" id="inlineoptionsRadios3" class="sixteenth" value="3" required>3
          </label>                                                  
         <label class="radio inline">                               
          <input type="radio" name="c16" id="inlineoptionsRadios4" class="sixteenth" value="4" required>4
          </label>                                                  
        <label class="radio inline">                                
          <input type="radio" name="c16" id="inlineoptionsRadios5" class="sixteenth" value="5" checked>5
          </label>
        
        
        </td>
        </tr>
     
        <tr class="alert alert-block">
             <td align="right"><b></b></td>
             <td align="center"><input value="5.00" name="q16" id="sixteenth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
       
       <tr class="alert alert-success">
     <td align="right"><b>Overall Mean</b></td>
   <td align="center"><input value="5.00" readonly="true" size="8" type="text" name="avetotal" id ="avetotal" class="span5"></td>
     </tr>  
   
         <!--end-->  
   
   </table>
   
    <label>Professor:</label><textarea rows="3" placeholder="leave a comment here..." class="span11" name="comment" style="width:1159px; height:34px;"></textarea>
    <label>Facilities:</label><textarea rows="3" placeholder="leave a comment here..." class="span11" name="rooms" style="width:1159px; height:34px;"></textarea>
  <br>
    <center><button type="submit" name="evaluate" class="btn btn-primary btn-large" data-loading-text="Loading...">SUBMIT</button></center>
   
  
      </form>   
    </div>
   </div>

      
 </div>
<!---end table2-->
</div>
</div>
</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
	


	<script type="text/javascript">
	jQuery(document).ready( function($){
		$(".first").change(function(){
			recalculate($(this).attr('class'),1);
		});
		$(".second").change(function(){
			recalculate($(this).attr('class'),1);
		});
		$(".third").change(function(){
			recalculate($(this).attr('class'),1);
		});
		$(".fourth").change(function(){
			recalculate($(this).attr('class'),1);
		});
    $(".fifth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".sixth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".seventh").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".eigth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".nineth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".tenth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".eleventh").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".twelveth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".thirteenth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".fourteenth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".fifteenth").change(function(){
      recalculate($(this).attr('class'),1);
    });
    $(".sixteenth").change(function(){
      recalculate($(this).attr('class'),1);
    });
		
		function recalculate(classVar,dividend){
			var sum = 0;
			$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum / dividend;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalClass").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = (total / 16);
			$("#avetotal").val(total.toFixed(2));
			
			
		}
	});
	</script>
	
<!---
	<script type="text/javascript">
	jQuery(document).ready( function($){
		$(".first").change(function(){
			recalculate($(this).attr('class'));
		});
		$(".second").change(function(){
			recalculate($(this).attr('class'));
		});
		$(".third").change(function(){
			recalculate($(this).attr('class'));
		});
		$(".fourth").change(function(){
			recalculate($(this).attr('class'));
		});


		function recalculate(classVar){
			var sum = 0;
			$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum / 5;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalClass").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = total / 4;
			$("#avetotal").val(total.toFixed(2));
		}
	});
	</script>
	
-->



</div>

</div>

</div>
<?php include('modal.php'); ?>	
</body>
</html>