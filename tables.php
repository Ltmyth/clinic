<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE fwd_numbers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
names VARCHAR(20) NOT NULL,
nums VARCHAR(30) NOT NULL
)";

$sql = "CREATE TABLE incoming (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
call_time TIMESTAMP, 
call_source VARCHAR(30) NOT NULL,
call_recording VARCHAR(30) NOT NULL,
received_by VARCHAR(20) NOT NULL
)";

$sql = "CREATE TABLE outgoing (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
destination VARCHAR(30) NOT NULL,
response VARCHAR(30) NOT NULL,
response_by VARCHAR(20) NOT NULL,
response_time TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>