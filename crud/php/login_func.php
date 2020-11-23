<?php

session_start();
include "student_connection.php";
include "teacher_connection.php";
include "logs_connection.php";
include "teacher_logs_connection.php";

if(isset($_POST['student_login']))
{

    date_default_timezone_set("Asia/Manila"); 
    $current_time = date('h:i:s a');
    $date = date("D, m-d-y");
    $uid = $_POST["uid"];

    $query = "SELECT * FROM logs_". $uid .""; 
    $check = mysqli_query($logs_conn, $query);

    if(!$check)
    {
        $sql = "Create table logs_". $uid ." (

            id int not null auto_increment,
            student_num varchar(255) not null,
            date varchar(255),
            time varchar(255),
            Primary key(id)
        )";
    
        $result = mysqli_query($logs_conn, $sql) or die(mysqli_error());
        header("Location:  http://localhost/project/crud/students.php?id={$uid}");
        
        if($result)
        {
            $insert = $logs_conn->query("INSERT INTO logs_". $uid ." (student_num, date, time) VALUES ('$uid', '$date', '$current_time')");
        }
        
    }
    else
    {
        header("Location:  http://localhost/project/crud/students.php?id={$uid}");
        
         $insert = $logs_conn->query("INSERT INTO logs_". $uid ." (student_num, date, time) VALUES ('$uid', '$date', '$current_time')");
    }

}

if(isset($_POST["student_login"]))
{
	$uid = $_POST["uid"];
	$pass = $_POST["pass"];

	$student_query = "SELECT * FROM students_list WHERE student_number='$uid' AND student_pass='$pass'";

	$student_result = mysqli_query($conn, $student_query) or die(mysqli_error($conn));

	if(empty($uid))
	{
		header("Location: btstrp.php?error=id is required");
		exit();
	}
	else if(empty($pass))
	{
		header("Location: btstrp.php?error=passwords is required");
		exit();
	}
	else
	{
		if(mysqli_num_rows($student_result) > 0)
		{
			while($row = mysqli_fetch_assoc($student_result))
			{
				if($row['student_number'] == $uid && $row['student_pass'] == $pass)
				{
					$_SESSION['id'] = $row['id'];
					$_SESSION['student_num'] = $row['student_number'];
					$stud_num = $_SESSION['student_num'];

					header("Location: http://localhost/project/crud/students.php?id={$stud_num}");
				}
				else
				{
					header("Location: http://localhost/project/crud/btstrp.php?error=Student not found");
					exit();
				}
			}
		}
		else
		{
			header("Location: http://localhost/project/crud/btstrp.php?error=Student not found");
			exit();
		}
	}
}

if(isset($_POST['teacher_login']))
{

    date_default_timezone_set("Asia/Manila"); 
    $current_time = date('h:i:s a');
    $date = date("D, m-d-y");
    $uid = $_POST["uid"];

    $query = "SELECT * FROM logs_". $uid .""; 
    $checking = mysqli_query($logs_connection, $query);

    if(!$checking)
    {
        $sql = "Create table logs_". $uid ." (

            id int not null auto_increment,
            teacher_num varchar(255) not null,
            date varchar(255),
            time varchar(255),
            Primary key(id)
        )";
    
        $result = mysqli_query($logs_connection, $sql) or die(mysqli_error());
        header("Location:  http://localhost/project/crud/students.php?id={$uid}");
        
        if($result)
        {
            $insert = $logs_connection->query("INSERT INTO logs_". $uid ." (teacher_num, date, time) VALUES ('$uid', '$date', '$current_time')");
        }
        
    }
    else
    {
        header("Location:  http://localhost/project/crud/students.php?id={$uid}");
        
         $insert = $logs_connection->query("INSERT INTO logs_". $uid ." (teacher_num, date, time) VALUES ('$uid', '$date', '$current_time')");
    }

}

if(isset($_POST["teacher_login"]))
{
	$uid = $_POST["uid"];
	$pass = $_POST["pass"];

	$teacher_query = "SELECT * FROM teachers_list WHERE teacher_number='$uid' AND teacher_pass='$pass'";

	$teacher_result = mysqli_query($connect, $teacher_query) or die(mysqli_error($connect));

	if(empty($uid))
	{
		header("Location: http://localhost/project/crud/btstrp.php?error=id is required");
		exit();
	}
	else if(empty($pass))
	{
		header("Location: http://localhost/project/crud/btstrp.php?error=passwords is required");
		exit();
	}
	else
	{
		if(mysqli_num_rows($teacher_result) > 0)
		{
			while($row = mysqli_fetch_assoc($teacher_result))
			{
				if($row["teacher_number"] == $uid && $row["teacher_pass"] == $pass)
				{
					$_SESSION['id'] = $row['id'];
					$_SESSION['teacher_num'] = $row['teacher_number'];
					$teacher_num = $_SESSION['teacher_num'];
					
					header("Location: http://localhost/project/crud/teachers.php?id={$teacher_num}");
				}
				else
				{
					header("Location: http://localhost/project/crud/btstrp.php?error=Teacher not found");
					exit();
				}
			}
		}
		else
		{
			header("Location: http://localhost/project/crud/btstrp.php?error=Teacher not found");
			exit();
		}
	}
}
?>