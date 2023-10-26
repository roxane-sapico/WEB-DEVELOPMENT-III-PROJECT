<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "records_of_activities";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
$ootd = $_POST['ootd'];

// Insert data into the database
$sql = "INSERT INTO activities (name, date, time, location, ootd) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $date, $time, $location, $ootd);

if ($stmt->execute()) {
    echo "Activity data has been successfully inserted.";
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
