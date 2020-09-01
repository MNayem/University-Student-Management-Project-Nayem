<?php 
	$server = "localhost";
	$user = "root";
	$db = "ncse";
	$pass="";
	$con = mysqli_connect($server,$user,$pass);
	mysqli_select_db($con,$db);
	
	$edit_record = $_GET['edit'];
	
	$query = "select *from u_reg where u_id = '$edit_record'";
	$run = (mysqli_query($con,$query));
	
	while($row = mysqli_fetch_array($run))
	{
		$edit_id = $row['u_id'];
		$s_id = $row['1'];
		$s_name = $row['2'];
		$s_father = $row['3'];
		$s_dept = $row['4'];
		$s_semester = $row['5'];
		$s_year = $row['6'];
	}
?>

<html>
	<head>
		<title>updating record</title>
	</head>
	<body>
		<form method="post" action="update_record.php?edit_form=<?php echo $edit_id; ?>">
			<table width="600" align="center" border="5">
				<tr>
					<th bgcolor="yellow" colspan="5">Update Record</th>
				</tr>
				<tr>
					<td align="right">Student's Id :</td>
					<td><input type="text" name="user_id1" value="<?php echo $s_id; ?>">
					</td>
				</tr>
				<tr>
					<td align="right">Student's Name :</td>
					<td><input type="text" name="student_name1" value="<?php echo $s_name; ?>">
					</td>
				</tr>
				<tr>
					<td align="right">Father's Name :</td>
					<td><input type="text" name="father_name1" value="<?php echo $s_father; ?>">
					</td>
				</tr>
				<tr>
					<td align="right">Department :</td>
					<td><input type="text" name="s_dept1" value="<?php echo $s_dept; ?>">
					</td>
				</tr>
				<tr>
					<td align="right">Semester :</td>
					<td>
						<select name="student_semester1">
							<option value="<?php echo $s_semester; ?>"><?php echo $s_semester; ?></option>
							<option value="summer">summer</option>
							<option value="spring">spring</option>
							<option value="fall">fall</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">Year :</td>
					<td><input type="text" name="s_year1" value="<?php echo $s_year; ?>">
					</td>
				</tr>
				<tr>
					<td align="center" colspan="6">
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['update']))
	{
		$edit_record1 = $_GET['edit_form'];
		$student_id =$_POST['user_id1'];
		$student_name =$_POST['student_name1'];
		$student_father =$_POST['father_name1'];
		$student_dept =$_POST['s_dept1'];
		$student_semester =$_POST['student_semester1'];
		$student_year =$_POST['s_year1'];
		
		$query = "update u_reg set Student_id = '$student_id',Students_Name = '$student_name', Fathers_name = '$student_father'
		, Department = '$student_dept', Semester = '$student_semester', Year = '$student_year' where u_id = '$edit_record1'";
		
		if(mysqli_query($con,$query))
		{
			echo "<script>window.open('admin_panel.php?updated=One record has been updated successfully...!!!','_self')</script>";
		}
	}
?>