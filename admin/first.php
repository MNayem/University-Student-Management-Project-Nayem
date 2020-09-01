<?php
session_start();

include("admin_panel.php");
include('includes/db1.php');
$exam=$_SESSION['exam'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];
$subcode=$_SESSION['subcode'];

?>
<html>
<fieldset>
<legend>Input Result Here..</legend>
<form method="post">
<table border="1" align="center">
	<tr><th colspan="5" align="center"><?php echo 'Exam:'. $exam.'  '.'Year:'.$year.'	 '.'Semester:'.$semester.' '.'Subject:'.$subcode ?></th></tr>
	<tr>
		<td align="center">Course Code</td>
		<td align="center">Course Title</td>
		<td align="center">Credit</td>
		<td align="center">Grade</td>
		<td align="center">Grade Letter</td>
		
	</tr>
	<?php 
	$code="";
	$title="";
	$credit="";
	$query="select * from course where year='$year' and semester='$semester' and course_code='$subcode'";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run))
	{
		$GLOBALS['code']=$row[0];
		$GLOBALS['title']=$row[1];
		$GLOBALS['credit']=$row[3];
			
			
				echo"<tr>
		<td align='center'>$code</td>
		<td align='center'>$title</td>
		<td align='center'>$credit</td>
		<td align='center'><input type='text'name='grade'/></td>
		<td align='center'><input type='text' name='letter'/></td>
			</tr>";

			
	}
	?>

	
	
	<tr><td>Student Id</td><td colspan="4"><input type="text" name="stu_id"/></td></tr>
	<tr><td colspan="5" align="center"><input type="submit" name="submit" value="submit"/></td></tr>
</table>
</form>
</fieldset>
<?php
if(isset($_POST['submit']))
{
	$grade=$_POST['grade'];
	$letter=$_POST['letter'];
	$stu_id=$_POST['stu_id'];
	$query="insert into result(exam,year,semester,course_code,course_title,credit,grade,letter_grade,stu_id)values('$exam','$year','$semester','$code','$title','$credit','$grade','$letter','$stu_id')";
	if(mysqli_query($con,$query)>0)
	{
		echo"Inserted successfully";
		
	}
	
}

?>
</html>