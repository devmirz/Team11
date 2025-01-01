<?php
$servername = "localhost";
$username = "root";       // replace with your database username
$password = "";           // replace with your database password
$dbname = "team11"; // replace with your database name

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    $con->close();
}

// echo "Connected successfully";

// Close connection

?>
