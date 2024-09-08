<?php
include_once("config.php");
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$code = $_REQUEST['code'];
$year = $_REQUEST['year'];
$faculty = $_REQUEST['faculty'];
$department = $_REQUEST['department'];

if($year == "เลือกชั้นปี") $year = "";
$sql_insert = "INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `code`, `year`, `faculty`, `department`) VALUES ('$username', '$password', '$email', '$firstname', '$lastname', '$code', '$year', '$faculty', '$department')";

if (mysqli_query($conn, $sql_insert)) {
    echo "สมัครสมาชิกสำเร็จ";
    echo "<a href='/user'>กลับไปหน้า Login</a>";
} else {
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
