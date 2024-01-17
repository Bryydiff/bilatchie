<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Profile View</title>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/view_profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-gray-100">
  <div class="flex">
    <?php $PAGE = "view_profile"?>
    <?php require_once('./sidebar.php'); ?>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "barangayrbi");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
      $profileId = $conn->real_escape_string($_GET['id']);
      $sql = "SELECT * FROM households WHERE id = $profileId";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $profile = $result->fetch_assoc();
        echo "<div class='max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-8'>";
        echo "<h1 class='text-3xl font-bold mb-4'>{$profile['first_name']} {$profile['last_name']} Profile</h1>";
        
        // Wrap each piece of information in a container with flex class
        echo "<div class='flex flex-wrap'>";
        echo "<p class='flex-auto mb-2 mr-4'>Suffix: {$profile['suffix']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Age: {$profile['age']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Gender: {$profile['gender']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Civil Status: {$profile['civil_status']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Religion: {$profile['religion']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Birth Date: {$profile['birth_date']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Birth Place: {$profile['birth_place']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Time Span: {$profile['time_span']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Occupation: {$profile['occupation']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Contact Number: {$profile['contact_number']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>PWD Number: {$profile['pwd_number']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Monthly Income: {$profile['monthly_income']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Indigent: {$profile['indigent']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Solo Parent ID: {$profile['solo_parent_id']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>4Ps ID: {$profile['ps_id']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Registered Voter: {$profile['register_voter']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Purok Number: {$profile['purok_number']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>House Number: {$profile['house_number']}</p>";
        echo "<p class='flex-auto mb-2 mr-4'>Street: {$profile['street']}</p>";

        echo "</div>"; // Close the flex container

        echo "</div>"; // Close the profile container

      } else {
        echo "Profile not found";
      }
    } else {
      echo "Invalid profile ID";
    }
    ?>
    <a href="house-member.php" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4 inline-block">Add a member of household</a>
  </div>
</body>

</html>
