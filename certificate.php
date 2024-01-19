<!DOCTYPE html>
<html>


<head>
    <title>Certificate</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/certificates.css">


</head>

<body>
    <div class="menuToggle"></div>
    <div class="flex">
        <?php $PAGE = "certificate" ?>
        <?php require_once('./sidebar.php'); ?>
        <div class="content">
            <div class="container">
                <button onclick="location.href ='clearance.php' " style="--clr:#6eff3e"><span>Clearance</span><i></i></button>
                <button onclick="location.href ='indigency.php' " style="--clr:#6eff3e"><span>Indigency</span><i></i></button>
                <button onclick="location.href ='idcard/index.php' " style="--clr:#6eff3e"><span>Barangay Id</span><i></i> </button>
                <button onclick="location.href ='senior.php' " style="--clr:#6eff3e"><span>Senior</span><i></i></button>
            </div>
        </div>
    </div>
    </div>
</body>


</html>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>