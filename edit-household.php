<?php
$conn = mysqli_connect("localhost", "root", "", "barangayrbi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM households WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        exit;
    }
    $stmt->close();
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
            last_name = ?,
            first_name = ?,
            middle_name = ?,
            suffix = ?,
            age = ?,
            gender = ?,
            civil_status = ?,
            nationality = ?,
            religion = ?,
            birth_date = ?,
            birth_place = ?,
            occupation = ?,
            contact_number = ?,
            pwd_number = ?,
            monthly_income = ?,
            indigent = ?,
            solo_parent_id = ?,
            ps_id = ?,
            register_voter = ?,
            purok_number = ?,
            house_number = ?,
            street = ?
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssssssssssssss",
        $last_name,
        $first_name,
        $middle_name,
        $suffix,
        $age,
        $gender,
        $civil_status,
        $nationality,
        $religion,
        $birth_date,
        $birth_place,
        $occupation,
        $contact_number,
        $pwd_number,
        $monthly_income,
        $indigent,
        $solo_parent_id,
        $ps_id,
        $register_voter,
        $purok_number,
        $house_number,
        $street,
        $id
    );

    if ($stmt->execute()) {
        header("Location: edit-household.php?id=$id&success=true");
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Edit Household</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="css/edit.household.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $PAGE = "household" ?>
                <?php require_once('./sidebar.php'); ?>
            </div>
            <div class="col-md-9">
                <div class="container">
                    <h2>Edit Household</h2>
                    <form method="post" action="update-household.php" onsubmit="return confirm('Are you sure you want to update this record?');">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>

                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>

                        <label for="middle_name">Middle Name:</label>
                        <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>"><br>

                        <label for="suffix">Suffix:</label>
                        <input type="text" name="suffix" value="<?php echo $row['suffix']; ?>"><br>

                        <label for="age">Age:</label>
                        <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>

                        <label for="gender">Gender:</label>
                        <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>

                        <label for="civil_status">Civil Status:</label>
                        <input type="text" name="civil_status" value="<?php echo $row['civil_status']; ?>"><br>

                        <label for="nationality">Nationality:</label>
                        <input type="text" name="nationality" value="<?php echo $row['nationality']; ?>"><br>

                        <label for="religion">Religion:</label>
                        <input type="text" name="religion" value="<?php echo $row['religion']; ?>"><br>

                        <label for="birth_date">Birth Date:</label>
                        <input type="text" name="birth_date" value="<?php echo $row['birth_date']; ?>"><br>

                        <label for="birth_place">Birth Place:</label>
                        <input type="text" name="birth_place" value="<?php echo $row['birth_place']; ?>"><br>

                        <label for="occupation">Occupation:</label>
                        <input type="text" name="occupation" value="<?php echo $row['occupation']; ?>"><br>

                        <label for="contact_number">Contact Number:</label>
                        <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>"><br>

                        <label for="pwd_number">PWD Number:</label>
                        <input type="text" name="pwd_number" value="<?php echo $row['pwd_number']; ?>"><br>

                        <label for="monthly_income">Monthly Income:</label>
                        <input type="text" name="monthly_income" value="<?php echo $row['monthly_income']; ?>"><br>

                        <label for="indigent">Indigent:</label>
                        <input type="text" name="indigent" value="<?php echo $row['indigent']; ?>"><br>

                        <label for="solo_parent_id">Solo Parent ID:</label>
                        <input type="text" name="solo_parent_id" value="<?php echo $row['solo_parent_id']; ?>"><br>

                        <label for="ps_id">4Ps ID:</label>
                        <input type="text" name="ps_id" value="<?php echo $row['ps_id']; ?>"><br>

                        <label for="register_voter">Register Voter:</label>
                        <input type="text" name="register_voter" value="<?php echo $row['register_voter']; ?>"><br>

                        <label for="purok_number">Purok Number:</label>
                        <input type="text" name="purok_number" value="<?php echo $row['purok_number']; ?>"><br>

                        <label for="house_number">House Number:</label>
                        <input type="text" name="house_number" value="<?php echo $row['house_number']; ?>"><br>

                        <label for="street">Street:</label>
                        <input type="text" name="street" value="<?php echo $row['street']; ?>"><br>
                        <!-- Add other fields here -->

                        <input type="submit" name="update" value="Update">
                    </form>

                    <a href="kabarangay.php">Press to go back</a>

                    <script>
                        // Check if the URL contains the "success" parameter
                        const urlParams = new URLSearchParams(window.location.search);
                        const successParam = urlParams.get('success');

                        // Display a confirmation message if the "success" parameter is present
                        if (successParam === 'true') {
                            alert('Data updated successfully!');

                            // Redirect to kabaranggay.php
                            window.location.href = 'kabarangay.php';
                        }
                    </script>
</body>

</html>