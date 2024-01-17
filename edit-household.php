<?php
$conn = mysqli_connect("localhost", "root", "", "barangayrbi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM households WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $middle_name = $conn->real_escape_string($_POST['middle_name']);
    $suffix = $conn->real_escape_string($_POST['suffix']);
    $age = $conn->real_escape_string($_POST['age']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $civil_status = $conn->real_escape_string($_POST['civil_status']);
    $nationality = $conn->real_escape_string($_POST['nationality']);
    $religion = $conn->real_escape_string($_POST['religion']);
    $birth_date = $conn->real_escape_string($_POST['birth_date']);
    $birth_place = $conn->real_escape_string($_POST['birth_place']);
    $time_span = $conn->real_escape_string($_POST['time_span']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $occupation = $conn->real_escape_string($_POST['occupation']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $pwd_number = $conn->real_escape_string($_POST['pwd_number']);
    $monthly_income = $conn->real_escape_string($_POST['monthly_income']);
    $indigent = $conn->real_escape_string($_POST['indigent']);
    $solo_parent_id = $conn->real_escape_string($_POST['solo_parent_id']);
    $ps_id = $conn->real_escape_string($_POST['ps_id']);
    $register_voter = $conn->real_escape_string($_POST['register_voter']);
    $purok_number = $conn->real_escape_string($_POST['purok_number']);
    $house_number = $conn->real_escape_string($_POST['house_number']);
    $street = $conn->real_escape_string($_POST['street']);
    // Add other fields here

    // Update the record in the database
    $sql = "UPDATE households SET
            last_name = '$last_name',
            first_name = '$first_name',
            middle_name = '$middle_name',
            suffix = '$suffix',
            age = '$age',
            gender = '$gender',
            civil_status = '$civil_status',
            nationality = '$nationality',
            religion = '$religion',
            birth_date = '$birth_date',
            birth_place = '$birth_place',
            time_span = '$time_span',
            occupation = '$occupation',
            contact_number = '$contact_number',
            pwd_number = '$pwd_number',
            monthly_income = '$monthly_income',
            indigent = '$indigent',
            solo_parent_id = '$solo_parent_id',
            ps_id = '$ps_id',
            register_voter = '$register_voter',
            purok_number = '$purok_number',
            house_number = '$house_number',
            street = '$street'
            WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: edit-household.php?id=$id&success=true");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <title>Edit Household</title>
      <!-- Add your CSS links here -->
   </head>
   <body>
      <h2>Edit Household</h2>
      <form method="post" action="">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><br>

          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><br>

          <!-- Add other fields here -->

          <input type="submit" name="update" value="Update">
      </form>

      <a href="your_main_page.php">Back to Main Page</a>

      <!-- Add your JavaScript links here -->
   </body>
</html>
