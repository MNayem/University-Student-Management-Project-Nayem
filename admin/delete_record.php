<?php 
	$server = "localhost";
	$user = "root";
	$db = "ncse";
	
    $con = mysqli_connect($server,$user,"");

	mysqli_select_db($con,$db);
	
	$delete_record = $_GET['del'];
	
	$query = "delete from u_reg where u_id = '$delete_record'";
	
	if(mysqli_query($con,$query))
	{
		echo "<script>window.open('admin_panel.php?deleted=One Record has been Deleted Successfully ...!!!','_self')</script>";
	}
?>