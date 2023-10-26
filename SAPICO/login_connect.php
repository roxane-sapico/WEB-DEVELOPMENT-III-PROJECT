<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $db_password = ""; 
    $dbname = "record_login";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to insert data securely
    $sql = "INSERT INTO login (email, password_hash, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) { // Check if the statement was prepared successfully
        $stmt->bind_param("sss", $email, $hashedPassword, $role);
        $success = $stmt->execute();

        if ($success) {
            if ($role === 'admin') {
                header("Location: NiceAdmin/admin.php"); 
                exit();
            } elseif ($role === 'user') {
                header("Location: user.php"); 
                exit();
            } else {
                echo "Login successful!";
            }
        } else {
            echo "Error executing the query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    $conn->close();
}
?>
