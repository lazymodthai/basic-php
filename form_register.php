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
  <div class="container">
    <h2>สมัครสมาชิก</h2>
    <form action="register.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"required placeholder="Username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
      </div>
      <!-- <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Confoirm Password">
      </div> -->
      <!-- Zone 2 -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
      </div>
      <div class="form-group">
        <label for="firstname">ชื่อ</label>
        <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="ชื่อ">
      </div>
      <div class="form-group">
        <label for="lastname">นามสกุล</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="นามสกุล">
      </div>
      <div class="form-group">
        <label for="code">รหัสนักศึกษา</label>
        <input type="text" class="form-control" id="code" name="code" required maxlength="12" placeholder="รหัสนักศึกษา">
      </div>
      <!-- <div class="form-group">
        <label for="year">ชั้นปีที่</label>
        <input type="text" class="form-control" id="year" name="year" placeholder="ชั้นปี">
      </div> -->
      <div class="form-group">
        <label for="year">ชั้นปีที่</label>
        <select class="form-control" id="year" name="year">
          <option value="" disabled selected>เลือกชั้นปี</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="faculty">คณะ</label>
        <input type="text" class="form-control" id="faculty" name="faculty" placeholder="คณะ">
      </div>
      <div class="form-group">
        <label for="department">สาขาวิชา</label>
        <input type="text" class="form-control" id="department" name="department" placeholder="สาขาวิชา">
      </div>
      <div>เป็นสมาชิกอยู่แล้ว <a href="/user">กลับไปเข้าสู่ระบบ</a></div>
      <br>
      <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
    </form>
  </div>
</body>

</html>