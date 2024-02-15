<?php
$servername = "localhost"; // Change this to your MySQL server hostname if different
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "registered"; // Change this to your MySQL database name

// Create connection
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
else{
    echo("db connect");
}

?>
