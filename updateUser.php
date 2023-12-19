<?php
include 'config.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET id=$id,username='$username',password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: displayUser.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" crossorigin="anonymous">
    <title>Student Information System</title>
</head>

<body>
<div id = "header">
        <div class="container">
          <nav>
              <ul>
                  <li><a href="users.php" class="active">Users</a></li>
                  <li><a href="student.php">Students</a></li>
                  <li><a href="instructor.php">Instructor</a></li>
                  <li><a href="course.php">Course</a></li>
                  <li><div class="scene">
                      <div class="cube">
                          <span class="side top" onclick="logout()">Hope you're okay.</span>
                          <span class="side front">Hello, How are you?</span>
                      </div>
                    </div>
                  </li>
              </ul>
          </nav>
    </div>
    
    <div class="container">
        <form method="POST">
            <div class="form_group">
                <label class="sub_title" for="username">Username</label>
                <input placeholder="Enter your full name" class="form_style" type="text" name="username">
            </div>
            <div class="form_group">
                <label class="sub_title" for="password">Password</label>
                <input placeholder="Enter your password" id="password" class="form_style" type="password" name="password">
            </div>
            <button type="submit" class="btn" name="submit">Update</button>
        </form>
    </div>
</body>

</html>