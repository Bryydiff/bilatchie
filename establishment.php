<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establishment Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        /* Add custom styles here if needed */
        body {
            padding-top: 4rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container mt-3">
            <a href="action.php" class="btn btn-primary">Add Establishment</a>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h2 class="text-center">Establishment Information</h2>
            </div>
        </div>

        <?php
        // Establish a connection to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "establishment";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the database
        $sql = "SELECT * FROM establishments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="row">';
            echo '<div class="col-12">';
            echo '<table class="table">';
            echo '<thead><tr><th>Barangay</th><th>Proprietor</th><th>Purok</th><th>Address</th><th>Establishment Name</th><th>National ID</th></tr></thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['barangay'] . '</td>';
                echo '<td>' . $row['proprietor'] . '</td>';
                echo '<td>' . $row['purok'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['establishmentName'] . '</td>';
                echo '<td>' . $row['nationalID'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="row">';
            echo '<div class="col-12 text-center">';
            echo 'No data found.';
            echo '</div>';
            echo '</div>';
        }


        // Close the database connection
        $conn->close();
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>

</html>