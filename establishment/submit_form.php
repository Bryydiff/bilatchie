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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $barangay = $_POST["barangay"];
    $proprietor = $_POST["proprietor"];
    $purok = $_POST["purok"];
    $address = $_POST["address"];
    $establishmentName = $_POST["establishmentName"];
    $nationalID = $_POST["nationalID"];

    // Insert data into the database
    $sql = "INSERT INTO establishments (barangay, proprietor, purok, address, establishmentName, nationalID) VALUES ('$barangay', '$proprietor', '$purok', '$address', '$establishmentName', '$nationalID')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


