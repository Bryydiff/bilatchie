<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <title> Household</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="css/household-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head> 
   <body>
    <div class="flex">
        <?php $PAGE = "household"?>
        <?php require_once('./sidebar.php'); ?>
        <div class="container">
                <div class="title">Personal Information</div>
                <form action="#"> 
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            <input type="text" placeholder="Last Name" required>
                           </div>
                        <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" placeholder="First Name" required>
                          </div>
                        <div class="input-box"> 
                            <span class="details">Middle Name</span>
                            <input type="text" placeholder="Middle Name" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Suffix</span>
                            <input type="text" placeholder="Suffix (Jr, Sr, I,II,III etc.)" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text" placeholder="Male or Female" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthdate</span>
                            <input type="date" placeholder="Birthdate" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthplace</span>
                            <input type="text" placeholder="Birthplace" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Age</span>
                            <input type="text" placeholder="Age" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Civil Status</span>
                            <input type="text" placeholder="Civil Status" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Nationality</span>
                            <input type="text" placeholder="Nationality" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Religion</span>
                            <input type="text" placeholder="Religion" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Occupation</span>
                            <input type="text" placeholder="Occupation" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="text" placeholder="Contact Number" required>
                            </div>
                        <div class="input-box">
                            <span class="details">PWD?</span>
                            <input type="text" placeholder="Yes or No" required>
                            </div>
                        <div class="input-box">
                            <span class="details">If Yes, type PWD Number</span>
                            <input type="text" placeholder="PWD Number" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Family Montly Income</span>
                            <input type="text" placeholder="Family Montly Income" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Indigent?</span>
                            <input type="text" placeholder="Yes or No" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Solo Parent?</span>
                            <input type="text" placeholder="Yes or No" required>
                            </div>
                        <div class="input-box">
                            <span class="details">If Yes, Solo Parent ID Number</span>
                            <input type="text" placeholder="Enter number here" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">4Ps Member?</span>
                            <input type="text" placeholder="Yes or No" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Registered voter?</span>
                            <input type="text" placeholder="Yes or No" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Purok Number</span>
                            <input type="text" placeholder="Enter purok number here" required>
                            </div>
                        <div class="input-box">
                            <span class="details">House Number</span>
                            <input type="text" placeholder="Enter house number here" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Street</span>
                            <input type="text" placeholder="Enter Street Name" required>
                            </div>
                    </div>

                    <div class="image-container">
                        <label for="member-picture">Select an image:</label>
                        <br>
                        <input type="file" class="member-picture" name="member-picture[]" id="member-picture" accept="image/*">
                    </div>

                    <div class="button">
                    <button id="addMemberBtn" onclick="addMember()">Add Member</button>
                    <button id="submitRecordBtn" onclick="submitRecord()">Submit Record</button>

                    </div>
                </div>
            </form> 
   </body>
</html>
 