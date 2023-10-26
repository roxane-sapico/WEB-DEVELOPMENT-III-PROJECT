<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div class="logout-button">
    <a href="#" id="logout-link">Log Out</a>
    <title>Document</title>
</head>
<body>
    
</body>
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
</html>