<?php include "../crud/php/add_Course_func.php";

$result = $conn->query('SELECT ImageName, SubjectName, SubjectCode, StartSchedule, EndSchedule FROM add_course');

function pre($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	
}	

?>


<?php
include "../crud/php/student_connection.php";

	if(isset($_GET['id']))
	{
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$student_query = "SELECT * FROM students_list WHERE student_number='$id'";
		$student_result = mysqli_query($conn, $student_query) or die(mysqli_error($conn));
		if(mysqli_num_rows($student_result))
		{
			while($row = mysqli_fetch_array($student_result))
			{
				$fname = $row["student_fname"];
				$lname = $row["student_lname"];
			}
		}


?>


<!DOCTYPE html>
<html>
<head>
	<title>DLMS - Students</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="students.css">
	<link rel="stylesheet" type="text/css" href="btstrp_css2.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body>
	<div class="container mw-100 text-left" style="height: auto;">
		<!--This is the flex box for modules-->
		<div class="container pt-3  mw-100 mb-2 bg-dark rounded-bottom" style="height: 80px; ">
		<h3 class="header_title text-white" style="font-family: helvlight; float: left;"><img src="sti_logo.png" class="pl-4 pr-2" style="height: 50px; width: 130px;"/> DLMS - Distance Learning Management System</h3>
		</div>
		<div class="top_stripe bg-warning mw-10" style="height:10px; position: relative;"></div>
		<div class="body bg-dark mw-100 mt-2" style="height:70px; position: relative;">
			<nav style="float: left; margin-right: 20px;">
				<ul class="ul_" style="margin-top: 2%;">
					<li class="lili"><?php echo"<a href='http://localhost/project/crud/students.php?id={$id}' class='a_nav text-warning'>Modules</a>"?></li>
					<li class="lili"><?php echo"<a href='http://localhost/project/crud/announcements.php?id={$id}' class='a_nav'>Announcements</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/awards.php?id={$id}' class='a_nav'>Awards</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/logs_record.php?id={$id}' class='a_nav'>View Logs</a>"?></li>
				</ul>
			</nav>
			<nav style="float: right; margin-right: 20px;">
				<ul class="ul_">
					<li class="lili"><a href="#" class="a_nav"> <?php echo $fname." ".$lname; ?></a></li>
					<li class="lili"><a class="nav-link text-warning dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt text-light fa-2x"></i></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">View Profile</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/php/logout.php'>Log out</a>
				    </li>
					
				</ul>
			</nav>
		</div>

		<!--START - MODILES - DFLEX-->
		<div class="d-flex align-content-start flex-wrap w-100" style="height:auto; padding: 10px;">
			<div class="d-flex align-content-start flex-wrap w-75 ml-0" style="height: auto; ">
				
				<!-- DISPLAY COLLECTED DATA -->
				<?php while ($row = $result->fetch_assoc()): ?>
				
				<!--This is the first frame for course-->
				<div class="courses_frame m-2" style="height: 430px; width: 300px;  position: relative;">
				<img <?php echo "src='course_img/".$row['ImageName']."'" ?> class="class_cov" style="height: 250px; width: 100%; position: absolute;">
					<div class="frame bg-dark" style="height: 200px; width: 100%; margin-top: 78%;margin-bottom: 0px; position: absolute; padding: 2%;">
						<p style="position: absolute; font-family: helvlight; font-size: 13; color:white;"><?php echo $row['SubjectName']; ?></p>
						<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 17%;"><?php echo $row['SubjectCode']; ?></p>
						<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%;"><?php echo "When: ".' '. date("M j", strtotime($row['StartSchedule'])).' '. "-"; ?>
                    		<?php echo date("M j, Y", strtotime($row['EndSchedule'])); ?></p>
							<?php echo"<a href= 'http://localhost/project/crud/student_handouts_seatworks.php?id={$id}' <button type='button' class='btn btn-warning w-100' style='height: 35px; font-size: 15px; margin-top: 38%;'>Start</button></a>"?>
						<div class="progress" style="margin-top: 4%;">
					    	<div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
				
				<!--This is the second  frame for course-->
				<div class="courses_frame m-2" style="height: 430px; width: 300px;  position: relative;">
					<img src="cover1.jpg" class="class_cov" style="height: 250px; width: 100%; position: absolute;">
					<div class="frame bg-dark" style="height: 200px; width: 100%; margin-top: 78%;margin-bottom: 0px; position: absolute; padding: 2%;">
						<p style="position: absolute; font-family: helvlight; font-size: 13; color:white;">Application Development and<br>
						Emerging Technologies - SY2020-1T</p>
						<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 17%;">CITE1008 - CS501</p>
						<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%;">When:</p>
						<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%; padding-left: 15%;">Sep 07 - Jan 21, 2021</p>
						<button type="button"  onClick="location.href='http://localhost/project/crud/student_handouts_seatworks.php'" class="btn btn-warning w-100" style="height: 35px; font-size: 15px; margin-top: 38%;">Start</button>
						<div class="progress" style="margin-top: 4%;">
					    	<div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
					</div>
				</div>
			</div>
			<!--END - HANDOUTS - DFLEX-->


			<div class="d-flex align-content-start flex-wrap w-25" style="height: auto; position: relative; ">
			
		
			<div class="container rounded bg-light" style="height: 200px; width: 100%;margin-top: 5%; position: relative; border: 2px solid; border-color:#ffc109;">
				<div class="announcements_box w-75 rounded-top bg-warning" style="height: 40px; position: absolute; top: 90%; left: 12%;">
					<p class="label text-dark text-center " style="font-size: 25px;">Announcements</p>
				</div>
			</div>
			<div class="container rounded bg-light" style="height: 200px; width: 100%;margin-top: 10%; position: relative; border: 2px solid; border-color:#ffc109;">
				<div class="announcements_box w-75 rounded-top bg-warning" style="height: 40px; position: absolute; top: 90%; left: 12%;">
					<p class="label text-dark text-center " style="font-size: 25px;">Seatworks</p>
				</div>
			</div>
			<div class="container rounded bg-light" style="height: 200px; width: 100%;margin-top: 10%; position: relative; border: 2px solid; border-color:#ffc109;">
				<div class="announcements_box w-75 rounded-top bg-warning" style="height: 40px; position: absolute; top: 90%; left: 12%;">
					<p class="label text-dark text-center " style="font-size: 25px;">Awards</p>
				</div>
			</div>
		
		</div>
		</div>
		<!--End-->

		<!--Pop up for handouts-->
		<div id="start_to_view" class="modal w-50" style="height: 400px; top: 20%; left: 23%; display: none; border: 4px solid; border-color:#007bff;  border-radius: 10px;">
				<div class="add_courses_con mw-100 bg-primary" style="height: 40px;">
				<i class="close fas fa-times w-7  pt-2 pr-3 text-white" onClick="close_window()" style=" height:7px;float: right;"></i></div>
				<div class="add_courses_con w-100 bg-white rounded-bottom" style="height: 360px; position: relative; ">
					
					
					<div class="footer_login_box d-flex w-75 rounded-top" style="height: 50px; position: absolute; top: 85%; left:13%; background: #F0F0F0;">
						
					</div>
				</div>

		</div>

				<!--SCRIPT FOR LOGIN DIVISION (JAVASCRIPT)-->
				<script type="text/javascript">
					function view_handouts() {
					var div_show = document.getElementById('start_to_view');
						div_show.style.display = "block";
					}
				</script>
				<script type="text/javascript">
					function close_window() {
					var div_show = document.getElementById('start_to_view');
					div_show.style.display = "none";
					}
				</script>
		</div>
		
</div>
		
	
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<?php

	}
	else
	{
		header("Location: btstrp.php?login=something went wrong");
		exit();
	}

?>