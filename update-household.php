<?php
$conn = mysqli_connect("localhost", "root", "", "barangayrbi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $suffix = $_POST['suffix'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];
    $occupation = $_POST['occupation'];
    $contact_number = $_POST['contact_number'];
    $pwd_number = $_POST['pwd_number'];
    $monthly_income = $_POST['monthly_income'];
    $indigent = $_POST['indigent'];
    $solo_parent_id = $_POST['solo_parent_id'];
    $ps_id = $_POST['ps_id'];
    $register_voter = $_POST['register_voter'];
    $purok_number = $_POST['purok_number'];
    $house_number = $_POST['house_number'];
    $street = $_POST['street'];

    // Use prepared statement to prevent SQL injection
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
    $stmt->bind_param("sssssssssssssssssssssss", 
    $last_name, $first_name, $middle_name, $suffix, $age, $gender, $civil_status, 
    $nationality, $religion, $birth_date, $birth_place, $occupation, $contact_number, 
    $pwd_number, $monthly_income, $indigent, $solo_parent_id, $ps_id, $register_voter, 
    $purok_number, $house_number, $street, $id);

    if ($stmt->execute()) {
        header("Location: edit-household.php?id=$id&success=true");
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>