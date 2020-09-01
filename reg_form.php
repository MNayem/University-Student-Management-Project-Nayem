<?php
session_start();
$id=$_SESSION['admin_pass'];
include("includes/db1.php");

?>
<html>
<head></head>
<title></title>
<body>

<fieldset>
<legend>Student Registration</legend>
<form method="post">
	<table>
		<tr>
			<td>Select Exam</td>
	
                        
                        <td>
                            <select name="exam" required="required">
							<?php
							  $query="select * from exam";
							  $run=mysqli_query($con,$query);
							  while($row=mysqli_fetch_array($run))
							  {
								  echo$exam=$row[1];
								
							?>
                               
							  <option value="<?php  ECHO $exam?>"><?php  echo $exam?></option>
							  <?php  }?>
                            </select>
                        </td>
						<td>
							<td>Select Year</td>
						</td>
						  
                        <td>
                            <select name="year" required="required">
							
							
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                                <option value="Fourth">Fourth</option>
                           
							 
                            </select>
                        </td>
							<td>
							<td>Select Semester</td>
						</td>
						  
                        <td>
                            <select name="semester" required="required">
							
							
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                               
                           
							 
                            </select>
                        </td>
						<td><input type="submit" name="reg" value="Load Form"/></td>
                    
		</tr>
		
	</table>
</form>
			<?php
					if(isset($_POST['reg']))
							{//echo"<script>alert('fdfa')</script>";
								$exam= $_SESSION['exam']=$_POST['exam'];
								$year=$_SESSION['year']=$_POST['year'];
								$year=$_SESSION['semester']=$_POST['semester'];
								header('location:registration.php');
								//echo"<script>window.open('registration.php')</script>";
							}		

			?>
</fieldset>


</body>
</html>