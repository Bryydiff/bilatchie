<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <title>Blotter </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blotter-form.css">
    <link rel="stylesheet" href="css/dashboard.css">
   </head> 
   <body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
        <?php $PAGE = "blotter-list"?>
        <?php require_once('./sidebar.php'); ?>
            </div>
        <div class="col-md-9">
            <div class="container">
                <div class="title">Blotter</div>
                <form action="add-blotter.php" method="POST" id="addBlotter"> 
                <div class="user-details">
            <div class="input-box">
                <span for="incident_date">Incident Date:</span>
                <input type="date" name="incident_date" required><br>    
                </div>
            <div class="input-box">
                <span for="incident_time">Incident Time:</span>
                <input type="time" name="incident_time" required><br>
                </div>
            <div class="input-box">
                <span class="details">Incident Location</span>
                <input type="text"  name="incident_location"  placeholder=""  required>
                </div>    
             <div class="input-box">
                <span class="details">Complainant's Name</span>
                <input type="text"  name="complainants_name"  placeholder=""  required>
                </div>
            <div class="input-box">
                <span class="details">Complainant's Contact</span>
                <input type="text"  name="complainants_contact"  placeholder=""  required>
                </div>
            <div class="input-box">
                <span class="details">Respondent's Name</span>
                <input type="text"  name="respondents_name"  placeholder=""  required>
                </div>
            <div class="input-box">
                <span class="details">Witness 1</span>
                <input type="text"  name="witness_1"  placeholder=""  required>
                </div>
            <div class="input-box">
                <span class="details">Witness 2</span>
                <input type="text"  name="witness_2"  placeholder=""  required>
                </div>
            <div class="text-area-ComplainantDetails">
                <span class="details">Complainant's Details:</span>
                <textarea type="text"  name="complainants_details"  placeholder=""  required></textarea>
                </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Gender</span>    
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                </label>
            </div>
        </div>
        <div class="button">
                    <button id="addBlotterBtn" onclick="addBlotter()">Add Blotter</button>
                  
                    <!-- <button id="submitRecordBtn" onclick="submitRecord()">Submit Record</button> -->
                    </div>
        <!-- <div class="button">
            <input type="submit" value="Submit">
        </div> -->
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                function addBlotter() {
                    document.getElementById("addBlotter").submit();
                }
            
            </script> 
      </div>
   </body>
</html>
 