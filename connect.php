<?php
//mysql_connect("localhost","root","");
//mysql_select_db('student');
$server="localhost";
$user="root";
$db="student";
$con=mysqli_connect($server,$user,"");
mysqli_select_db($con,$db);
?>