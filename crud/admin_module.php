<!DOCTYPE html>
<html>
<head>
	<title>DLMS - Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="students.css">
	<link rel="stylesheet" type="text/css" href="btstrp_css2.css">


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
			 width: 32%;
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
					<li class="lili"><a class="nav-link text-white dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href='http://localhost/project/crud/admin_main.php'>Admin</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/admin_ac_teacher.php'>Teacher</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/admin_ac_reg_students.php'>Regular Students</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/admin_ac_irreg_students.php'>Irregular Students</a>
				    </li>
					<li class="lili"><a href="#" class="a_nav text-warning">Modules</a></li>
				</ul>
			</nav>
			<nav style="float: right; margin-right: 20px;">
				<ul class="ul_">
					<li class="lili"><a href="#" class="a_nav">John Cyrus Guevarra</a></li>
					<li class="lili"><a class="nav-link text-warning dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt text-light fa-2x"></i></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">View Profile</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/btstrp.php'>Log out</a>
				    </li>
					
				</ul>
			</nav>
		</div>

		<div class="container w-100 bg-light mt-4" style="height:auto; padding: 10px; position: relative;">
			<div class="body  mw-100 mt-2" style="height:auto; position: relative;">
				<h2 class="text-dark ml-4" style="top: 3%; font-family: helvlight;">Lists of Courses
				</h2>

				<div class="col" style="width:50%;">
	      			<div class="input-group ml-2">
	        			<input class="form-control mr-sm-2" type="search" placeholder="Enter Subject Code and Section..." aria-label="Search">
    					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
	      			</div>
	    		</div>


				<div class="body_1 w-100 mt-3" style="height: auto; background: #F0F0F0;position: relative;">
				<table class="table table-striped table-dark text-center">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Course Name</th>
				      <th scope="col">Teacher Name</th>
				      <th scope="col">Code and Section</th>
				      <th scope="col">Date Started</th>
				      <th scope="col">Date Ended</th>
				      <th scope="col">View</th>
				      <th scope="col">Edit</th>
				      <th scope="col">Delete</th>
				    </tr>

				    <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Application Development</td>
				      <td>Trisha April R. Trias</td>
				      <td>01010C - CS 501</td>
				      <td>T01-01-2020</td>
				      <td>05-01-2020</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-arrow-right"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				    </tr>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mobile Application</td>
				      <td>Trisha April R. Trias</td>
				      <td>02020C - CS 501</td>
				      <td>T01-01-2020</td>
				      <td>05-01-2020</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-arrow-right"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				    </tr>
				  

					</tbody>
				  </thead>
				</table>
			</div>
			</div>
		</div>


	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	

</body>
</html>