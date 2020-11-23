<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'dlms';

$connect = mysqli_connect($server, $username, $password, $db);

if(!$connect){
    echo "Connection failed!";
}

?>