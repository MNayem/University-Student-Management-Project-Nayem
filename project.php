<!DOCTYPE html>
<?php 
	session_start();
?>

<html>
	<head>
		<title>welcome to our project</title>
		<link href="project.css" rel="stylesheet" type="text/css"></link>
		<script src="project.js" type="text/javascript"></script>
	</head>
	<body onload="startTime()" onload="slideA()">
		<div id="txt"></div>
		<div class="main">
			<div class="banner">
					<div class="banner_text">
						<h2>Computer Science and Engineering(CSE)</h2>
						<h6>Department of North Western University,Khulna</h6>
					</div>
					<a href="project.php"><img src="images/NWU.jpg" alt=""></img></a>
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
			<div id="container">
				<img src="images/img1.jpg" id="image" alt=""/>
				<div id="left_holder"><img onclick="slide(-1)" class="left" src="images/arrow left.png" alt=""></img></div>
				<div id="right_holder"><img onclick="slide(1)" class="right" src="images/arrow right.png" alt=""></img></div>
			</div>
			<div class="mrqe">
				<div class="b_news">
					<h2>Breaking News :</h2>
 				</div>
				<div class="nav1">
					<ul class="adds">
						<marquee><h3><font color="black">CSE Discipline of NWU..... Admission Notice of sum'16 has been published soon......</font></h3></marquee>
							<br /><br />
					</ul>
				</li>
				</div>
			</div>
			<div class="main_area">
				<div class="left_area">
					<div class="first_left_area">
						<h2>Where We Are</h2>
						<ul>
							<li><a href="maps.php">Maps/Direction</a></li>
							<li><a href="campus.php">Our Campus</a></li>
							<li><a href="research.php">Research</a></li>
							<li><a href="other_campus.php">Other Campus of  NWU</a></li>
						</ul>
					</div>
				</div>
				<div class="middle_area">
					<h2>Academics</h2>
					<ul>
						<li><a href="admission_notice.php">Admission Info.</a></li>
						<li><a href="about.php">About CSE</a></li>
						<li><a href="Nwu_reg.php">Registration process</a></li>
						<li><a href="academic_calender.php">Academic Calender</a></li>
					</ul>
				</div>
				<div class="login">
					<h2>Academic System</h2>
                       <form action="project.php" method="post">
							<table width="320" align="center" border="5">
								<tr>
									<th align="right">User Name:</th>
									<td><input type="text" name="admin_name" placeholder="User Name"></td>
								</tr>
								<tr>
									<th align="right">User ID:</th>
									<td><input type="password" name="admin_pass" placeholder="User ID"></td>
								</tr>
								<tr>
									<td colspan="6" align="center"><input type="submit" name="submit" value="Login"></td>
								</tr>
							</table>
						</form>
						
					   <?php
							include("includes/db1.php");
	
							if(isset($_POST['submit']))
							{
								$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
								$admin_pass = $_SESSION['admin_pass'] = $_POST['admin_pass'];
		
								$query = "select *from user where user_name = '$admin_name' and user_pass = '$admin_pass'";
								$run = mysqli_query($con,$query);
		
								if(mysqli_num_rows($run) == 1)
								{
									echo "<script>window.open('student_page.php','_self')</script>";
								}
							else
								{
									echo "<script>alert('User Name or Password is incorrect...!!!')</script>";
								}
							}
					   ?>
				</div>
			</div>
			<div class="maincontent">
				<div class="content">
					<h2>News and Events</h2>
					<ul>
						<li>
							<p>Programming Contest</p>
								<p>May 5,2016</p>
									<a href="programming.php">Programming Contest of NWU</a>
								<div class="prog_img">
									<img src="images/programming1.jpg" height="100px" width="660px" alt=""></img>
								</div>
						</li>
						<li>
							<p>EATL seminar</p>
								<p>July 25,2016</p>
									<a href="EATL.php">EATL prothom-alo apps seminar</a>
								<div class="EATL_img">
									<img src="images/slider5.jpg" height="100px" width="660px" alt=""></img>
								</div>
						</li>
						<li>
							<p>CSE annual cricket tournament </p>
								<p>March 10,2016</p>
									<a href="cricket.php">Annual Cricket Tournament</a>
								<div class="cricket_img">
									<img src="images/cricket.jpg" height="100px" width="660px" alt=""></img>
								</div>
						</li>
						<li>
							<p>CSE annual football tournament</p>
								<p>January 5,2016</p>
									<a href="football.php">Annual football tournament</a>
								<div class="prog_img">
									<img src="images/football.jpg" height="100px" width="660px" alt=""></img>
								</div>
						</li>
					</ul>
				</div>
				<div class="sidebar">
					<h2>Notice Board</h2>
						<ul>
							<li><a href="dateline.php">course registration dateline for summer'16</a></li>
							<li><a href="vacancy.php">vacancy announcement</a></li>
							<li><a href="verification.php">online verification data entry form</a></li>
							<li><a href="mission.php">mission of CSE</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="campus_life.php">NWU campus life for CSE</a></li>
							<li><a href="admission_notice.php">admission forms are available at the admission office</a></li>
						</ul>
						<p><a href="view_all.php">***view all notice</a></p>
				</div>
			</div>
		</div>
		<div class="footer">
				<a href="http://www.facebook.com"><img src="images/facebook-logo.png" height="25px" width="25px"></img></a>
				<p>@copy; CSE discipline of NWU All Rights Reserved</p>
        </div>
	</body>
</html>