<?php
$conn = mysqli_connect('localhost','root','','appointments');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>