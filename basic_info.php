<html>
	<body>
		<form action="basic_info.php" method="get">  
			 Search a Record:</h3> <input type="text" name="search">
			 <input type="submit" name="submit" value="Find Now">
		</form> 
	<?php 
		include("includes/db1.php");
			if(isset($_GET['search']))
			{
				$search_record = $_GET['search'];
				
				$query2 = "select *from u_reg where  Student_id = '$search_record' OR Students_Name = '$search_record'";
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
		<table width="1100" align="center" border="1" bgcolor=""">
			
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