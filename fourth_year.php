<?php
	//header('location:project.php');
?>

<html>
	<head>
		<link href="project.css" rel="stylesheet" type="text/css"></link>
			<script src="project.js" type="text/javascript"></script>
		<title>courses of fourth year</title>
	</head>
	<body onload="startTime()">
		<div id="txt"></div>
		<div class="main">
			<div class="banner">
					<div class="banner_text">
						<h2>Computer Science and Engineering(CSE)</h2>
						<h6>Department of North Western University,Khulna</h6>
					</div>
					<a href="fourth_year.php"><img src="images/NWU.jpg" alt=""></img></a>
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
								<li><a href="library_office.php" target="">Library Office</a></li>
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
						<li><a href="facility.php">Facilities</a></li>
						<li><a href="lab.php">Lab</a></li>
						<li><a href="fees.php">Fees</a></li>
						<li><a href="mission.php">Mission</a></li>
						<li><a href="objective.php">Objectives</a></li>
						<li><a href="management.php">Management</a></li>
						<li><a href="scholarship_waiver.php">Tuition Weaver</a></li>
						<li><a href="scholarship_waiver.php">Scholarship</a></li>
						<li><a href="admission_notice.php">Download Form</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="project.php">Home</a></li>
					</ul>
				</div>
				<div class="right_side">
					<h2>All Courses For Fourth Year Students is Here...!!!</h2>
					<br>
					<h3><a href="fourth_year.php?fourth_year_first_semester=Fourth Year First Semester">Fourth Year First Semester</a></h3>
					<br>
					<h3><a href="fourth_year.php?fourth_year_second_semester=Fourth Year Second Semester">Fourth Year Second Semester</a><h3>
					<br>
					<h3><a href="fourth_year.php?fourth_year_third_semester=Fourth Year Third Semester">Fourth Year Third Semester</a><h3>
					<br>
					
					<?php
						include("includes/db1.php");
						
						if(isset($_GET['fourth_year_first_semester']))
						{
							
					?>
					<table width="680" align="center" border="2">
						<tr>
							<td bgcolor="aqua" colspan="6" align="center"><h3>All courses for fourth year first semester is here...!!!</h3></td>
						</tr>
						<tr align="center">
							<th>Serial No.</th>
							<th>Subject Code</th>
							<th>Subject Title</th>
							<th>Credit</th>
						</tr>
						<tr>
								<?php
									$subject = $_GET['fourth_year_first_semester'];
									
									$query = "select *from 4th_year_1st_semester";
									
									$run = mysqli_query($con,$query);
									
									while($row = mysqli_fetch_array($run))
									{
										$Serial_No = $row['Serial_No'];
										$subject_code = $row[1];
										$subject_title = $row[2];
										$credit = $row[3];
								?>
							<td align="center"><?php echo $Serial_No; ?></td>
							<td align="center"><?php echo $subject_code; ?></td>
							<td align="center"><?php echo $subject_title; ?></td>
							<td align="center"><?php echo $credit; ?></td>
						</tr>
						<?php } }?>
					</table>
					<?php
						//include("includes/db1.php");
						
						if(isset($_GET['fourth_year_second_semester']))
						{
							
					?>
					<table width="680" align="center" border="2">
						<tr>
							<td bgcolor="aqua" colspan="6" align="center"><h3>All courses for fourth year second semester is here...!!!</h3></td>
						</tr>
						<tr align="center">
							<th>Serial No.</th>
							<th>Subject Code</th>
							<th>Subject Title</th>
							<th>Credit</th>
						</tr>
						<tr>
								<?php
									$subject1 = $_GET['fourth_year_second_semester'];
									
									$query1 = "select *from 4th_year_2nd_semester";
									
									$run1 = mysqli_query($con,$query1);
									
									while($row1 = mysqli_fetch_array($run1))
									{
										$Serial_No1 = $row1['Serial_No'];
										$subject_code1 = $row1[1];
										$subject_title1 = $row1[2];
										$credit1 = $row1[3];
								?>
							<td align="center"><?php echo $Serial_No1; ?></td>
							<td align="center"><?php echo $subject_code1; ?></td>
							<td align="center"><?php echo $subject_title1; ?></td>
							<td align="center"><?php echo $credit1; ?></td>
						</tr>
						<?php } }?>
					</table>
					<?php
						//include("includes/db1.php");
						
						if(isset($_GET['fourth_year_third_semester']))
						{
							
					?>
					<table width="680" align="center" border="2">
						<tr>
							<td bgcolor="aqua" colspan="6" align="center"><h3>All courses for fourth year third semester is here...!!!</h3></td>
						</tr>
						<tr align="center">
							<th>Serial No.</th>
							<th>Subject Code</th>
							<th>Subject Title</th>
							<th>Credit</th>
						</tr>
						<tr>
								<?php
									$subject2 = $_GET['fourth_year_third_semester'];
									
									$query2 = "select *from 4th_year_3rd_semester";
									
									$run2 = mysqli_query($con,$query2);
									
									while($row2 = mysqli_fetch_array($run2))
									{
										$Serial_No2 = $row2['Serial_No'];
										$subject_code2 = $row2[1];
										$subject_title2 = $row2[2];
										$credit2 = $row2[3];
								?>
							<td align="center"><?php echo $Serial_No2; ?></td>
							<td align="center"><?php echo $subject_code2; ?></td>
							<td align="center"><?php echo $subject_title2; ?></td>
							<td align="center"><?php echo $credit2; ?></td>
						</tr>
						<?php } }?>
					</table>
				</div>
			</div>
		</div>
		<div class="footer">
				<a href="http://www.facebook.com"><img src="images/facebook-logo.png" height="25px" width="25px"></img></a>
				<p>@copy; CSE discipline of NWU All Rights Reserved</p>
        </div>
	</body>
</html>