<?php 
include "login_func.php";
include "pdf_connection.php";

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


if(isset($_POST['upload'])) {

    $filename = $_FILES['myfiles']['name'];

    $destination = 'pdfs/' . $filename;
    
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    
    $file = $_FILES['myfiles']['tmp_name'];
    $size = $_FILES['myfiles']['size'];
    
    if(!in_array($extension,['pdf']))
    {
        $message = base64_encode("Upload pdf files only");
        header("Location: teacher_handouts_seatworks.php?id={$teacher_id}&msg={$message}");
        exit();
    }
    elseif($_FILES['myfiles']['size'] > 100000000)
    {
        $message = base64_encode("File size too large");
        header("Location: teacher_handouts_seatworks.php?id={$teacher_id}&msg={$message}");
        exit();
    }
    else
    {
        if(move_uploaded_file($file,$destination))
        {
            $sql = "INSERT INTO files (name, size) VALUES ('$filename', '$size')";

            if(mysqli_query($conn,$sql))
            {
                $message = base64_encode("File uploaded successfully");
                header("Location: teacher_handouts_seatworks.php?id={$teacher_id}&msg={$message}");
                exit();
            }
            else
            {
                $message = base64_encode("File upload failed");
                header("Location: teacher_handouts_seatworks.php?id={$teacher_id}&msg={$message}");
                exit();
            }
            
        }
    }
}


?>