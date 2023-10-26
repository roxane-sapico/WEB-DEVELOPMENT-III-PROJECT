<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "records_of_activities";

// Create a database connection
$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch data from the 'activities' table based on the 'date' field
$query = "SELECT `name`, `date` FROM `activities`";
$result = $connection->query($query);

// Create an associative array to store the data
$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$connection->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
