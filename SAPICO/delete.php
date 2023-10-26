<?php
if (isset($_GET['id'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "records_of_activities";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $activity_id = $_GET['id'];

    // Prepare the SQL query to delete the activity from the 'activities' table
    $sql = "DELETE FROM activities WHERE id = $activity_id";

    if ($conn->query($sql) === TRUE) {
        echo "Activity has been deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}

// Redirect back to the page displaying the remaining activities
header("Location: storeactivity.php");
exit();
?>
