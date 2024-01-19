<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Sto. Tomas</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stats.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="menuToggle"></div>
    <div class="flex">
        <?php $PAGE = "dashboard"?>
        <?php require_once('./sidebar.php'); ?>
        <div class="content">

            <div class="flex-container">
                <button onclick="location.href ='kabarangay.php'" class="card-statistics text-blue bg-aqua">Population</button>
                <button onclick="location.href ='establishment.php'" class="card-statistics text-blue bg-red">Establishment</button>
                <button onclick="location.href ='certificate.php'" class="card-statistics text-blue bg-purple">Certificates</button>
                <button onclick="location.href ='blotter-list.php'" class="card-statistics text-blue bg-pink">File Action</button>  
            </div>

            <!-- Canvas for the Population Chart -->
            
            <div class="container-sm" >
            
                <canvas id="populationChart"></canvas>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let sidebar = document.querySelector('.sidebar');
        menuToggle.onclick = function () {
            menuToggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }
        let Menulist = document.querySelectorAll('.Menulist li');
        function activeLink() {
            Menulist.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active')
        }
        Menulist.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>

    <!-- Script for the Population Chart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sample data for the population chart
            const populationData = {
                labels: ['Male', 'Female','Lgbtq'],
                datasets: [{
                    label: 'Population',
                    data: [500, 600, 100], // Replace with your actual population data
                    backgroundColor: ['#3498db', '#fb513b','#3bfb4f'], // Colors for bars
                    borderWidth: 1
                }]
            };

            // Get the canvas element
            const populationCanvas = document.getElementById('populationChart').getContext('2d');

            // Create the bar chart
            new Chart(populationCanvas, {
                type: 'doughnut',
                data: populationData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    maintainAspectRatio: false, // Make the chart responsive
                    responsive: true
                }
            });
        });
        
    </script>
</body>
</html>