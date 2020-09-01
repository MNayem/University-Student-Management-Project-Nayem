<html>
	<head>
		<title>student registration form</title>
	</head>
	<body>
		<form method="post" action="insert_record.php">
			<table width="600" align="center" border="5">
				<tr>
					<th bgcolor="yellow" colspan="5">Student's Registration Form</th>
				</tr>
				<tr>
					<td align="right">Student's Id :</td>
					<td><input type="text" name="student_id">
					<font color="red"><?php echo @$_GET['id']; ?></font>
					</td>
				</tr>
				<tr>
					<td align="right">Student's Name :</td>
					<td><input type="text" name="student_name"></td>
				</tr>
				<tr>
					<td align="right">Father's Name :</td>
					<td><input type="text" name="father_name"></td>
				</tr>
				<tr>
					<td align="right">Department :</td>
					<td><input type="text" name="student_dept"></td>
				</tr>
				<tr>
					<td align="right">Semester :</td>
					<td>
						<select name="student_semester">
							<option value="null">Select Semester</option>
							<option value="summer">summer</option>
							<option value="spring">spring</option>
							<option value="fall">fall</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">Year :</td>
					<td><input type="text" name="student_year"></td>
				</tr>
				<tr>
					<td align="center" colspan="6">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php 
	$server = "localhost";
	$user = "root";
	$db = "ncse";
	$con = mysqli_connect($server,$user,"");
	mysqli_select_db($con,$db);
	
	if(isset($_POST['submit']))
	{
	$student_id = $_POST['student_id'];
	$student_name = $_POST['student_name'];
	$father_name= $_POST['father_name'];
	$student_dept = $_POST['student_dept'];
	$student_semester = $_POST['student_semester'];
	$student_year = $_POST['student_year'];
	
	if($student_name == '')
	{
		echo "<script>window.open('insert_record.php?name=Name is required...!!!','_self')</script>";
		exit();
	}
	
	$query = "insert into u_reg(Student_id,Students_Name,Fathers_Name,Department,Semester,Year) values ('$student_id','$student_name','$father_name','$student_dept','$student_semester','$student_year')";
	
	if(mysqli_query($con,$query))
	{
		echo "<center><b>The Following Data has been inserted...!!!</b></center>";
		echo "<table align='center' border='4' width='1100'><tr><td align='center'>$student_id</td>
		<td align='center'>$student_name</td><td ali8gn='center'>$father_name</td><td align='center'>$student_dept</td><td align='center'>$student_semester</td><td align='center'>$student_year</td>
		</tr>
		</table>";
	}
	
}
?>