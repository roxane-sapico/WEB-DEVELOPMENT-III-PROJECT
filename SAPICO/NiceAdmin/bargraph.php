<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Bar Graph</title>
</head>
<body>
    <canvas id="barChart" width="400" height="200"></canvas>

    <script>
        // Fetch data from the PHP script
        fetch('fetch_data.php')
            .then(response => response.json())
            .then(data => {
                // Extract the necessary data from the JSON response
                const names = data.map(entry => entry.name);
                const dates = data.map(entry => entry.date);

                // Create a bar graph
                var ctx = document.getElementById('barChart').getContext('2d');
                var barChart = new Chart(ctx, {
                    type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [{
                            label: 'Number of Logins',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                            borderColor: 'rgba(75, 192, 192, 1)', 
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>
</html>
