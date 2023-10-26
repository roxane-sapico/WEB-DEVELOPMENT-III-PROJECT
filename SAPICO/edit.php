<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
<style>
    /* CSS styles for the Edit Activity form */
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

    form {
        text-align: left;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 2px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>
    <div class="register-form">
        <h2>Edit Activity</h2>
        <form method="POST" action="edit_connect.php">
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

            // Get the activity ID you want to edit from the URL (assuming it's passed as a query parameter)
            $activity_id = $_GET['id'];

            // Fetch the activity data by ID
            $sql = "SELECT * FROM activities WHERE id = $activity_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Display the data in input fields for editing
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<input type="text" name="name" value="' . $row['name'] . '" placeholder="Name" required><br>';
                echo '<input type="date" name="date" value="' . $row['date'] . '" placeholder="Date" required><br>';
                echo '<input type="time" name="time" value="' . $row['time'] . '" placeholder="Time" required><br>';
                echo '<input type="text" name="location" value="' . $row['location'] . '" placeholder="Location" required><br>';
                echo '<input type="text" name="ootd" value="' . $row['ootd'] . '" placeholder="OOTD" required><br>';
            }
            ?>

            <input type="submit" href="storeactivity.php" value="Edit" name="edit"><br><br>
        </form>
        <a href="storeactivity.php">Back to Menu</a>
    </div>
</body>
</html>
