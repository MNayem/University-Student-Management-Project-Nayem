<?php
	session_start();
	
	if(!$_SESSION['admin_name'])
	{
		header('location:project.php?error=Please Login First...!!!');
	}
	$ff=$_SESSION['admin_pass'];
	include("includes/db1.php");
	$semester="";
?>

<html>
	<head>
		<link href="project.css" rel="stylesheet" type="text/css"></link>
			<script src="project.js" type="text/javascript"></script>
		<title>welcome to student page</title>
	</head>
	<body onload="startTime()">
		<div id="txt"></div>
		<div class="main">
			<div class="banner">
					<div class="banner_text">
						<h2>Computer Science and Engineering(CSE)</h2>
						<h6>Department of North Western University,Khulna</h6>
					</div>
					<a href="student_page.php"><img src="images/logo2.png" alt=""></img></a>
			</div>
			<div class="mainmenu">
				<ul class="menu">
					<ul>
						<li class="submenu"><a href="">About</a>
							<ul class="hidden">
								<li><a href="about.php" target="">About us</a></li>
								<li><a href="Nwu_trust.php" target="">NWU trust organogram</a></li>
								<li><a href="mission.php" target="">Mission</a></li>
								<li><a href="vision.php" target="">Vision</a></li>
								<li><a href="carrer.php" target="">Career of @CSE</a></li>
							</ul>	
						</li>
						<li class="submenu"><a href="">Academic</a>
							<ul class="hidden">
								<li><a href="dean.php" target="">Dean</a></li>
								<li><a href="register.php" target="">Register</a></li>
								<li><a href="dept_head.php" target="">Head Of Department</a></li>
							</ul>
						</li>
						<li class="submenu"><a href="">Admission</a>
							<ul class="hidden">
								<li><a href="admission_notice.php" target="">Admission Notice</a></li>
								<li><a href="admission_notice.php" target="">Admission Form</a></li>
								<li><a href="graduate.php" target="">Graduate</a></li>
								<li><a href="undergraduate.php" target="">Under Graduate</a></li>
								<li><a href="scholarship_waiver.php" target="">Scholarship & Waiver</a></li>
							</ul>
						</li>
						<li class="submenu"><a href="">Courses</a>
							<ul class="hidden">
								<li><a href="first_year.php" target="">1st Year</a></li>
								<li><a href="second_year.php" target="">2nd Year</a></li>
								<li><a href="Third_year.php" target="">3rd Year</a></li>
								<li><a href="fourth_year.php" target="">4th Year</a></li>
							</ul>
						</li>
						<li class="submenu"><a href="">Administration</a>
							<ul class="hidden">
								<li><a href="dean_office.php" target="">Office of Dean</a></li>
								<li><a href="dept_head_office.php" target="">Office of Department Head</a></li>
								<li><a href="reception.php" target="">Reception</a></li>
								<li><a href="library.php" target="">Library Office</a></li>
							</ul>
						</li>
						<li><a href="library.php">Library</a></li>
						<li><a href="research.php">Research</a></li>
						<li><a href="ptoto_gallery.php">Photo Gallery</a></li>
					</ul>
				</ul>
			</div>
			<div class="about">
				<div class="left_side">
					<ul>
						<li><a href="reg_form.php">Registration Form</a></li>
						<li><a href="basic_info.php">Basic Information</a></li>
						<li><a href="student_page.php">Result</a></li>
						<li><a href="logout_two.php">Logout</a></li>
						<li><a href="project.php">Home</a></li>
					</ul>
				</div>
				<div class="right_side">
					<center>Academic Performance of : <font size="4" color="red"><?php echo $_SESSION['admin_name']; ?></center>
					<h2>Your Result is in the following table... !!!</h2>
					<br>
					
					<fieldset>
					<br>
					<legend style="font-size:20px;font-weight:bold;color:red">Academic Performance</legend>	
					<table border='1px'>
					<?php
					$c="";
					$cc="";
					$ccc="";
				$query="select serial,exam,year,semester,course_code,course_title,credit,grade,letter_grade from result where stu_id='$ff'";
				$run=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($run))
				{
					$si=$row['serial'];
					$exam=$row['exam'];
					$year=$row['year'];
					$semester=$row['semester'];
					$course_code=$row['course_code'];
					$course_title=$row['course_title'];
					$credit=$row['credit'];
					$grade=$row['grade'];
					$letter=$row['letter_grade'];
				
					if($c!=$year || $cc !=$semester ||$ccc !=$exam)	
					{
		echo"<tr><th colspan='6' style='background:#144697;width:675px;font-size:26px;color:yellow' align='center'>Exam:$exam   Year:$year  Semester:$semester</th></tr>
				
					<tr>
					<th align='center'>Si</th>
					<th align='center'>Course Code</th>
					<th align='center'>Course Title</th>
					<th align='center'>Credit</th>
					<th align='center'>Grade</th>
					<th align='center'>Letter Grade</th>
					</tr>

					";}
			echo"		<tr>
					<td align='center'>$si</td>
					<td align='center'>$course_code</td>
					<td align='center'>$course_title</td>
					<td align='center'>$credit</td>
					<td align='center'>$grade</td>
					<td align='center'>$letter</td>
					
					
				";
				$c=$year;
					$cc=$semester;
					$ccc=$exam;
						
				}
					
					?>
				
			</table>
				</div>
			</div>
		</div>
		<div class="footer">
				<a href="http://www.facebook.com"><img src="images/facebook-logo.png" height="25px" width="25px"></img></a>
				<p>@copy; CSE discipline of NWU All Rights Reserved</p>
        </div>
	</body>
	</fieldset>
	<br>
</html>