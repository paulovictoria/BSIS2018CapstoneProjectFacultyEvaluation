<?php
include('dbcon.php');
include('header.php');
?>


  
<title>Evaluation Form</title>
<body>
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
    
    $id_professor=$_POST['id_professor'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $semester=$_POST['semester'];
    $sy=$_POST['sy'];
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $s3=$_POST['s3'];
    $s4=$_POST['s4'];
  
    
    $suptotal=$_POST['suptotal'];
    $rater=$_POST['rater'];
    $role=$_POST['role'];
    
 mysql_query("INSERT INTO details (id_professor, fname, lname, semester, sy, s1, s2, s3, s4, suptotal, rater, role)
    VALUES('$id_professor','$fname', '$lname', '$semester', '$sy', '$s1', '$s2', '$s3', '$s4', '$suptotal' , '$rater', '$role')")or die(mysql_error());
    //echo "<script>window.location='dean.php'</script>";
    
    
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
      $result = mysql_query("SELECT * FROM professor WHERE id_proof = $id");

      while($row = mysql_fetch_array($result))
        { ?>
      
        
        <br />
       <strong style="margin:auto; font-size: 18px;"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </strong>
          <input type="hidden" name="id_professor" value="<?php echo  $row['id_professor']; ?>">
          <input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">
          <input type="hidden" name="lname" value="<?php echo $row['lname']; ?>">
          
        
        
        
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
            <input type="hidden" name="rater" id="inlineoptionsRadios1" value="category3" checked><strong>Dean of Student Affairs</strong>
            <input type="hidden" name="role" id="inlineoptionsRadios1" value="superior" checked>
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
       <td>Outstanding</td>
      </tr>
    <tr>
       <td>4</td>
       <td>Very Satisfactory</td>
      </tr>
    <tr>
       <td>3</td>
       <td>Satisfactory</td>
      </tr>
    <tr>
       <td>2</td>
       <td>Fair</td>
      </tr>
    <tr>
       <td>1</td>
       <td>Poor</td>
      </tr>
    </tbody>


   </table>
   <!--end table1-->
   <!--table2-->
    
  
  
         
  <table width="800" class="table table-bordered table-hover">







<!--commitment-->
        <thead>
        <th class="alert alert-info"><center><strong><font color="#2B547E">Contribution to the College(Dean of the Student Affairs, Extension Services)</th>
        <th class="alert alert-info"><center><strong><font color="#2B547E">Scale</th>
        </thead>
        
        
      <tr>
        <td>A. Participated in one College Governance Council. </td>
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
             <td align="center"><input value="5.00" name="s1" id="first" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
      
        <!--end commitment>  
        <!--knowledge-->  
        <!---- knwledge---->
     
        
        
        <tr>
        <td>B. Contributed to student club/organization.</td>
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
             <td align="center"><input value="5.00" name="s2" id="second" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
            
        <!--end knowledge-->
         
        <!-- teaching-->
        
        
        
        <tr>
        <td>C. Conducted presentation/workshop for colleagues and/or students.  </td>
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
             <td align="center"><input value="5.00" name="s3" id="third" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
        
        <!--end teaching-->   
        <!--management-->   
       
        
        <tr>
        <td>D. Contributed to college wide activities.</td>
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
             <td align="center"><input value="5.00" name="s4" id="fourth" readonly="readonly" size="3" type="hidden" readonly="readonly" class="span5 totalClass"></td>
             </tr>
      
        

       
       <tr class="alert alert-success">
     <td align="right"><b>Overall Mean</b></td>
   <td align="center"><input value="5.00" readonly="true" size="8" type="text" name="suptotal" id ="avetotal" class="span5"></td>
     </tr>  
   
         <!--end-->  
   
   </table>
   
   
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
      total = (total / 4);
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