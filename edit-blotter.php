<!-- edit-blotter.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blotter</title>
    <!-- Include your stylesheets and other necessary head elements -->
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "barangayrbi");

        if (isset($_GET['id'])) {
            $id = $conn->real_escape_string($_GET['id']);
            $sql = "SELECT * FROM blotter WHERE id = '$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Now you have the details of the record to be edited in $row
                // Create your edit form using the values from $row
            } else {
                echo "Record not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
    ?>
    <!-- Include your scripts and other necessary body elements -->
</body>
</html>
