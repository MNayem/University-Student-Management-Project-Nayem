<?php
session_start();
$id=$_SESSION['admin_pass'];
include("includes/db1.php");
	$exam= $_SESSION['exam'];
	$year=$_SESSION['year'];
	$semester=$_SESSION['semester'];

?>
<html>
<head></head>
<title></title>
<body>


<fieldset>
	<legend>Registration Form</legend>
	<form method="post">
		<table border="1px" align="center">
			<tr><td colspan="5" align="center" bgcolor="aqua">Registration Here</td></tr>
			<tr>
			<th align="center">Course Code</th>
			<th align="center">Course_title</th>
			<th align="center">Department</th>
			<th align="center">Credit</th>
			</tr>
			<?php
			$query="select * from course where exam='$exam' and year='$year' and semester='$semester'";
			$run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($run))
			{
				
				$course_code=$row[0];			
				$course_title=$row[1];			
				$dept=$row[2];		
				$credit=$row[3];	
			
			?>
			<tr>
			<td align="center"><?php  echo $course_code ?></td>
			<td align="center"><?php  echo $course_title ?></td>
			<td align="center"><?php  echo $dept ?></td>
			<td align="center"><?php  echo $credit ?></td>
			</tr>
			<?php  }?>
			<tr><td colspan="5" align="center"><input type="submit" name="Register" value="Registration" /></td></tr>
		</table>
	</form>
	<?php
	if(isset($_POST['Register']))
	{
		$query="insert into registration(exam,year,semester,stu_id)values('$exam','$year','$semester','$id')";
		if(mysqli_query($con,$query)>0)
		{
			echo"<script>alert('Registration complete..')</script>";
			
		}
		
	}
	?>
</fieldset>
</body>
</html>