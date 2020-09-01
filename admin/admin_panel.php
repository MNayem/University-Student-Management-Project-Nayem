<?php

	session_start();
	
	if(!$_SESSION['admin_name'])
	{
		header('location:admin_login.php?error=You Required To Login First...!!!');
	}
?>

<html>
	<head>
		<title>view all information</title>
	</head>
	<body>
		<div style="float:left;background:aqua">
		<h3><a href="insert_record.php">Insert New Record</a></h3>
		<h3><a href="user_registration.php">Registration</a></h3>
		<h3><a href="result_input.php">Input result</a></h3>
		<h3><a href="user_registration.php">Course</a></h3>
		<h3><a href="logout.php">Logout</a></h3>
		</div>
    	<center><font color="red" size="4">
		<?php echo @$_GET['deleted']; ?>
		<?php echo @$_GET['updated']; ?>
		<?php echo @$_GET['Logged']; ?> 
		</font>
		</center>
		<div style="float:right">
		
		</font>
		<center>Welcome : <font size="4" color="red"><?php echo $_SESSION['admin_name']; ?></center>
		</font>
		<table align="center" width="1000" border="4"> 
			<tr>
				<td colspan="20" bgcolor="blue" align="center">
					<h1>View All Inserted Records</h1>
				</td>
			</tr>
			<tr align="center">
				<th>u_id</th>
				<th>Student ID</th>
				<th>Student's Name</th>
				<th>Father's Name</th>
				<th>Department</th>
				<th>Semester</th>
				<th>Year</th>
				<th>Delete</th>
				<th>Edit</th>
				<th>Details</th>
			</tr>
			<tr>
			<?php
			   /* $server = "localhost";
				$user = "root";
				$db = "cse";
				$con = mysqli_connect($server,$user,"");
				mysqli_select_db($con,$db);*/
				include("includes/db1.php");
				
				$query = "select *from u_reg order by 1 DESC";
				$run = mysqli_query($con,$query);
				
				$i = 1;
				
				while($row = mysqli_fetch_array($run))
				{
					$u_id = $row['u_id'];
					$u_stdid = $row[1];
					$u_name = $row[2];
					$u_father = $row[3];
					$u_dept = $row[4];
					$u_semester = $row[5];
					$u_year = $row[6];
			?>
				<td align="center"><?php echo $i; $i++; ?></td>
				<td align="center"><?php echo $u_stdid ?></td>
				<td align="center"><?php echo $u_name; ?></td>
				<td align="center"><?php echo $u_father; ?></td>
				<td align="center"><?php echo $u_dept; ?></td>
				<td align="center"><?php echo $u_semester?></td>
				<td align="center"><?php echo $u_year; ?></td>
				<td align="center"><a href="delete_record.php?del=<?php echo $u_id; ?>">Delete</a></td>
				<td align="center"><a href="update_record.php?edit=<?php echo $u_id; ?>">Edit</a></td>
				<td align="center"><a href="view.php?details=<?php echo $u_id; ?>">Details</a></td>
			</tr>
				<?php } ?>
				</div>
		</table>
		<br><br>
		<form action="admin_panel.php" method="get">  
			Search a Record:</h3> <input type="text" name="search">
			<input type="submit" name="submit" value="Find Now">
		</form> 
		<?php 

			if(isset($_GET['search']))
			{
				$search_record = $_GET['search'];
				
				/*$query2 = "select *from u_reg where  Student_id = '$search_record' OR Students_Name = '$search_record'";*/
				$query2 = "select * from u_reg where Student_id like '%$search_record%' OR Students_Name like '%$search_record%'";
				$run2 = mysqli_query($con,$query2);
				
				while($row2 = mysqli_fetch_array($run2))
				{
					$id1 = $row2[1];
					$name1 = $row2[2];
					$father1 = $row2[3];
					$dept1 = $row2[4];
					$semester1 = $row2[5];
					$year1 = $row2[6];
		?>
		<table width="1000" align="center" border="1" bgcolor="gray">
			<!--<tr align="center">
				<th>Student ID</th>
				<th>Student's Name</th>
				<th>Father's Name</th>
				<th>Department</th>
				<th>Semester</th>
				<th>Year</th>
			</tr>-->
			<tr align="center">
				<td><?php echo $id1 ?></td>
				<td><?php echo $name1; ?><td>
				<td><?php echo $father1; ?><td>
				<td><?php echo $dept1; ?><td>
				<td><?php echo $semester1; ?><td>
				<td><?php echo $year1; ?><td>
			</tr>
		</table>
			<?php } } ?>
	</body>
</html>