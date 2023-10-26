<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        /* CSS styles for the User Registration form */
        body {
            font-family: 'Open Sans', sans-serif;
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
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 3px;
        }

        select {
            width: 100%;
            padding: 11px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 3px;
        }

        label {
            font-weight: bold;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 14px;
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        /* CSS styles for the Logout button */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        button {
            background-color: #007bff; /* Changed the background color to blue */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        center {
            font-size: 50px;
            margin-top: 100px;
        }

        .register-form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .register-form h2 {
            text-align: center;
        }

        .register-form form {
            text-align: center;
        }

        .register-form input[type="text"],
        .register-form input[type="date"],
        .register-form input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        .register-form input[type="submit"] {
            background-color:  #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }

        #btn {
            position: absolute;
            left: 94%;
            bottom: 93%;
        }
    </style>
</head>
<body>
    <div class="register-form">
        <h2>Add Activity</h2>
        <form method="POST" action="storeactivity.php">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="date" name="date" placeholder="Date" required><br>
            <input type="time" name="time" placeholder="Time" required><br>
            <input type="text" name="location" placeholder="Location" required><br>
            <input type="text" name="ootd" placeholder="OOTD" required><br>
            <input type="submit" value="Submit" name="submit"><br><br>
            <a href="features.php">Other Important Features</a><br><br>
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
        </form>
    </div>
</body>
</html>