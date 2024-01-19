<?php
$last_name_member = "";
if (!empty($_POST["last_name_member"])) {
    $last_name_member = htmlspecialchars($_POST["last_name_member"]);
}

$first_name_member = "";
if (!empty($_POST["first_name_member"])) {
    $first_name_member = htmlspecialchars($_POST["first_name_member"]);
}

$middle_name_member = "";
if (!empty($_POST["middle_name_member"])) {
    $middle_name_member = htmlspecialchars($_POST["middle_name_member"]);
}

$suffix_member = "";
if (!empty($_POST["suffix_member"])) {
    $suffix_member = htmlspecialchars($_POST["suffix_member"]);
}

$age_member = "";
if (!empty($_POST["age_member"])) {
    $age_member = htmlspecialchars($_POST["age_member"]);
}

$contact_number_member = "";
if (!empty($_POST["contact_number_member"])) {
    $contact_number_member = htmlspecialchars($_POST["contact_number_member"]);
}

$civilstatus_member = "";
if (!empty($_POST["civilstatus_member"])) {
    $civilstatus_member = htmlspecialchars($_POST["civilstatus_member"]);
}

$gender_member = "";
if (!empty($_POST["gender_member"])) {
    $gender_member = htmlspecialchars($_POST["gender_member"]);
}



$conn = new mysqli("localhost", "root", "", "barangayrbi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$last_name_member = $conn->real_escape_string($_POST["last_name_member"]);
$first_name_member = $conn->real_escape_string($_POST["first_name_member"]);
$middle_name_member = $conn->real_escape_string($_POST["middle_name_member"]);
$suffix_member = $conn->real_escape_string($_POST["suffix_member"]);
$age_member = $conn->real_escape_string($_POST["age_member"]);
$contact_number_member = $conn->real_escape_string($_POST["contact_number_member"]);
$civilstatus_member = $conn->real_escape_string($_POST["civilstatus_member"]);
$gender_member = $conn->real_escape_string($_POST["gender_member"]);

$sql = "INSERT INTO household_members (
    last_name_member,
    first_name_member,
    middle_name_member,
    suffix_member,
    age_member,
    contact_number_member,
    civilstatusnumber_member,
    gender_member
) VALUES (
    '$last_name_member',
    '$first_name_member',
    '$middle_name_member',
    '$suffix_member',
    '$age_member',
    '$contact_number_member',
    '$civilstatus_member',
    '$gender_member'
)";



if ($conn->query($sql) === TRUE) {
    echo "New member added successfully";
    header("Location: view_profile.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// ... Your existing PHP code for adding a member ...

echo "<script>
        alert('New member added successfully');
        window.location.href = 'view_profile.php?id={$profileId}';
      </script>";

?>
