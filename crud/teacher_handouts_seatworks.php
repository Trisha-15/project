<?php include '../crud/php/upload_PDF_Logic.php'; ?>

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
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teachers.php?id={$teacher_id}' class='a_nav text-warning'>Modules</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_announcements.php?id={$teacher_id}' class='a_nav'>Announcements</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_awards.php?id={$teacher_id}' class='a_nav'>Awards</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teacher_logs.php?id={$teacher_id}' class='a_nav'>Students Summary</a>"?></li>
					<li class="lili"><?php echo "<a href='http://localhost/project/crud/teachers_summary.php?id={$teacher_id}' class='a_nav'>View Logs</a>"?></li>
				</ul>
			</nav>
			<nav style="float: right; margin-right: 20px;">
				<ul class="ul_">
					<li class="lili"><a href="#" class="a_nav">Trisha April R. Trias</a></li>
					<li class="lili"><a class="nav-link text-warning dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt text-light fa-2x"></i></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">View Profile</a>
				          <a class="dropdown-item" href='http://localhost/project/crud/php/logout.php'>Log out</a>
				    </li>
					
				</ul>
			</nav>
		</div>
		<!--BODY OF THE PAGE-->

		<?php if(isset($_GET['msg'])) { 
			
			$msg = $_GET['msg'];
			$decode_msg = base64_decode($msg);
			?>
			<p id="msg" class="error"> <?php echo $decode_msg; ?></p>
		<?php } ?>

		<!--START OF CODES - ADDING HANDOUTS-->
		<div class="container w-100 bg-light mt-4" style="height:auto; padding: 10px; position: relative;">
			<div class="body  mw-100 mt-2" style="height:auto; position: relative;">
				<h2 class="text-dark ml-4" style="top: 3%; font-family: helvlight;">Add Handouts
				</h2>

				<!--START OF CODES - UPLOADING HANDOUTS-->
				
				<div class="input-group ml-4" style="width: 96%;">
				  <div class="custom-file">
				    <input type="file" name="myfiles" class="custom-file-input" id="inputGroupFile01"
				      aria-describedby="inputGroupFileAddon01">
				    <label id="lbl" class="custom-file-label text-secondary" for="inputGroupFile01">Upload your file here...</label>
				  </div>
				</div>
				<!--END OF CODES - UPLOADING HANDOUTS-->

				<!--START OF CODES - INPUTING TITLE, ETC.-->
					<div class="d-flex justify-co">

					<form action="" method="post" class="w-100  px-0  mt-2 ml-4 mr-4" enctype="multipart/form-data">

							<div class="row ">
								<div class="col">
									<div class="input-group mb-2">
			        						<div class="input-group-prepend">
			         							 <div class="input-group-text bg-warning"><i class="fas fa-file-alt text-white fa-1x"></i></div>
			        						</div>
			        						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Handout Title">
			      					</div>
								</div>
								
								<div class="col ">
									<div class="input-group mb-2">
			        						<div class="input-group-prepend">
			         							 <div class="input-group-text bg-warning"><i class="fas fa-list-ol text-white fa-1x"></i></div>
			        						</div>
			        						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Handout No./ID">
			      					</div>
								</div>

								<div class="col">
									<div class="input-group mb-2">
									    <select class="form-control text-secondary" id="exampleFormControlSelect1">
									      <option>Prelim</option>
									      <option>Midterm</option>
									      <option>Pre-final</option>
									      <option>Final</option>
									    </select>
								  	</div>	
			      				</div>
							</div>	

							</form>
					</div>
	    			

				<!--END OF CODES - INPUTING TITLE, ETC.-->

				<!--START OF CODES - BUTTONS ADD, DELETE, EDIT-->
					<div class="d-flex justify-co">

					<form action="" method="post" class="w-100  px-0  mt-2 ml-4 mr-4" enctype="multipart/form-data">

							<div class="row ">
								<div class="col">
									<button type="submit" name="upload" class="btn btn-success text-white text-center" style="height: 30px; width: 32%; font-size: 12px; "><i class="fas fa-plus text-white fa-1x"></i> ADD</button>
								</div>
								
								
							</div>	
				</form>

					</div>

					<!--END OF CODES - BUTTONS ADD, DELETE, EDIT-->

				<div class="body_1 w-100 mt-3" style="height: auto; background: #F0F0F0;position: relative;">
				<table class="table table-striped table-dark text-center">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">File Name</th>
				      <th scope="col">Title</th>
				      <th scope="col">Handout No./ID</th>
				      <th scope="col">Quarter</th>
				      <th scope="col">Download</th>
				      <th scope="col">Edit</th>
				      <th scope="col">Delete</th>
				    </tr>

				    <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>File1.pdf</td>
				      <td>Emerging Technologies</td>
				      <td>Handout 1 - 10101C</td>
				      <td>Prelim</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-cloud-download-alt"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>File2.pdf</td>
				      <td>Requirements Analysis and Modeling</td>
				      <td>Handout 2 - 10101B</td>
				      <td>Prelim</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-cloud-download-alt"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				    </tr>

					</tbody>
				  </thead>
				</table>
			</div>
			</div>
		</div>

		<!--END OF CODES - ADDING HANDOUTS-->

		<!------------------------------------------------------------------------------------------------->

		<!--START OF CODES - ADDING SEATWORKS-->
		<div class="container w-100 bg-light mt-4" style="height:auto; padding: 10px; position: relative;">
			<div class="body  mw-100 mt-2" style="height:auto; position: relative;">
				<h2 class="text-dark ml-4" style="top: 3%; font-family: helvlight;">Add Seatworks
				</h2>

				<!--START OF CODES - UPLOADING HANDOUTS-->
				
				<div class="input-group ml-4" style="width: 96%;">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile01"
				      aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label text-secondary" for="inputGroupFile01">Upload your file here...</label>
				  </div>
				</div>
				<!--END OF CODES - UPLOADING HANDOUTS-->

				<!--START OF CODES - INPUTING TITLE, ETC.-->
					<div class="d-flex justify-co">

						<form action="" method="post" class="w-100  px-0  mt-2 ml-4 mr-4">

							<div class="row ">
								<div class="col">
									<div class="input-group mb-2">
			        						<div class="input-group-prepend">
			         							 <div class="input-group-text bg-warning"><i class="fas fa-file-alt text-white fa-1x"></i></div>
			        						</div>
			        						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Seatwork Title">
			      					</div>
								</div>
								<div class="col">
									<div class="input-group mb-2">
			        						<div class="input-group-prepend">
			         							 <div class="input-group-text bg-warning"><i class="fas fa-list-ol text-white fa-1x"></i></div>
			        						</div>
			        						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Seatwork No./ID">
			      					</div>
								</div>
								<div class="col ">
									<div class="input-group mb-2">
									    <select class="form-control text-secondary" id="exampleFormControlSelect1">
									      <option>Prelim</option>
									      <option>Midterm</option>
									      <option>Pre-final</option>
									      <option>Final</option>
									    </select>
								  	</div>	
								</div>
								
							</div>	
						</form>

					</div>
	    			

				<!--END OF CODES - INPUTING TITLE, ETC.-->

				<!--START OF CODES - BUTTONS ADD, DELETE, EDIT-->
					<div class="d-flex justify-co">

						<form action="" method="post" class="w-100  px-0  mt-2 ml-4 mr-4">

							<div class="row ">
								<div class="col">
									<button type="button" class="btn btn-success text-white text-center" style="height: 30px; width: 32%; font-size: 12px; "><i class="fas fa-plus text-white fa-1x"></i> ADD</button>
								</div>
								
								
							</div>	
						</form>

					</div>

					<!--END OF CODES - BUTTONS ADD, DELETE, EDIT-->

				<div class="body_1 w-100 mt-3" style="height: auto; background: #F0F0F0;position: relative;">
				<table class="table table-striped table-dark text-center">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">File Name</th>
				      <th scope="col">Title</th>
				      <th scope="col">Seatwork No./ID</th>
				      <th scope="col">Quarter</th>
				      <th scope="col">Max Score</th>
				      <th scope="col">Download</th>
				      <th scope="col">Edit</th>
				      <th scope="col">Delete</th>
				    </tr>

				    <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Seatwork1.docx</td>
				      <td>Emerging Technologies</td>
				      <td>01_Seatwork - 10101C</td>
				      <td>Prelim</td>
				      <td>10</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-cloud-download-alt"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Seatwork2.docx</td>
				      <td>Requirements Analysis and Modeling</td>
				      <td>02_Seatwork - 10101B</td>
				      <td>Prelim</td>
				      <td>10</td>
				      <td><button type="button" class="btn btn-warning text-white"><i class="fas fa-cloud-download-alt"></i></button></td>
				      <td><button type="button" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></button></td>
				      <td><button type="button" class="btn btn-primary text-white"><i class="fas fa-edit"></i></button></td>
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

	<script src="js/jquery-latest.min.js"></script>

	<script>
	//now will select file name and print in div tag.
	//for this you need to pass parameter
	//will check in console first.
	// you have to go in target than file property
	$(function()
	{
		$("#lbl").change(function(event) {
			var x = event.target.files[0].name
			$(".custom-file").text(x)
		});
	})
	</script>


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