<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'logs';

$logs_conn = mysqli_connect($server, $username, $password, $db);

if(!$logs_conn){
    echo "Connection failed!";
}

?>