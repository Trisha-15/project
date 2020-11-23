<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'dlms';

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn){
    echo "Connection failed!";
}

?>