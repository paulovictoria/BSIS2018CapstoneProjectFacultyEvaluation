<!-- Modal -->
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_bpc-ofes";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `subject`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_bpc-ofes";

// connect to mysql database

$connect2 = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query1 = "SELECT * FROM `program`";

// for method 1

$result2 = mysqli_query($connect2, $query1);

// for method 2

$result3 = mysqli_query($connect2, $query1);

$options1 = "";

while($row3 = mysqli_fetch_array($result3))
{
    $options1 = $options1."<option>$row3[1]</option>";
}

?>
<div id="addload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header" style="background-color: lightgreen;">
    <h4><center>Add Teacher</center></h4>
</div>
<div class="modal-body">
        <center>
            <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                            
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" readonly = "true" name="id_teacher" required value=<?php echo $get_id; ?>>
                                    </div>
                                </div>    
                                 <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" readonly = "true" name="fname" required value=<?php echo $fname ?>>
                                    </div>
                                </div>        
                                 <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" readonly = "true" name="lname" required value=<?php echo $lname ?>>
                                    </div>
                                </div>      
                                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Subject</label>
                                <div class="controls">
                                
                                     
                                            <select type ="text" name="subject">
                                            <option></option>
                                            <?php echo $options;?>
                                             </select>
                                      </div>
                                  </div>
                                                        
                                       <div class="control-group">
                                <label class="control-label" for="inputEmail">Course</label>
                                <div class="controls">
                                
                                     
                                            <select type ="text" name="program">
                                            <option></option>
                                            <?php echo $options1;?>
                                                   </select>
                                      </div>
                                  </div>
                                           
                                            <div class="control-group">
                                                <label class="control-label" for="inputemail">Year:</label>
                                                <div class="controls">
                                                    <select type="text" name="yr" required>
                                                <option>--Select Year Level--</option>
                                                <option>1st</option>
                                                <option>2nd</option>
                                                <option>3rd</option>
                                                <option>4th</option>
                                             </select>
                                                </div>
                                            </div>
                                           
                                                <div class="control-group">
                                                <label class="control-label" for="inputPassword">Section:</label>
                                                <div class="controls">
                                                                     <select type="text" name="sec">
                                                                              <option>--Select Section--</option>
                                                                              <option>Section-A</option>
                                                                              <option>Section-B</option>
                                                                              <option>Section-C</option>
                                                                              <option>Section-D</option>
                                                                              <option>Section-E</option>
                                                                              <option>Section-F</option>
                                                                              <option>Section-G</option>
                                                                              <option>Section-H</option>
                                                                              <option>Section-I</option>
                                                                              <option>Section-J</option>
                                                                              <option>Section-K</option>
                                                                              <option>Section-L</option>
                                                                              <option>Section-M</option>
                                                                              <option>Section-N</option>
                                                                              <option>Section-O</option>
                                                                              <option>Section-P</option>
                                                                              <option>Section-Q</option>
                                                                              <option>Section-R</option>
                                                                              <option>Section-S</option>
                                                                              <option>Section-T</option>
                                                                              <option>Section-U</option>
                                                                              <option>Section-V</option>
                                                                              <option>Section-W</option>
                                                                              <option>Section-X</option>
                                                                              <option>Section-Y</option>
                                                                              <option>Section-Z</option>                        
                                                             </select>
                                                         
                                                               
                                                            </div>
                                                       
                                                
                                                            </div>
  
                                            <div class="control-group">
                                                <div class="controls">

                                                    <button type="submit" name="update" class="btn btn-success" style="margin-right: 64px;"><i class="icon-save"></i>&nbsp;Save</button>
                                                   
                                                </div>
                                            </div>
            </form>
                                    
                                    
                    <?php   
                     
                             
                     if (isset($_POST['update'])) {

                       $id_teacher =$_POST['id_teacher'];
                       $subject =$_POST['subject'];
                       $program =$_POST['program'];
                       $yr =$_POST['yr'];
                       $sec =$_POST['sec'];
                                       
                mysql_query("INSERT INTO teacherload  (id_teacher,subject,program,yr,sec) VALUES('$id_teacher','$subject','$program','$yr','$sec')") 
                or die(mysql_error());
                 echo "<script>alert('Add Sucessfull'); window.location='classload.php'<php $get_id?></script>";
                            
                        }
                        ?>
        </center>
</div>