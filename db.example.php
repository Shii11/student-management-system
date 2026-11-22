<?php

// Copy this file to db.php and enter your local MySQL settings.
$conn = mysqli_connect("localhost", "root", "YOUR_MYSQL_PASSWORD", "student_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
