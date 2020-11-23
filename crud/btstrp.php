<?php

	require_once("../crud/php/component.php");
	require_once("../crud/php/login_func.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>DLMS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_sample_css.css">
	<link rel="stylesheet" type="text/css" href="btstrp_css2.css">
	<link rel="stylesheet" type="text/css" href="error.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


	

</head>
<body>
	<div class="container mw-100 text-left" style="height: auto;">
		<div class="container pt-3 mw-100 mb-2 bg-dark rounded-bottom" style="height: 80px;">
		<h3 class="header_title text-white" style="font-family: helvlight; float: left;"><img src="sti_logo.png" class="pl-4 pr-2" style="height: 50px; width: 130px;"/> DLMS - Distance Learning Management System</h3>
		<nav style="float: right; margin-right: 20px;">
				<ul class="ul_">
					<li class="lili"><a href='http://localhost/project/crud/btstrp.php' class="a_nav text-warning">Home</a></li>
					<li class="lili"><a href='http://localhost/project/crud/about.php' class="a_nav">About</a></li>
					<li class="lili"><a href='http://localhost/project/crud/admin_login.php' class="a_nav">Admin</a></li>
					<li class="lili"><a href="#" onClick="show()"class="a_nav">Sign In</a></li>
				</ul>
			</nav>
		</div>

		<?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?></p>
		<?php } ?>

		<div class="container bg-dark mw-100 px-0 pt-2" style="height: 400px; position: relative;">
			
			<img src="bg_school_2.png" style="width: 100%; height:400px; position: absolute;">

			<p class="title_top text-white">DLMS STI Learning Model</p>
			<p class="definition_top text-white">The DLMS STI Learning Model strengthens STI's existing<br>
				blended learning mode that combines independent online<br>
				learning at home via the DLMS.</p>
			<button type="button" onClick="show()" class="btn btn-warning">Let's get started</button>

			<!-- FUNCTION FOR POP UP LOGIN DIVISION-->
			<div id="myModal" class="modal w-25 rounded" style="height: 400px; left: 37%; top: 10%; background-color: rgba(0,0,0,0.8);">
				<div class="login_con mw-100 bg-warning" style="height: 40px;">
				<i class="close fas fa-times w-7  pt-2 pr-3 text-white" onClick="close_window()" style=" height:7px;float: right;"></i></div>

				<form action='http://localhost/project/crud/php/login_func.php' method='POST'>
				<div class="login_con2 mw-10 bg-white" style="height: 360px;">
  					
  					<div class="d-flex justify-content-center ">
						<div class="container mw-100 px-0 pt-0 rounded-top" style="height: 50px; position: absolute; top: 10%; float: left;">
							<p class="footer_title text-secondary text-center pt-3" style="font-size: 25px;">Sign In</p>
						</div>

							<div class="col " style="top: 30%; width: 85%; position: absolute;">
		      					<div class="input-group mb-2">
		        						<div class="input-group-prepend">
		         							 <div class="input-group-text bg-warning"><i class="fas fa-user text-white fa-1x"></i></div>
		        						</div>
		        						<input type="text" class="form-control" name="uid" id="inlineFormInputGroup" placeholder="Student ID">
		      					</div>
	    					</div>
	    					<div class="col " style="top: 42%; width: 85%;position: absolute;">
		      					<div class="input-group mb-2">
		        						<div class="input-group-prepend">
		         							 <div class="input-group-text bg-warning"><i class="fas fa-key text-white fa-1x"></i></div>
		        						</div>
		        						<input type="password" class="form-control" name="pass" id="inlineFormInputGroup" placeholder="Password...">
		      					</div>
	    					</div>
							
						
							<!--THIS ARE THE BUTTONS FOR LOGINS-->
							<button type="submit" name="student_login" class="btn bg-warning w-75" style="position: absolute; top: 55%; left: 11.5%; font-family: helvlight;">Login as Student</button>
							<div class="container mw-100 px-0 pt-0 rounded-top" style="height: 50px; position: absolute; top: 63%;">
							<p class="footer_title text-dark text-center pt-3" style="font-size: 15px;">---------- or ----------</p>
							</div>
							<button type="submit" name="teacher_login"  class="btn bg-dark text-white w-75" style="position: absolute; top: 75%; left: 11.5%; font-family: helvlight;">Login as Teacher</button>
							<div class="footer_login_box w-75 rounded-top" style="height: 40px; position: absolute; top: 90%; background: #F0F0F0;"></div>
							
						
					</div>

  				</div>
				</form>
  			</div>
			
			<!--SCRIPT FOR LOGIN DIVISION (JAVASCRIPT)-->
			<script type="text/javascript">
				function show() {
				var div_show = document.getElementById('myModal');
					div_show.style.display = "block";
				}
			</script>
			<script type="text/javascript">
				function close_window() {
				var div_show = document.getElementById('myModal');
				div_show.style.display = "none";
				}
			</script>
			

		</div>
		<div class="container_2 mw-100 bg-warning">
		</div>

		<!--THIS ARE THE FOUR ICON BELOW WARNING DIV AND COVER PICTURE-->
			<div class="container_3 mw-100 mt-2" style="height: 180px;">
				<div class="d-flex justify-co">

				<form action="" method="post" class="w-100 py-5 px-0 mx-2">
					
					<div class="row text-center px-5">
						<div class="col ">
							<i class="fas fa-file-invoice text-warning fa-7x "></i>
						</div>
						<div class="col">
							<i class="fas fa-bullhorn text-warning fa-7x"></i>
						</div>
						<div class="col ">
							<i class="fas fa-award text-warning fa-7x"></i>
						</div>
						<div class="col">
							<i class="fas fa-sign-in-alt text-warning fa-7x"></i>
						</div>
					</div>	
				</form>
				</div>
			<div class="container mw-100 px-0 pt-2" style="height: 40px; position: relative;">
				<p class="pic_title text-dark" style="left: 7%;">Easy Access to learning modules</p>
				<p class="pic_title text-dark" style="left: 30%">Updates and Announcements</p>
				<p class="pic_title text-dark" style="left: 55%;">Awards for Accomplishments</p>
				<p class="pic_title text-dark" style="left: 80%;">Students Login Record</p>
			</div>
			<div class="container mw-100 pt-2 mb-5" style="height: 80px; position: relative;">
				<p class="pic_title text-dark text-center" style="left: 6%;">Students could access their handouts<br>
					anytime via entering students id<br> and password.</p>
				<p class="pic_title text-dark text-center" style="left: 28.5%">They will easily be notified important<br>
					announcements and activity<br>status.</p>
				<p class="pic_title text-dark text-center" style="left: 53.5%;">Teachers might give students virtual<br>
					awards by opening the handouts<br> and completing tasks.</p>
				<p class="pic_title text-dark text-center" style="left: 77.5%;">Every login of students, it will be<br>
				counterd to the virtual login record.</p>
			</div>

			<!--This is the footer of the home page-->
			<div class="container mw-100 px-0 pt-2" style="height: 150px; position: relative; background: #F0F0F0;">
			<p class="footer_title text-dark text-center" style="font-size: 25px;">LEARN MORE ABOUT<br>OUR WEBSITE</p>
			<button type="button" onClick="location.href='http://localhost/project/crud/about.php'" class="btn btn-warning text-white text-center"  style="height: 30px; width: 100px; font-size: 12px; position: absolute; top: 65%; left: 46%;">Get Started<i class="fas fa-sign-in-alt text-white fa-1x"></i></button>

			</div>
			<div class="container bg-dark mb-2 mw-100 px-0 pt-2 " style="height: 350px; position: relative; ">
				<img src="sti_logo.png" style="height: 40px; width: 85px; position: absolute; top: 20%; left: 7%;"/>
				<p class="main_web_link text-warning">sticaloocan.edu.ph</p>
				<i class="fas fa-phone-alt text-white fa-1x" style="top: 50%; left: 7%; position: absolute;"></i>
				<p class="footer_text text-white" style="top: 50%; left: 9%;">9128 790 234</p>
				<p class="footer_text text-white" style="top: 56%; left: 9%;">9873 465 129</p>
				<p class="footer_text text-white" style="top: 61%; left: 9%;">(+632) 294-4001</p>

				<i class="fas fa-location-arrow text-white fa-1x" style="top: 70%; left: 7%; position: absolute;"></i>
				<p class="footer_text text-white text-left" style="top: 69%; left: 9%;">STI Academic Center - Caloocan<br>109 Samson Road corner Caimito Street<br>Caloocan City 1400</p>

				<p class="footer_text_title text-warning text-left" style="top: 20%; left: 35%;">COMPANY</p>
				<a href="#" class="footer_company_text text-white" style="top: 26%; left: 35%;">Home</a>
				<a href='http://localhost/project/crud/about.php' class="footer_company_text text-white" style="top: 31%; left: 35%;">About</a>
				<a href='http://localhost/project/crud/admin_login.php' class="footer_company_text text-white" style="top: 36%; left: 35%;">Admin</a>
				<a href="#" onClick="show()" class="footer_company_text text-white" style="top: 41%; left: 35%;">Sign In</a>

				<p class="footer_text_title text-warning text-left" style="top: 20%; left: 55%;">FEATURES</p>
				<a href="#" class="footer_company_text text-white" style="top: 26%; left: 55%;">Course Module</a>
				<a href="#" class="footer_company_text text-white" style="top: 31%; left: 55%;">Assessment Module</a>
				<a href="#" class="footer_company_text text-white" style="top: 36%; left: 55%;">Summary Module</a>
				
				<p class="footer_text_title text-warning text-left" style="top: 20%; left: 75%;">GET IN TOUCH</p>
				<i class="fab fa-facebook-square text-white fa-1x" style="top: 27%; left: 75%; position: absolute;"></i>
				<p class="footer_text text-white text-left" style="top: 27%; left: 77%;">Facebook</p>
				<i class="fas fa-envelope text-white fa-1x" style="top: 33%; left: 75%; position: absolute;"></i>
				<p class="footer_text text-white text-left" style="top: 33%; left: 77%;">Gmail</p>
			</div>
			<div class="container mw-100 px-0 pt-0 bg-warning mb-3 rounded-top" style="height: 50px; position: relative;">
			<p class="footer_title text-dark text-center pt-3" style="font-size: 15px;"><i class="far fa-copyright text-dark fa-1x"></i> 2020 sti.edu - All rights reserved</p>

			</div>
		
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	

</body>
</html>

<!--
		<div class="d-flex justify-content-center">
			<form action="" method="post" class="w-50">
				<div class="py-2">
					<?php inputElement("<i class='fas fa-id-card'></i>","ID","id",""); ?>
				</div>
				<div class=center
					<?php inputElement("<i class='fas fa-user'></i>","Username","username",""); ?>
				</div>
				<div class="row pt-2">
					<div class="col">
						<?php inputElement("<i class='fas fa-flag'></i>","Country","country",""); ?>
					</div>
					<div class="col">
						<?php inputElement("<i class='fas fa-sort-amount-up'></i>","Rate","rate",""); ?>
					</div>
				</div>
			</form>
		</div> -->