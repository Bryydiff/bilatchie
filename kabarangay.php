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
                <form action="/search" method="get">
                    <input type="text" name="q" placeholder="Search...">
                    <button type="submit">Search</button>
                    <a href="household-form.php" class="upper-right-button"><ion-icon name="person-add-outline"></ion-icon></a>
            </div>
                    <div class="table-container" id="tableContainer">
                 </form>
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
                        
                         $sql = "SELECT * FROM households";
                         $results = $conn->query($sql);
                          while($row = $results->fetch_array()){
     
                           echo "<tr>
                                <td>" . $row['last_name'] . "</td>
                                <td>" . $row['first_name'] . "</td>
                                <td>" . $row['middle_name'] . "</td>
                                <td>" . $row['suffix'] . "</td>
                                <td>" . $row['age'] . "</td>
                                <td>" . $row['gender'] . "</td>
                                <td>" . $row['civil_status'] . "</td>
                                <td>" . $row['nationality'] . "</td>
                                <td>" . $row['religion'] . "</td>
                                <td>" . $row['birth_date'] . "</td>
                                <td>" . $row['birth_place'] . "</td>
                                <td>" . $row['time_span'] . "</td>
                                <td>" . $row['occupation'] . "</td>
                                <td>" . $row['contact_number'] . "</td>
                                <td>" . $row['pwd_id'] . "</td>
                                <td>" . $row['monthly_income'] . "</td>
                                <td>" . $row['indigent'] . "</td>
                                <td>" . $row['solo_parent_id'] . "</td>
                                <td>" . $row['ps_id'] . "</td>
                                <td>" . $row['register_voter'] . "</td>
                                <td>" . $row['purok_number'] . "</td>
                                <td>" . $row['house_number'] . "</td>
                                <td>" . $row['street'] . "</td>
                      
                                <td><button>Edit</button></td>
                                <td><button>Delete</button></td>
                                </tr>";
                       } 
             ?>
               
                     </tbody>
                   </table>
                 </div>
                    <!-- Add more rows with sample data as needed  -->
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