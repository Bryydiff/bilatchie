<?php
$conn = mysqli_connect("localhost", "root", "", "barangayrbi");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM households WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the profile details here
        echo "<h1>{$row['first_name']} {$row['last_name']}'s Profile</h1>";
        echo "<p>Birth Date: {$row['birth_date']}</p>";
        // Add other profile details as needed
    } else {
        echo "Person not found.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
