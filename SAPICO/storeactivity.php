<?php
if (isset($_POST['submit'])) {
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

    // Get data from the form
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $ootd = $_POST['ootd'];

    $sql = "INSERT INTO activities (name, date, time, location, ootd) VALUES ('$name', '$date', '$time', '$location', '$ootd')";

    if ($conn->query($sql) === true) {
        // Redirect to the same page to prevent data resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error adding activity: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

// Retrieve and display the table of activities
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "records_of_activities";

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve activities from the database
$sql = "SELECT * FROM activities";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Data</title>
    <style>
        /* CSS styles for the table */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
        a {
            text-decoration: underline;
            font-family: Arial, sans-serif;
            color: #007bff;
        }
        .activity-dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .activity-dropdown:hover .dropdown-content {
            display: block;
        }

        select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

    </style>
</head>
<body>
    <h2>Activities Data</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>OOTD</th>
            <th>Action</th>
           
        </tr>
<!-- Dropdown for changing order -->
<form method="post" action="">
        <label for="orderOption">Show All:</label>
        <select name="orderOption">
            <option value="asc">Ascending by Date</option>
            <option value="desc">Descending by Date</option>
        </select>
        <button type="submit" name="changeOrder">Change Order</button>
    </form>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['ootd'] . "</td>";
            echo '<td>
        <a href="edit.php?id=' . $row['id'] . '">Edit</a>
        <span style="margin: 0 10px;">|</span>
        <a href="delete.php?id=' . $row['id'] . '">Delete</a>
        <span style="margin: 0 10px;">|</span>
            <select name="activity_status">
                <option value="Cancel">Cancel</option>
                <option value="Done">Done</option>
                <option value="Remarks">Remarks</option>
            </select>
        
      </td>';

            echo "</tr>";
        }
        ?>
    </table>
    <a href="user.php">Back to Menu</a>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
