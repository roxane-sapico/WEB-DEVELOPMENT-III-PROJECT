<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        a {
        text-decoration: underline;
        color: #007bff;
        }
    </style>
</head>
<body>
    <div style="width: 400px; margin: 0 auto;">
        <canvas id="genderPieChart"></canvas>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Modify the SQL query to select only male and female genders
    $sql = "SELECT gender, COUNT(*) as count FROM users WHERE gender IN ('male', 'female') GROUP BY gender";
    $result = $conn->query($sql);

    $genderLabels = [];
    $genderCounts = [];

    while ($row = $result->fetch_assoc()) {
        $genderLabels[] = $row['gender'];
        $genderCounts[] = $row['count'];
    }
    ?>
    <script>
    const genderData = {
        labels: <?php echo json_encode($genderLabels); ?>,
        datasets: [{
            data: <?php echo json_encode($genderCounts); ?>,
            backgroundColor: ['#3498DB','#FF5733']
        }],
    };

    const ctx = document.getElementById('genderPieChart').getContext('2d');
    const genderPieChart = new Chart(ctx, {
        type: 'pie',
        data: genderData,
    });
    </script>
    <br>
    <a href="admin.php">Back to Menu</a>
</body>
</html>