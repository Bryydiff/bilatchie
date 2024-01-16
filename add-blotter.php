<?php
$title = "";
if (! empty($_POST["title"])) {
    $title = htmlspecialchars($_POST["title"]);
}
$description = "";
if (! empty($_POST["description"])) {
    $description = htmlspecialchars($_POST["description"]);
}
echo var_dump($_POST);

$conn = new mysqli("localhost", "root", "","barangayrbi");

$incident_date = "";
if (! empty($_POST["incident_date"])) {
    $incident_date = htmlspecialchars($_POST["incident_date"]);
}

$incident_time = "";
if (! empty($_POST["incident_time"])) {
    $incident_time = htmlspecialchars($_POST["incident_time"]);
}

$incident_location = "";
if (! empty($_POST["incident_location"])) {
    $incident_location = htmlspecialchars($_POST["incident_location"]);
}

$complainants_name = "";
if (! empty($_POST["complainants_name"])) {
    $complainants_name = htmlspecialchars($_POST["complainants_name"]);
}

$complainants_contact = "";
if (! empty($_POST["complainants_contact"])) {
    $complainants_contact = htmlspecialchars($_POST["complainants_contact"]);
}

$respondents_name = "";
if (! empty($_POST["respondents_name"])) {
    $respondents_name = htmlspecialchars($_POST["respondents_name"]);
}

$witness_1 = "";
if (! empty($_POST["witness_1"])) {
    $witness_1 = htmlspecialchars($_POST["witness_1"]);
}

$witness_2 = "";
if (! empty($_POST["witness_2"])) {
    $witness_2 = htmlspecialchars($_POST["witness_2"]);
}

$complainants_details = "";
if (! empty($_POST["complainants_details"])) {
    $complainants_details = htmlspecialchars($_POST["complainants_details"]);
}

$conn = new mysqli("localhost", "root", "", "barangayrbi");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$incident_date = $conn->real_escape_string($_POST["incident_date"]);
$incident_time = $conn->real_escape_string($_POST["incident_time"]);
$incident_location = $conn->real_escape_string($_POST["incident_location"]);
$complainants_name = $conn->real_escape_string($_POST["complainants_name"]);
$complainants_contact = $conn->real_escape_string($_POST["complainants_contact"]);
$respondents_name = $conn->real_escape_string($_POST["respondents_name"]);
$witness_1 = $conn->real_escape_string($_POST["witness_1"]);
$witness_2 = $conn->real_escape_string($_POST["witness_2"]);
$complainants_details = $conn->real_escape_string($_POST["complainants_details"]);

$sql = "INSERT INTO blotter (
    incident_date,
    incident_time,
    incident_location,
    complainants_name,
    complainants_contact,
    respondents_name,
    witness_1,
    witness_2,
    complainants_details
) VALUES (
    '$incident_date',
    '$incident_time',
    '$incident_location',
    '$complainants_name',
    '$complainants_contact',
    '$respondents_name',
    '$witness_1',
    '$witness_2',
    '$complainants_details'
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: blotter-list.php");
?>
