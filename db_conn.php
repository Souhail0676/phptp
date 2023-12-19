<?php

$sname = "localhost";   // Server name or IP address where the MySQL server is running
$uname = "root";        // MySQL username
$password = "";         // MySQL password
$db_name = "tp3php";    // Database name

// Attempt to establish a connection to the MySQL server
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check if the connection was successful
if (!$conn) {
    echo "Connection failed!";
}
