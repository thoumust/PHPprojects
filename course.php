<?php
include('config.php');
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $description = $_POST['description'];

  $sql = "INSERT into `Course`(name,description)
  VALUES('$name','$description')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: displayCourse.php');
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    
  <div class="container my-5">
    <form method="POST">
    <div class="form_group">
                <label class="sub_title" for="name">Course</label>
                <input placeholder="Subject name" class="form_style" type="text" name="name">
            </div>
            <div class="form_group">
                <label class="sub_title" for="description">Description</label>
                <input placeholder="Description" id="password" class="form_style" type="password" name="description">
            </div>
            <div>
            <button type="submit" class="btn" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>