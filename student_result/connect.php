<?php 
// connection database (student_ms)
$host = "localhost";
$user = "root";
$pass = "";
$db = "student_ms";

$connection = mysqli_connect($host, $user, $pass, $db);

// check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>