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

$last_name = "";
if (! empty($_POST["last_name"])) {
    $last_name = htmlspecialchars($_POST["last_name"]);
}

$first_name = "";
if (! empty($_POST["first_name"])) {
    $first_name = htmlspecialchars($_POST["first_name"]);
}

$middle_name = "";
if (! empty($_POST["middle_name"])) {
    $middle_name = htmlspecialchars($_POST["middle_name"]);
}

$suffix = "";
if (! empty($_POST["suffix"])) {
    $suffix = htmlspecialchars($_POST["suffix"]);
}

$age = "";
if (! empty($_POST["age"])) {
    $age= htmlspecialchars($_POST["age"]);
}

$gender = "";
if (! empty($_POST["gender"])) {
    $gender = htmlspecialchars($_POST["gender"]);
}

$civil_status = "";
if (! empty($_POST["civil_status"])) {
    $civil_status = htmlspecialchars($_POST["civil_status"]);
}

$nationality = "";
if (! empty($_POST["nationality"])) {
    $nationality = htmlspecialchars($_POST["nationality"]);
}

$religion = "";
if (! empty($_POST["religion"])) {
    $religion = htmlspecialchars($_POST["religion"]);
}

$birth_date = "";
if (! empty($_POST["birth_date"])) {
    $birth_date = htmlspecialchars($_POST["birth_date"]);
}

$birth_place = "";
if (! empty($_POST["birth_place"])) {
    $birth_place = htmlspecialchars($_POST["birth_place"]);

}
$time_span = "";
if (! empty($_POST["time_span"])) {
    $time_span = htmlspecialchars($_POST["time_span"]);
}
$occupation= "";
if (! empty($_POST["occupation"])) {
    $occupation = htmlspecialchars($_POST["occupation"]);
}
$contact_number = "";
if (! empty($_POST["contact_number"])) {
    $contact_number = htmlspecialchars($_POST["contact_number"]);
}

$pwd_id = "";
if (! empty($_POST["pwd_id"])) {
    $pwd_id = htmlspecialchars($_POST["pwd_id"]);
}

$monthly_income = "";
if (! empty($_POST["monthly_income"])) {
    $monthly_income = htmlspecialchars($_POST["monthly_income"]);
}
$indigent = "";
if (! empty($_POST["indigent"])) {
    $indigent = htmlspecialchars($_POST["indigent"]);
}
$solo_parent_id = "";
if (! empty($_POST["solo_parent_id"])) {
    $solo_parent_id = htmlspecialchars($_POST["solo_parent_id"]);
}
$ps_id = "";
if (! empty($_POST["ps_id"])) {
    $ps_id = htmlspecialchars($_POST["ps_id"]);
}
$register_voter = "";
if (! empty($_POST["register_voter"])) {
    $register_voter = htmlspecialchars($_POST["register_voter"]);
}
$purok_number = "";
if (! empty($_POST["purok_number"])) {
    $purok_number = htmlspecialchars($_POST["purok_number"]);
}
$house_number = "";
if (! empty($_POST["house_number"])) {
    $house_number = htmlspecialchars($_POST["house_number"]);
}
$street = "";
if (! empty($_POST["street"])) {
    $street = htmlspecialchars($_POST["street"]);
}


$sql = "INSERT INTO households (
    last_name,
    first_name,
    middle_name,
    suffix,
    age,
    gender,
    civil_status,
    nationality,
    religion,
    birth_date,
    birth_place,
    time_span,
    occupation,
    contact_number,
<<<<<<< HEAD
    pwd_number,
=======
    pwd_id,
>>>>>>> 665951b923d24ef2eacac8bb85f55b92586cc657
    monthly_income,
    indigent,
    solo_parent_id,
    ps_id,
    register_voter,
    purok_number,
    house_number,
    street)
VALUES (
    '$last_name',
    '$first_name',
    '$middle_name',
    '$suffix',
    '$age',
    '$gender',
    '$civil_status',
    '$nationality',
    '$religion',
    '$birth_date',
    '$birth_place',
    '$time_span',
    '$occupation',
    '$contact_number',
<<<<<<< HEAD
    '$pwd_number',
=======
    '$pwd_id',
>>>>>>> 665951b923d24ef2eacac8bb85f55b92586cc657
    '$monthly_income',
    '$indigent',
    '$solo_parent_id',
    '$ps_id',
    '$register_voter',
    '$purok_number',
    '$house_number',
    '$street'   
)";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: kabarangay.php");
?>