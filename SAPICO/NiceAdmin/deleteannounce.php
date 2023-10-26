<?php
if (isset($_GET['id'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "mydatabase";

    // Create a new connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    // Prepare the SQL query to delete data from the 'announcement' table
    $sql = "DELETE FROM announcement WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data has been deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}

// Redirect back to the page displaying the data
header("Location: showstructure.php");
exit();
?>
