<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'teacher_logs';

$logs_connection = mysqli_connect($server, $username, $password, $db);

if(!$logs_connection){
    echo "Connection failed!";
}

?>