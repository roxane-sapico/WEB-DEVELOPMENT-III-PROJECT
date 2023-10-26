<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

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

    // Prepare the SQL query to insert data into the 'announcement' table
    $sql = "INSERT INTO announcement (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the 'show_structure.php' page
        header("Location: showstructure.php");
        exit(); // Ensure that the script stops here and doesn't continue executing.
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


