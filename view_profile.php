<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Profile View</title>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/view_profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" type="text/css" href="css/view_profile.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-gray-100">
  <div class="flex">
    <?php $PAGE = "view_profile"; ?>
    <?php require_once('./sidebar.php'); ?>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "barangayrbi");

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
      $profileId = $conn->real_escape_string($_GET['id']);

      $sqlHousehold = "SELECT * FROM households WHERE id = $profileId";
      $resultHousehold = $conn->query($sqlHousehold);

      if ($resultHousehold && $resultHousehold->num_rows > 0) {
        $profile = $resultHousehold->fetch_assoc();
    ?>
        <form action="house-member-form.php" method="post">
          <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-8">
            <h1 class="text-3xl font-bold mb-4"><?= "{$profile['first_name']} {$profile['last_name']} is the head of household" ?></h1>

            <div class="flex flex-wrap">
              <?php
              $profileDetails = [
                'Suffix' => $profile['suffix'],
                'Age' => $profile['age'],
                'Gender' => $profile['gender'],
                'Civil Status' => $profile['civil_status'],
                'Religion' => $profile['religion'],
                'Birth Date' => $profile['birth_date'],
                'Birth Place' => $profile['birth_place'],
                'Time Span' => $profile['time_span'],
                'Occupation' => $profile['occupation'],
                'Contact Number' => $profile['contact_number'],
                'PWD Number' => $profile['pwd_number'],
                'Monthly Income' => $profile['monthly_income'],
                'Indigent' => $profile['indigent'],
                'Solo Parent ID' => $profile['solo_parent_id'],
                '4Ps ID' => $profile['ps_id'],
                'Registered Voter' => $profile['register_voter'],
                'Purok Number' => $profile['purok_number'],
                'House Number' => $profile['house_number'],
                'Street' => $profile['street'],
              ];

              foreach ($profileDetails as $label => $value) {
                echo "<p class='flex-auto mb-2 mr-4'><strong>{$label}:</strong> {$value}</p>";
              }
              ?>
            </div>
          </div>

          <?php
          // Fetch household members
          $sqlMembers = "SELECT * FROM household_members WHERE id = $profileId";
          $resultMembers = $conn->query($sqlMembers);

          if ($resultMembers->num_rows > 0) {
            echo '<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-8">';
            echo '<h2 class="text-2xl font-bold mb-4">Household Members</h2>';
            echo '<div class="flex flex-wrap">';

            while ($member = $resultMembers->fetch_assoc()) {
              echo "<div class='flex-auto mb-2 mr-4'>";
              echo "<p><strong>Last Name:</strong> {$member['last_name_member']}</p>";
              echo "<p><strong>First Name:</strong> {$member['first_name_member']}</p>";
              echo "<p><strong>Middle Name:</strong> {$member['middle_name_member']}</p>";
              echo "<p><strong>Suffix:</strong> {$member['suffix_member']}</p>";
              echo "<p><strong>Age:</strong> {$member['age_member']}</p>";
              echo "<p><strong>Gender:</strong> {$member['gender_member']}</p>";
              echo "<p><strong>Contact Number:</strong> {$member['contact_number_member']}</p>";
              echo "<p><strong>Civil Status:</strong> {$member['civilstatusnumber_member']}</p>";
              echo "</div>";
            }

            echo '</div>';
            echo '</div>';
          } else {
            echo '<p>No household details found.</p>';
          }
          ?>
          <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-md mt-8">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Add Member
            </button>
          </div>
        </form>
      <?php } ?>
    <?php } ?>
  </div>
</body>

</html>
