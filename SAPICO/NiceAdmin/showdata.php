<!DOCTYPE html>
<html>
<head>
    <title>Edited Announcement</title>
</head>
<body>
<div class="container">
<style>
        body {
            background-image: url('dirty.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
    <body>
        <h1>Edited Announcement</h1>

        <div class="container">
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

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST["id"];
                $title = $_POST["title"];
                $content = $_POST["content"];

                // Prepare the SQL query to update data in the 'announcement' table
                $sql = "UPDATE announcement SET title = '$title', content = '$content' WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "";

                    // Retrieve the updated data
                    $query = "SELECT * FROM announcement WHERE id = $id";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $editedTitle = $row['title'];
                        $editedContent = $row['content'];

                        // Display the edited data
                        echo "Edited Title: " . $editedTitle . "<br><br>";
                        echo "Edited Content: " . $editedContent . "<br><br>";
                    } else {
                        echo "No data found for the specified ID.";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
            <a href="showstructure.php">Back to Menu</a>
        </div>
    </body>
</html>
