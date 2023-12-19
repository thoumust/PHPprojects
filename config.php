<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ffuentes";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die(mysqli_error($con));
}

function resetUsersAutoIncrement()
{
    global $con;
    $tableName = "Users";

    // Get the current maximum ID
    $sqlMaxId = "SELECT MAX(id) AS max_id FROM $tableName";
    $resultMaxId = $con->query($sqlMaxId);

    if ($resultMaxId && $rowMaxId = $resultMaxId->fetch_assoc()) {
        $maxId = $rowMaxId['max_id'];

        // Reset auto-increment to the next value after the current maximum
        $newAutoIncrement = $maxId + 1;
        $sqlReset = "ALTER TABLE $tableName AUTO_INCREMENT = $newAutoIncrement";
        $con->query($sqlReset);
    }
}
function resetStudentsAutoIncrement()
{
    global $con;
    $tableName = "Student";

    // Get the current maximum ID
    $sqlMaxId = "SELECT MAX(id) AS max_id FROM $tableName";
    $resultMaxId = $con->query($sqlMaxId);

    if ($resultMaxId && $rowMaxId = $resultMaxId->fetch_assoc()) {
        $maxId = $rowMaxId['max_id'];

        // Reset auto-increment to the next value after the current maximum
        $newAutoIncrement = $maxId + 1;
        $sqlReset = "ALTER TABLE $tableName AUTO_INCREMENT = $newAutoIncrement";
        $con->query($sqlReset);
    }
}
function resetInstructorUsersAutoIncrement()
{
    global $con;
    $tableName = "Instructor";

    // Get the current maximum ID
    $sqlMaxId = "SELECT MAX(id) AS max_id FROM $tableName";
    $resultMaxId = $con->query($sqlMaxId);

    if ($resultMaxId && $rowMaxId = $resultMaxId->fetch_assoc()) {
        $maxId = $rowMaxId['max_id'];

        // Reset auto-increment to the next value after the current maximum
        $newAutoIncrement = $maxId + 1;
        $sqlReset = "ALTER TABLE $tableName AUTO_INCREMENT = $newAutoIncrement";
        $con->query($sqlReset);
    }
}

// Function to execute queries
function performQuery($sql)
{
    global $con;
    return $con->query($sql);
}

// Function to fetch data
function fetchData($sql)
{
    global $con;
    $result = $con->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}
