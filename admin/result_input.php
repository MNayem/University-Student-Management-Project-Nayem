<?php
//session_start();
include("admin_panel.php");
include("includes/db1.php");


?>
<html>
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
								  $exam=$row[1];
								
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
						
						<td>Select Subject Code</td>
						   <td>
                            <select name="subcode" required="required">
							<?php
							//$exam=$_POST['exam'];
							//$year=$_POST['year'];
							  $query="select * from course";
							  $run=mysqli_query($con,$query);
							  while($row=mysqli_fetch_array($run))
							  {
								  echo$course=$row[0];
								
							?>
                               
							  <option value="<?php  ECHO $course?>"><?php  echo $course?></option>
							  <?php  }?>
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
	$semester=$_SESSION['semester']=$_POST['semester'];
	$subcode=$_SESSION['subcode']=$_POST['subcode'];
	
	echo "<script>window.open('first.php','_self')</script>";
	//header('location:first.php');
	//echo"<script>window.open('registration.php')</script>";
	/*
	else if($year=="First" && $semester=="Second" )
	{
	header('location:second.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="First" && $semester=="Third" )
	{
	header('location:third.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Secod" && $semester=="First" )
	{
	header('location:fourth.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Second" && $semester=="Second" )
	{
	header('location:fifth.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Second" && $semester=="Third" )
	{
	header('location:sixth.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Third" && $semester=="First" )
	{
	header('location:seventh.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Third" && $semester=="Secod" )
	{
	header('location:eighth.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Third" && $semester=="Third" )
	{
	header('location:nine.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Fourth" && $semester=="First" )
	{
	header('location:ten.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Fourth" && $semester=="Secod" )
	{
	header('location:eleven.php');
	//echo"<script>window.open('registration.php')</script>";
	}
	else if($year=="Fourth" && $semester=="Third" )
	{
	header('location:twelve.php');
	//echo"<script>window.open('registration.php')</script>";
	}*/
}

?>
</fieldset>


</html>