<?php require("../crud/php/add_Course_func.php"); ?>

<?php

include "../crud/php/teacher_connection.php";

	if(isset($_GET['id']))
	{
		$teacher_id = mysqli_real_escape_string($connect, $_GET['id']);

		$teacher_query = "SELECT * FROM teachers_list WHERE teacher_number='$teacher_id'";
		$teacher_result = mysqli_query($connect, $teacher_query) or die(mysqli_error($connect));
		if(mysqli_num_rows($teacher_result))
		{
			while($row = mysqli_fetch_array($teacher_result))
			{
				$fname = $row["teacher_fname"];
				$lname = $row["teacher_lname"];
			}
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>DLMS - Teachers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="students.css">
	<link rel="stylesheet" type="text/css" href="btstrp_css2.css">
	<link rel="stylesheet" type="text/css" href="error.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<style type="text/css">
		.form-input
		{
			position: relative;
			top:70%;
			left:10%;
		}
		.form-input input
		{
			display: none;

		}
		.form-input label
		{
			 display: block;
			 width: 28.3%;
			 height: 30px;
			 line-height: 28px;
			 text-align: center;
			 background: #333;
			 color:#fff;
			 font-size: 13px;
			 font-family: helvlight;
			 border-radius: 5px;
			 cursor: pointer;

		}
	</style>
</head>
<body>
	<div class="container mw-100 text-left" style="height: auto;">
		<!--This is the flex box for modules-->
		<div class="container pt-3 mw-100 mb-2 bg-dark rounded-bottom" style="height: 80px;">
		<h3 class="header_title text-white" style="font-family: helvlight; float: left;"><img src="sti_logo.png" class="pl-4 pr-2" style="height: 50px; width: 130px;"/> DLMS - Distance Learning Management System</h3>
		</div>
		<div class="top_stripe bg-warning mw-10" style="height:10px; position: relative;"></div>
		<div class="body bg-dark mw-100 mt-2" style="height:70px; position: relative;">
			<nav style="float: left; margin-right: 20px;">
				<ul class="ul_" style="margin-top: 2%;">
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teachers.php?id={$teacher_id}' class='a_nav text-warning'>Modules</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_announcements.php?id={$teacher_id}' class='a_nav'>Announcements</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_awards.php?id={$teacher_id}' class='a_nav'>Awards</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_logs.php?id={$teacher_id}' class='a_nav'>Students Summary</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teachers_summary.php?id={$teacher_id}' class='a_nav'>View Logs</a>"?></li>
				</ul>
			</nav>
			<nav style="float: right; margin-right: 20px;">
				<ul class="ul_">
					<li class="lili"><a href="#" class="a_nav"><?php echo $fname." ".$lname; ?></a></li>
					<li class="lili"><a class="nav-link text-warning dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt text-light fa-2x"></i></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">View Profile</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/php/logout.php'>Log out</a>
				    </li>
					
				</ul>
			</nav>
		</div>

		<?php if(isset($_GET['msg'])) { 
			
			$msg = $_GET['msg'];
			$decode_msg = base64_decode($msg);
			?>
			<p id="msg" class="error"> <?php echo $decode_msg; ?></p>
		<?php } ?>

			
	<div class="d-flex align-content-start flex-wrap w-100" style="height:auto; padding: 10px;">
		<div class="d-flex align-content-start flex-wrap w-75 ml-0" style="height: auto; padding: 10px;">
			<!--This is the first frame for course-->
			<div class="courses_frame bg-light m-2 rounded" style="height: 430px; width: 300px;  position: relative; ">
				
				<img src="add_photo.png" class="add_photo"  style="height: 235px; width: 100%; position: absolute;"/>

				<div class="frame bg-dark" style="height: 200px; width: 100%; margin-top: 78%;margin-bottom: 0px; position: absolute; padding: 2%;">
					<p style="position: absolute; font-family: helvlight; font-size: 18px; color:white;">Name</p>
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 17%;">Course Code and Class Section</p>
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%;">Date of start and end of lesson</p>
					<!--This is the label for date-->
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%; padding-left: 15%;"></p>
					<button type="button" onClick="add_course()" class="btn btn-warning w-100" style="height: 35px; font-size: 15px; margin-top: 45%;">Add Course</button>
				</div>
			</div>


			<?php 
				$mysqli = new mysqli('localhost', 'root', '', 'course') or die(mysqli_error($mysqli));
				$result = $mysqli->query('SELECT ImageName, SubjectName, SubjectCode, StartSchedule, EndSchedule FROM add_course');
		
				function pre($array)
				{
					echo '<pre>';
					print_r($array);
					echo '</pre>';
					
				}	
			?>

			<!-- FETCH ALL DATA FROM ADD COURSE TABLE -->
			<?php while ($row = $result->fetch_assoc()): ?>

			<!--DELETE THIS BECAUSE THIS IS TEMPORARY-->
			<div class="courses_frame bg-light m-2 rounded" style="height: 430px; width: 300px;  position: relative; ">
				
				<img <?php echo "src='course_img/".$row['ImageName']."'" ?> class="add_photo"  style="height: 235px; width: 100%; position: absolute;"/>

				<div class="frame bg-dark" style="height: 200px; width: 100%; margin-top: 78%;margin-bottom: 0px; position: absolute; padding: 2%;">
					<p style="position: absolute; font-family: helvlight; font-size: 18px; color:white;"><?php echo $row['SubjectName']; ?></p>
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 17%;"><?php echo $row['SubjectCode']; ?></p>
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%;"><?php echo "When: ".' '. date("M j", strtotime($row['StartSchedule'])).' '. "-"; ?>
                    		<?php echo date("M j, Y", strtotime($row['EndSchedule'])); ?></p>
					<!--This is the label for date-->
					<p style="position: absolute; font-family: helvlight; font-size: 15px; color:#ECECEA; margin-top: 25%; padding-left: 15%;"></p>
					<?php echo"<a href= 'http://localhost/project/crud/teacher_handouts_seatworks.php?id={$teacher_id}' <button type='button' class='btn btn-warning w-100' style='height: 35px; font-size: 15px; margin-top: 45%;'>View</button></a>"?>
				</div>
			</div>
			<!--END OF TEMPORARY FRAME/COURSE-->

			<?php endwhile; ?>


		</div>
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

	


		<div id="add_courses" class="modal w-50" style="height: 400px; top: 20%; left: 23%; display: none; border: 4px solid; border-color:#dc3545;  border-radius: 10px;">
				<div class="add_courses_con mw-100 bg-danger" style="height: 40px;">
				<i class="close fas fa-times w-7  pt-2 pr-3 text-white" onClick="close_window()" style=" height:7px;float: right;"></i></div>
				
				
				<div id = "content">
					<form method="POST" action="" enctype="multipart/form-data">

				<div class="add_courses_con w-100 bg-white rounded-bottom" style="height: 360px; position: relative; ">
					<img src="add_photo.png" class="add_photo" id="modal-file-ip-1-preview" style="height: 200px; width: 210px; position: absolute; top: 10%; border:2px solid; border-color: #dc3545; left: 10%;"/>
					<div class="form-input">
						<label for="file-ip-1">Upload Photo</label>
						<input type="file" name="image" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
						
					</div>
					<!--This is the script for getting picture from file and preview image-->
						<script type="text/javascript">
							function showPreview(event)
							{
								if(event.target.files.length > 0)
								{
									var src = URL.createObjectURL(event.target.files[0]);
									var preview = document.getElementById("modal-file-ip-1-preview");
									preview.src = src;
									preview.style.display = "block";
								}
							}
						</script>


					<!--This is for entering few details for modules-->
					<div class="col-auto w-50" style=" left:45%; ">
	      					<div class="input-group mb-2">
	        						<div class="input-group-prepend">
	         							 <div class="input-group-text bg-success"><i class="fas fa-file text-white fa-1x"></i></div>
	        						</div>
	        						<input type="text" name="SubjectName" class="form-control" id="inlineFormInputGroup" placeholder="Module Name">
	      					</div>
	    			</div>
	    			
	    			<div class="col-auto w-50" style=" left:45%;">
	      				
	      					<div class="input-group mb-2">
	        						<div class="input-group-prepend">
	         							 <div class="input-group-text bg-primary"><i class="fas fa-clone text-white fa-1x"></i></div>
	        						</div>
	        						<input type="text" class="form-control" name="SubjectCode" id="inlineFormInputGroup" placeholder="Course Code and Class Section">
	      					</div>
	    			</div>
	    			<div class="w-50 pr-4"style="top: 33%; left: 47%; position: absolute;">
							<label for="SY" style="font-size: 13px; font-family: helvlight; ">From:</label>
							<input type="date" id="StartSchedule" name="StartSchedule" class="form-control w-100">
							<label for="SY" style="font-size: 13px; font-family: helvlight; ">To:</label>
							<input type="date" id="EndSchedule" name="EndSchedule" class="form-control w-100 mt-0">
					</div>

	    			<button type="submit" name="btn_upload" onClick="validate()" class="btn btn-success text-white text-center" style="height: 30px; width: 46%; font-size: 12px; position: absolute; top: 75%; left: 47%;"><i class="fas fa-plus text-white fa-1x"></i> Add Course</button>

					<div class="footer_login_box d-flex w-75 rounded-top" style="height: 50px; position: absolute; top: 85%; left:13%; background: #F0F0F0;">
						
					</div>
				</div>
					</form>
				</div>

				<!--SCRIPT FOR  ADD COURSE DIVISION (JAVASCRIPT)-->
				<script type="text/javascript">
					function add_course() {
					var div_show = document.getElementById('add_courses');
						div_show.style.display = "block";
					}
				</script>
				<script type="text/javascript">
					function close_window() {
					var div_show = document.getElementById('add_courses');
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