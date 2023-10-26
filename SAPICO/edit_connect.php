<?php
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

if (isset($_POST['edit'])) {
    // Get data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $ootd = $_POST['ootd'];

    // Update the database with the edited data
    $sql = "UPDATE activities SET name='$name', date='$date', time='$time', location='$location', ootd='$ootd' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "";
    } else {
        echo "Error updating activity: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edited</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
    }

    .register-form {
        width: 300px;
        margin: 0 auto;
        padding: 70px;
        background-color: #fff;
        border: 2px solid #ccc;
        border-radius: 6px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-family: 'Montserrat', sans-serif;
        color: #333;
        margin-bottom: 20px;
    }

    p {
        color: #007bff;
    }

    a {
        text-decoration: underline;
        color: #007bff;
        font-weight: bold;
        
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>
    <div class="register-form">
        <h2>Edit Confirmation</h2>
        <?php
        if (isset($_POST['edit'])) {
            // Display the edited data
            echo "<p>Name: $name</p>";
            echo "<p>Date: $date</p>";
            echo "<p>Time: $time</p>";
            echo "<p>Location: $location</p>";
            echo "<p>OOTD: $ootd</p>";
        }
        ?>
        <a href="storeactivity.php">Back to Menu</a>
    </div>
</body>
</html>
