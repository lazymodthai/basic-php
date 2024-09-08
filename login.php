<?php
session_start();
include_once("config.php");
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


$sql_find_user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$user = mysqli_query($conn, $sql_find_user);
if (mysqli_num_rows($user) > 0) {
    $u =  mysqli_fetch_array($user);
    $_SESSION["isLogin"] = "Y";
    header("location:http://127.0.0.1/user/main.php");
} else {
    echo "Username หรือ Password ไม่ถูกต้อง";
    echo "<a href='/user'>กลับไปหน้า Login</a>";
}

mysqli_close($conn);