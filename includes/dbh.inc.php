<?php
$servername = "localhost";
$username = "diniru1";
$password = "3Vx)KxOhDg0-SLuc";
$dbname = "logindb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo"It's Working";
}