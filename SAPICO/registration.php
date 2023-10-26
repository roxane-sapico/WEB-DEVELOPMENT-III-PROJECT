<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registrationstyle.css">
</head>
<body>
    <div class="container">
        <form id="form" action="registration_connect.php" method="post">
            
            <h1>Registration Form</h1>
            <div class="input-control">
                <label for="fullName">Full Name:</label>
                <input type="text" class="input-control" id="fullName" placeholder="Enter full name" name="fullName" required>
            </div>
            <div class="input-control">
                <label for="Email">Email:</label>
                <input type="text" class="input-control" id="Email" placeholder="Enter email address" name="Email" required>
            </div>
            <div class="input-control">
                <label for="Password">Password:</label>
                <input type="password" class="input-control" id="Password" placeholder="Enter password" name="Password" required>
            </div>


            <div class="input-control">
                <label for="Role">Role:</label>
                <select id="Role" name="Role" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="input-control">
                <label for="Gender">Gender:</label>
                <select id="Gender" name="Gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-control">
                <label for="Status">Status:</label>
                <select id="Status" name="Status" required>
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div>
            <button type="submit">Sign Up</button>
            <div class="login-link">
            <p>Already have an account? <a href="login.php">Log in.</a></p>
        </div>
    </div>
        </form>
       
</body>
</html>





