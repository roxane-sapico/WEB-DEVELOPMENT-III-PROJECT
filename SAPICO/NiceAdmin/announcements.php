<!DOCTYPE html>
<html>
<head>
    <title>Admin Announcements</title>
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
    <h1>Announcements</h1>

    <div class="container">
    <form action="announcement_connect.php" method="POST">
    <label for="title">Announcement Title:</label>
    <input type="text" name="title" required><br>
    <label for="content">Announcement Content:</label>
    <textarea name="content" required></textarea><br>

        <button type="submit">Submit</button><br><br>
        <a href="admin.php">Back to Menu</a>
    </form>
</body>
</html>