<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <title>Household</title>
      <link rel="stylesheet" type="text/css" href="css/dashboard.css">
      <link rel="stylesheet" href="css/household-list.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="flex">
        <?php $PAGE = "household"?>
        <?php require_once('./sidebar.php'); ?>
        <div class="content">
            <div style="text-align: right;">
                <form action="/search" method="get">
                    <input type="text" name="q" placeholder="Search...">
                    <button type="submit">Search</button>
                    <a href="household.html" class="upper-right-button"><ion-icon name="person-add-outline"></ion-icon></a>
            </div>
                    <div class="table-container" id="tableContainer">
                 </form>
            <table>
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Resident Number</th>
                    <th>Religion</th>
                    <th>Household</th>
                    <th>Park Number</th>
                    <th>Time Span</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>John Doe</td>
                    <td>25</td>
                    <td>R123456</td>
                    <td>Christian</td>
                    <td>1A</td>
                    <td>123</td>
                    <td>12/5/2023 9:00 AM - 5:00 PM</td>
                    </tr>
                    <!-- Add more rows with sample data as needed  -->
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
