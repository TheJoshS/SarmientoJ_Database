<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "J2S1";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE J2S1";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql1 = "CREATE TABLE WebDev(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn1->query($sql1) === TRUE) {
  echo "Table WebDev created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


$conn->close();
?>