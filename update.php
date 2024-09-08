<?php
include_once("config.php");
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $username = $_REQUEST['username'];
// $password = $_REQUEST['password'];
$id = $_GET['id'];
$email = $_REQUEST['email'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$code = $_REQUEST['code'];
$year = $_REQUEST['year'];
$faculty = $_REQUEST['faculty'];
$department = $_REQUEST['department'];

if($year == "เลือกชั้นปี") $year = "";
$sql_update = "UPDATE `users` 
               SET 
                   `email` = '$email',
                   `firstname` = '$firstname',
                   `lastname` = '$lastname',
                   `code` = '$code',
                   `year` = '$year',
                   `faculty` = '$faculty',
                   `department` = '$department'
               WHERE `id` = '$id'";

if (mysqli_query($conn, $sql_update)) {
    echo "Updated";
    header("location: http://127.0.0.1/user/main.php");
    exit();
} else {
    echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
