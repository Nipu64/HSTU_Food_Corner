<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$port = "3310";
$username = "root"; //username
$password = ""; //password
$dbname = "online_rest";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname, $port); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>