<?php
include 'config.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE From `Student` where id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:displayStudent.php');
    } else {
        die(mysqli_error($con));
    }
}
