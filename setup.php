<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ffuentes";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Switch to the created database
$conn->select_db("$dbname");

// Create Users table
$sql = "CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table for Users created successfully<br>";
} else {
    echo "Error creating table Users: " . $conn->error . "\n";
}

// Create Student table
$sql = "CREATE TABLE IF NOT EXISTS Student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table for Student created successfully<br>";
} else {
    echo "Error creating table Student: " . $conn->error . "\n";
}

// Create Course table
$sql = "CREATE TABLE IF NOT EXISTS Course (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table for Course created successfully<br>";
} else {
    echo "Error creating table Course: " . $conn->error . "\n";
}

// Create Instructor table
$sql = "CREATE TABLE IF NOT EXISTS Instructor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    specialty VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table for Instructor created successfully<br>";
} else {
    echo "Error creating table Instructor: " . $conn->error . "\n";
}

// Close connection
$conn->close();
?>