<?php 
include "login_func.php";
include "add_Course_connection.php";

$message="";
if(isset($_GET['id']))
{
    $teacher_id = mysqli_real_escape_string($connect, $_GET['id']);

    $teacher_query = "SELECT * FROM teachers_list WHERE teacher_number='$teacher_id'";
    $teacher_result = mysqli_query($connect, $teacher_query) or die(mysqli_error($connect));
    if(mysqli_num_rows($teacher_result))
    {
        while($row = mysqli_fetch_array($teacher_result))
        {
            $_SESSION['id'] = $row['teacher_number'];
            $fname = $row["teacher_fname"];
            $lname = $row["teacher_lname"];
        }
    }
}

if (isset($_POST['btn_upload'])) {

    $filename = $_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    $folder = 'course_img/';

    move_uploaded_file($filetmpname, $folder.$filename);

    $SubjectName = ($_POST['SubjectName']);
    $SubjectCode = ($_POST['SubjectCode']);
    $StartSchedule = ($_POST['StartSchedule']);
    $EndSchedule = ($_POST['EndSchedule']);

    if (empty($filename))
    {
        //echo "<script>alert('No image selected')</script>";
        $message = base64_encode("No image inserted");
        header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
    }
    else if(empty($SubjectName))
    {
        //echo "<script>alert('Subject name is empty')</script>";
        $message = base64_encode("Subject name is required");
        header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
 
    }
    else if(empty($SubjectCode))
    {
        //echo "<script>alert('Subject code and section is empty')</script>";
        $message = base64_encode("Subject code is required");
        header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
    }    
    else if(empty($StartSchedule))
    {
       //echo "<script>alert('Lesson start schedule is require')</script>";
        $message = base64_encode("Lesson start schedule is required");
        header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
    }
    else if(empty($EndSchedule))
    {
        //echo "<script>alert('Lesson end schedule is require')</script>";
        $message = base64_encode("Lesson end schedule is required");
        header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
    }
    else
    {
        //$file = addslashes(file_get_contents($_FILES[]["tmp_name"]));
        $mysqli = "INSERT INTO add_course (ImageName, SubjectName, SubjectCode, StartSchedule, EndSchedule) VALUES ('$filename', '$SubjectName', '$SubjectCode', '$StartSchedule', '$EndSchedule')";

        $result = mysqli_query($conn, $mysqli);

        if (mysqli_num_rows($result) == 1)
        {
            //echo "<script>alert('Course not uploaded successfully');</script>";
            $message = base64_encode("Course not uploaded successfully");
            header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
        }
        else
        {
            $message = base64_encode("Course uploaded successfully");
            header("Location: http://localhost/project/crud/teachers.php?id={$teacher_id}&msg={$message}");
            exit();
        }
    }
}

?>