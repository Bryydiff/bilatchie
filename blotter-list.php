<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blotter</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="css/blotter-list.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="flex">
        <?php $PAGE = "blotter-list"?>
        <?php require_once('./sidebar.php'); ?>

        <?php 
        $conn = new mysqli("localhost", "root", "", "barangayrbi");
        ?>
        <div class="content">
            <div style="text-align: right;">
                <form action="" method="get">
                    <input type="text" name="q" placeholder="Search...">
                    <button type="submit">Search</button>
                    <a href="blotter-form.php" class="upper-right-button"><ion-icon name="person-add-outline"></ion-icon></a>
                </form>
            </div>
            <div class="table-container" id="tableContainer">
                <table>
                    <thead>
                        <tr>
                            <th>Incident Date</th>
                            <th>Incident Time</th>
                            <th>Incident Location</th>
                            <th>Complainant's Name</th>
                            <th>Complainant's Contact</th>
                            <th>Respondent's Name</th>
                            <th>Witness 1</th>
                            <th>Witness 2</th>
                            <th>Complainant's Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        if (isset($_GET['q'])) {
                            $searchTerm = $conn->real_escape_string($_GET['q']);
                            $sql = "SELECT * FROM blotter WHERE 
                                    incident_date LIKE '%$searchTerm%' OR
                                    incident_time LIKE '%$searchTerm%' OR
                                    incident_location LIKE '%$searchTerm%' OR
                                    complainants_name LIKE '%$searchTerm%' OR
                                    complainants_contact LIKE '%$searchTerm%' OR
                                    respondents_name LIKE '%$searchTerm%' OR
                                    witness_1 LIKE '%$searchTerm%' OR
                                    witness_2 LIKE '%$searchTerm%' OR
                                    complainants_details LIKE '%$searchTerm%'";

                            $results = $conn->query($sql);

                            while($row = $results->fetch_assoc()){
                                echo "<tr>
                                        <td>{$row['incident_date']}</td>
                                        <td>{$row['incident_time']}</td>
                                        <td>{$row['incident_location']}</td>
                                        <td>{$row['complainants_name']}</td>
                                        <td>{$row['complainants_contact']}</td>
                                        <td>{$row['respondents_name']}</td>
                                        <td>{$row['witness_1']}</td>
                                        <td>{$row['witness_2']}</td>
                                        <td>{$row['complainants_details']}</td>
                                        <td><button>Edit</button></td>
                                        <td><button>Delete</button></td>
                                    </tr>";
                            }
                        } else {
                            // Display all records when no search query is present
                            $sql = "SELECT * FROM blotter";
                            $results = $conn->query($sql);

                            while($row = $results->fetch_assoc()){
                                echo "<tr>
                                        <td>{$row['incident_date']}</td>
                                        <td>{$row['incident_time']}</td>
                                        <td>{$row['incident_location']}</td>
                                        <td>{$row['complainants_name']}</td>
                                        <td>{$row['complainants_contact']}</td>
                                        <td>{$row['respondents_name']}</td>
                                        <td>{$row['witness_1']}</td>
                                        <td>{$row['witness_2']}</td>
                                        <td>{$row['complainants_details']}</td>
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
                this.classList.add('active')
            }
            Menulist.forEach((item) =>
                item.addEventListener('click', activeLink));
        </script>
    </body>
</html>
