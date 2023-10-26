<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $role = $_POST["Role"];
    $gender = $_POST["Gender"];
    $status = $_POST["Status"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (full_name, email, password_hash, role, gender, status) VALUES ('$fullName', '$email', '$hashedPassword', '$role', '$gender', '$status')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully. Now, redirect to the login page.
        $conn->close();
        header("Location: login.php"); // Replace 'login.php' with the actual login page filename
        exit(); // Ensure that the script stops here and doesn't continue executing.
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
