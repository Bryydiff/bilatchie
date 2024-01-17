<?php
$conn = mysqli_connect("localhost", "root", "", "barangayrbi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['q'])) {
    $searchTerm = $conn->real_escape_string($_GET['q']);
    $sql = "SELECT * FROM households WHERE 
            last_name LIKE '%$searchTerm%' OR
            first_name LIKE '%$searchTerm%' OR
            middle_name LIKE '%$searchTerm%' OR
            suffix LIKE '%$searchTerm%' OR
            age LIKE '%$searchTerm%' OR
            gender LIKE '%$searchTerm%' OR
            civil_status LIKE '%$searchTerm%' OR
            nationality LIKE '%$searchTerm%' OR
            birth_date LIKE '%$searchTerm%' OR
            birth_place LIKE '%$searchTerm%' OR
            time_span LIKE '%$searchTerm%' OR
            occupation LIKE '%$searchTerm%' OR
            contact_number LIKE '%$searchTerm%' OR
            pwd_number LIKE '%$searchTerm%' OR
            monthly_income LIKE '%$searchTerm%' OR
            indigent LIKE '%$searchTerm%' OR
            solo_parent_id LIKE '%$searchTerm%' OR
            ps_id LIKE '%$searchTerm%' OR
            register_voter LIKE '%$searchTerm%' OR
            purok_number LIKE '%$searchTerm%' OR
            house_number LIKE '%$searchTerm%' OR
            street LIKE '%$searchTerm%'";

    $results = $conn->query($sql);
} else {
    $sql = "SELECT * FROM households";
    $results = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <title>Kabarangay</title>
      <link rel="stylesheet" type="text/css" href="css/dashboard.css">
      <link rel="stylesheet" href="css/kabarangay.css">
      <script src="https://cdn.tailwindcss.com"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="flex">
        <?php $PAGE = "kabarangay"?>
        <?php require_once('./sidebar.php'); ?>

        <?php 
        $conn = mysqli_connect("localhost", "root", "","barangayrbi");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
        ?>
        <div class="content">
            <div style="text-align: right;">
                <form action="" method="get">
                    <input type="text" name="q" placeholder="Search..." value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                    <button type="submit">Search</button>
                    <a href="household-form.php" class="upper-right-button"><ion-icon name="person-add-outline"></ion-icon></a>
                </form>
            </div>
            <div class="table-container" id="tableContainer">
                <table>
                    <thead>
                        <tr>

                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Suffix</th>
                    <th>Age</th>
                    <th>Gender</th>                   
                    <th>Civil Status</th>
                    <th>Nationality</th>
                    <th>Religion</th>
                    <th>Birth Date</th>
                    <th>Birth Place</th>
                    <th>Time Span</th>
                    <th>Occupation</th>
                    <th>Contact Number</th>
                    <th>PWD Number</th>
                    <th>Monthly Income</th>
                    <th>Indigent</th>
                    <th>Solo Parent ID </th>
                    <th>4Ps Id</th>
                    <th>Registered Voter</th>
                    <th>Purok Number</th>
                    <th>House Number</th>
                    <th>Street</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['q'])) {
                            $searchTerm = $conn->real_escape_string($_GET['q']);
                            $sql = "SELECT * FROM households WHERE 
                                    last_name LIKE '%$searchTerm%' OR
                                    first_name LIKE '%$searchTerm%' OR
                                    middle_name LIKE '%$searchTerm%' OR
                                    suffix LIKE '%$searchTerm%' OR
                                    age LIKE '%$searchTerm%' OR
                                    gender LIKE '%$searchTerm%' OR
                                    civil_status LIKE '%$searchTerm%' OR
                                    nationality LIKE '%$searchTerm%' OR
                                    birth_date LIKE '%$searchTerm%' OR
                                    birth_place LIKE '%$searchTerm%' OR
                                    time_span LIKE '%$searchTerm%' OR
                                    occupation LIKE '%$searchTerm%' OR
                                    contact_number LIKE '%$searchTerm%' OR
                                    pwd_number LIKE '%$searchTerm%' OR
                                    monthly_income LIKE '%$searchTerm%' OR
                                    indigent LIKE '%$searchTerm%' OR
                                    solo_parent_id LIKE '%$searchTerm%' OR
                                    ps_id LIKE '%$searchTerm%' OR
                                    register_voter LIKE '%$searchTerm%' OR
                                    purok_number LIKE '%$searchTerm%' OR
                                    house_number LIKE '%$searchTerm%' OR
                                    street LIKE '%$searchTerm%'"; 

                            $results = $conn->query($sql);

                            while($row = $results->fetch_assoc()){
                                echo "<tr>
                                        <td>{$row['last_name']}</td>
                                        <td>{$row['first_name']}</td>
                                        <td>{$row['middle_name']}</td>
                                        <td>{$row['suffix']}</td>
                                        <td>{$row['age']}</td>
                                        <td>{$row['gender']}</td>
                                        <td>{$row['civil_status']}</td>
                                        <td>{$row['nationality']}</td>
                                        <td>{$row['religion']}</td>
                                        <td>{$row['birth_date']}</td>
                                        <td>{$row['birth_place']}</td>
                                        <td>{$row['time_span']}</td>
                                        <td>{$row['occupation']}</td>
                                        <td>{$row['contact_number']}</td>
                                        <td>{$row['pwd_number']}</td>
                                        <td>{$row['monthly_income']}</td>
                                        <td>{$row['indigent']}</td>
                                        <td>{$row['solo_parent_id']}</td>
                                        <td>{$row['ps_id']}</td>
                                        <td>{$row['register_voter']}</td>
                                        <td>{$row['purok_number']}</td>
                                        <td>{$row['house_number']}</td>
                                        <td>{$row['street']}</td>
                                        <td><button>Edit</button></td>
                                        <td><button>Delete</button></td>
                                    </tr>";
                            }
                        } else {
                        $sql = "SELECT * FROM households";
                        $results = $conn->query($sql);

                        while($row = $results->fetch_assoc()){
                            echo "<tr>
                                <td>{$row['last_name']}</td>
                                <td>{$row['first_name']}</td>
                                <td>{$row['middle_name']}</td>
                                <td>{$row['suffix']}</td>
                                <td>{$row['age']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['civil_status']}</td>
                                <td>{$row['nationality']}</td>
                                <td>{$row['religion']}</td>
                                <td>{$row['birth_date']}</td>
                                <td>{$row['birth_place']}</td>
                                <td>{$row['time_span']}</td>
                                <td>{$row['occupation']}</td>
                                <td>{$row['contact_number']}</td>
                                <td>{$row['pwd_number']}</td>
                                <td>{$row['monthly_income']}</td>
                                <td>{$row['indigent']}</td>
                                <td>{$row['solo_parent_id']}</td>
                                <td>{$row['ps_id']}</td>
                                <td>{$row['register_voter']}</td>
                                <td>{$row['purok_number']}</td>
                                <td>{$row['house_number']}</td>
                                <td>{$row['street']}</td>
                                <td><a href='view_profile.php?id={$row['id']}'>View</a></td>
                                <td><button>Edit</button></td>
                                <td><button>Delete</button></td>
                                    </tr>";
                            }
                        }
                        ?> 
                       </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let sidebar = document.querySelector('.sidebar');
        menuToggle.onclick = function () {
            menuToggle.classList.toggle('active');
            sidebar.classList.toggle('active');
        }
        let Menulist = document.querySelectorAll('.Menulist li');
        function activeLink() {
            Menulist.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }
        Menulist.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>
</body>
</html>