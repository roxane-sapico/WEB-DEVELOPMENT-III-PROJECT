<!DOCTYPE html>
<html>
<head>
    <title>Recorded Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        th, td {
            padding: 10px;
            text-align: left;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            color: #0056b3;
        }

        a.edit-link {
            color: green;
        }

        a.delete-link {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Recorded Data</h1>

    <?php
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

    // Prepare the SQL query to retrieve the recorded data from the 'announcement' table
    $query = "SELECT * FROM announcement";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
        <th>Title</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['title']}</td>";
            echo "<td>{$row['content']}</td>";
            echo "<td><a href='editannounce.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td><a href='deleteannounce.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No recorded data available.";
    }

    // Close the database connection
    $conn->close();
    ?>
    <br>
    <a href="announcements.php">Back to Menu</a>
</body>
</html>
