<!DOCTYPE html>
<html>
<head>
    <title>Edit Announcement</title>
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
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
    <body>
        <h1>Edit Announcement</h1>

        <div class="container">
            <form action="showdata.php" method="POST">
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

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Retrieve the data from the database for the specified ID
                    $query = "SELECT * FROM announcement WHERE id = $id";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $title = $row['title'];
                        $content = $row['content'];
                    } else {
                        echo "No data found for the specified ID.";
                        exit;
                    }
                }
                ?>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="title">Announcement Title:</label>
                <input type="text" name="title" value="<?php echo $title; ?>" required><br>
                <label for="content">Announcement Content:</label>
                <textarea name="content" required><?php echo $content; ?></textarea><br>
                <input type="submit" value="Update"><br><br>
                <a href="index.html">Back to Menu</a>
            </form>
        </div>
    </body>
</html>
