<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Instructor</title>
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
        <button class="btn btn-info my-5"><a href="instructor.php" class="text-light">Add Instructor</a></button>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Specialty</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM `Instructor`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $specialty = $row['specialty'];

                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $specialty . '</td>
                    <td>
                    <button class = "btn btn-success"><a href="updateInstructor.php?updateid=' . $id . '" class = "text-light">Update Instructor</a></button>
                    <button class = "btn btn-danger"><a href="deleteInstructor.php?deleteid=' . $id . '" class = "text-light">Delete Instructor</a></button>
                </td>
                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>