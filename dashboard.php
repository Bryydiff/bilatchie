<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Barangay Sto. Tomas</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/stats.css">
   </head>
     <body>
     <div class="menuToggle"></div>
    <div class="flex">
        <?php $PAGE = "dashboard"?>
        <?php require_once('./sidebar.php'); ?>
        <div class="content">

            <div class="flex-container">
                <div class="card-statistics text-blue bg-aqua">
                    Population
                </div>

                <div class="card-statistics text-blue bg-yellow">
                    Household
                </div>

                <div class="card-statistics text-blue bg-red">
                    Establishment
                </div>

                <div class="card-statistics text-blue bg-purple">
                    Clearances
                </div>

                <div class="card-statistics text-blue bg-pink">
                    Certificate
                </div>

                <div class="card-statistics text-blue bg-orange">
                    File Action
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
            this.classList.add('active')
        }
        Menulist.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>
    </body>
</html>