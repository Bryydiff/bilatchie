<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <title> Household</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="css/household-form.css">
   </head> 
   <body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
        <?php $PAGE = "household"?>
        <?php require_once('./sidebar.php'); ?>
            </div>
        <div class="col-md-9">
        <div class="container">
                <div class="title">Personal Information</div>
                <form action="add-household.php" method="POST" id="addMember"> 
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            <input type="text" name="last_name" placeholder="" value="" required>
                           </div>
                        <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" name="first_name" placeholder="" value="" required>
                          </div>
                        <div class="input-box"> 
                            <span class="details">Middle Name</span>
                            <input type="text"  name="middle_name" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                            <span class="details">Suffix</span>
                            <input type="text"  name="suffix" placeholder="Jr Sr I,II,III etc." >
                            </div>
                        <div class="input-box">
                            <span class="details">Age</span>
                            <input type="text"  name="age" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text"  name="gender" placeholder="" value="" required>
                            </div>                       
                            <div class="input-box">
                            <span class="details">Civil Status</span>
                            <input type="text"  name="civil_status" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                            <span class="details">Nationality</span>
                            <input type="text"  name="nationality" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                            <span class="details">Religion</span>
                            <input type="text"  name="religion" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthdate</span>
                            <input type="date" name="birthdate" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthplace</span>
                            <input type="text"  name="birthplace" placeholder="" value="" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Occupation</span>
                            <input type="text"  name="occupation" placeholder="" value="" >
                            </div>
                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="number" name="contact_number" placeholder="09" >
                            </div>
                        <div class="input-box">
                            <span class="details">PWD?</span>
                            <input type="checkbox" name="isYesPWD" id="isYesP" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="isNoPWD" id="isNoP" value="no">
                            <label for="isNo"> No</label><br>
                            </div>

                            
                        <div class="input-box">
                            <span class="details">If Yes, type PWD Number</span>
                            <input type="text"  name="PWD" placeholder="Type number" >
                            </div>
                        <div class="input-box"> 
                            <span class="details">Family Montly Income</span>
                            <input type="text"  name="family_monthly_income" placeholder="Type income" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Idigent?</span>
                            <input type="checkbox" name="IndYes" id="isYesI" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="IndNo" id="isNoI" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Solo Parent?</span>
                            <input type="checkbox" name="SoloParentYes" id="YesSoloParent" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="SoloParentNo" id="NoSoloParent" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">If Yes, Solo Parent ID Number</span>
                            <input type="number" name="is_solo_parent" placeholder="Type number" >
                            </div>
                        <div class="input-box">
                            <span class="details">4Ps Member?</span>
                            <input type="checkbox" name="isYes4ps" id="isYes4" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="isNo4ps" id="isNo4" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Registered Voter?</span>
                            <input type="checkbox" name="isYesRegVot" id="isYesRV" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="isNoRegVot" id="isNoRV" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Purok Number</span>
                            <input type="text"  name="purok_number" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">House Number</span>
                            <input type="text"  name="house_number" placeholder="" value="" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Street</span>
                            <input type="text"  name="street" placeholder="" value="" required>
                            </div>
                    </div>

                    <div class="image-container">
                        <label for="member-picture">Select an image:</label>
                        <br>
                        <input type="file" class="member-picture" name="member-picture" id="member-picture" accept="image/*" required>
                    </div>

                    <div class="button">
                    <button id="addMemberBtn" onclick="addMember()">Add Member</button>
                    <!-- <button id="submitRecordBtn" onclick="submitRecord()">Submit Record</button> -->
                    </div>
                </div>
        </div>
        </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
                function addmember() {
                    document.getElementById("addMember").submit();
                }
            </script> 
   </body>
</html>
 