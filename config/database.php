<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "sc_db";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Change character set to utf8
mysqli_set_charset($conn,"utf8");
 ?>
