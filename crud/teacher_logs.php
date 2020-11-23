<?php
session_start();
include "../crud/php/teacher_connection.php";
include "../crud/php/teacher_logs_connection.php";

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


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

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
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teachers.php?id={$teacher_id}' class='a_nav'>Modules</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_announcements.php?id={$teacher_id}' class='a_nav'>Announcements</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_awards.php?id={$teacher_id}' class='a_nav'>Awards</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_logs.php?id={$teacher_id}' class='a_nav text-warning'>Students Summary</a>"?></li>
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

			<div class="body  mw-100 mt-2" style="height:75px; position: relative;">
				<h2 class="text-dark ml-0" style=" font-family: helvlight; left: 1%; position: absolute;">List of Students
				</h2>
				<div class="col ml-0" style="width:30%; position: absolute; top: 60%;">
	      			<div class="input-group mb- mw2">
	        			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
	      			</div>
	    		</div>
			</div>
			
			<div class="body_1 mw-75 mt-3" style="height: 500px; background: #F0F0F0;position: relative;">
				<table class="table table-striped table-dark">
				  <thead>
				    <tr>
					  <th scope="col">Students Number</th>
				      <th scope="col">Students Name</th>
				      <th scope="col">Section</th>
				      <th scope="col">Course</th>
				      <th scope="col">Select</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">IS01-012020</th>
				      <td>Ismael Bayor</td>
				      <td>CS501</td>
				      <td>Computer Science</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-chevron-circle-right"></i></button></td>
				      
				    </tr>
				    <tr>
				      <th scope="row">RS01-012020</th>
				      <td>Jhon Paul Riopay</td>
				      <td>CS501</td>
				      <td>Computer Science</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-chevron-circle-right"></i></button></td>
				    </tr>
				  </tbody>
				</table>
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