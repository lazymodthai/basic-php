<?php
include_once("config.php");
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];


$sql_remove = "DELETE FROM users WHERE `users`.`id` = $id";

if (mysqli_query($conn, $sql_remove)) {
    echo "Removed";
    header("location: http://127.0.0.1/user/main.php");
    exit();
} else {
    echo "Error: " . $sql_remove . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
