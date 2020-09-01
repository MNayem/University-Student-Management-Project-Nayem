<?php
	session_start();
?>

<html>
	<head>
		<title>Admin Login</title>
	</head>
	<body>
		<form action="admin_login.php" method="post">
			<table width="400" border="2" align="center" bgcolor="orange"> 
				<tr>
					<td align="center" bgcolor="pink" colspan="6"><h2>................... Admin Panel ..................</h2></td>
				</tr>
				<tr>
					<td align="right">Admin Name :</td>
					<td><input type="text" name="admin_name" placeholder="name"></td>
				</tr>
				<tr>
					<td align="right">Password :</td>
					<td><input type="password" name="admin_pass" placeholder="password"></td>
				</tr>
				<tr>
					<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
		</form>
		<center><?php echo @$_GET['error']; ?></center>
	</body>
</html> 

<?php
    $c=0;
	/*$server = "localhost";
	$user = "root";
	$db = "cse";
	$con = mysqli_connect($server,$user,"");
	mysqli_select_db($con,$db);*/
	include("includes/db1.php");
	if(isset($_POST['login']))
	{
		$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass'];
		
		$query = "select *from admin where admin_user = '$admin_name' and admin_pass = '$admin_pass'";
		$run = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($run))
		
		{
			$c++;
			
		}
		echo "$c";
		if($c == 1)
		{
			echo "<script>window.open('admin_panel.php?Logged=Login successfully...!!!','_self')</script>";
			
		}
		else
		{
			echo "<script>alert('User Name or Password is incorrect...!!!')</script>";
		}
	}
							/*include("includes/db1.php");
	
							if(isset($_POST['login']))
							{
								$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
								$admin_pass =$_SESSION['admin_pass']= $_POST['admin_pass'];
		
								$query = "select *from admin where admin_user = '$admin_name' and admin_pass = '$admin_pass'";
								$run = mysqli_query($con,$query);
		
								if(mysqli_num_rows($run) == 1)
								{
									echo "<script>window.open('admin_panel.php?Logged=Login successfully...!!!','_self')</script>";
								}
							else
								{
									echo "<script>alert('User Name or Password is incorrect...!!!')</script>";
								}
							}*/
					   
	?>
