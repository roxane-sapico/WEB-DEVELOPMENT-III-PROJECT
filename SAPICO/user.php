<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            text-align: center;
        }

        .navbar h1 {
            color: #fff;
            padding: 10px;
            margin: 0;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            margin: 5px;
        }

        .dashboard-links {
            text-align: center;
        }

        .dashboard-links a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .dashboard-links a:hover {
            background-color: #0056b3;
        }

        .dashboard-links a:first-child {
            margin-right: 10px;
        }

        .logout-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Welcome, User!</h1>
        <a href="lifeactivities.php">Manage Life Activities</a>
        <a href="#" id="logout-link">Log Out</a>
        <script>
    document.getElementById('logout-link').addEventListener('click', function (e) {
        e.preventDefault();

        // Display a confirmation dialog
        var confirmLogout = confirm("Are you sure you want to log out?");

        if (confirmLogout) {
            // If "Yes" is clicked, redirect to index.html
            window.location.href = "index.html";
        }
    });
</script>
</div>