<?php
//Database Information
$servername = "localhost";
$username="";
$password="";
$dbname ="webapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

