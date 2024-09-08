<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php
    if($_SESSION["isLogin"] != "Y") {
      header("location:http://127.0.0.1/user/");
      exit();
    }
    include_once("config.php");
    $conn = new mysqli($server, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_users = "SELECT id, firstname, lastname, code, year, faculty, department, email FROM users";
    $users = mysqli_query($conn, $sql_users);
  ?>
  <div class="container">
    <div>
    <h2>รายการสมาชิก</h2>
    <h6><a href="logout.php">ออกจากระบบ</a></h6>
    </div>
    <?php
      echo "<table class='table table-bordered'>
            <thead>
              <tr>
                <th scope='col'>ลำดับ</th>
                <th scope='col'>ชิ่อ - นามสกุล</th>
                <th scope='col'>รหัสนักศึกษา</th>
                <th scope='col'>ชั้นปี</th>
                <th scope='col'>คณะ</th>
                <th scope='col'>สาขาวิชา</th>
                <th scope='col'>Email</th>
                <th scope='col'>จัดการ</th>
              </tr>
            </thead>
            <tbody>";
            $index = 1;
            while ($row = mysqli_fetch_array($users)) {
                echo "<tr>";
                echo "<td>" . $index . "</td>";
                echo "<td>" . $row['firstname']. ' ' . $row['lastname'] . "</td>";
                echo "<td>" . $row['code'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['faculty'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td style='display: flex; justify-content: space-around;'><a href='form_edit.php?id=" . $row['id'] . "' class='btn btn-primary'>แก้ไข</a> <a href='remove.php?id=" . $row['id'] . "' class='btn btn-danger'>ลบ</a></td>";
                echo "</tr>";
                $index++;
            }
      echo "</tbody></table>";
    ?>
  </div>
</body>

</html>