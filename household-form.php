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
                <form action="add-household.php" method="POST" id="addMember"> 
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Last Name</span>
                            <input type="text" name="last_name" placeholder="Last Name" value="Ledda" required>
                           </div>
                        <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" name="first_name" placeholder="First Name" value="Raven" required>
                          </div>
                        <div class="input-box"> 
                            <span class="details">Middle Name</span>
                            <input type="text"  name="middle_name" placeholder="Middle Name" value="Jarangue" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Suffix</span>
                            <input type="text"  name="suffix" placeholder="Suffix (Jr, Sr, I,II,III etc.)" >
                            </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text"  name="gender" placeholder="Male or Female" value="Male" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthdate</span>
                            <input type="date" name="birthdate" placeholder="Birthdate" value="11/12/2002" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birthplace</span>
                            <input type="text"  name="birthplace" placeholder="Birthplace" value="Paranaque City" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Civil Status</span>
                            <input type="text"  name="civil_status" placeholder="Civil Status" value="Single" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Nationality</span>
                            <input type="text"  name="nationality" placeholder="Nationality" value="Filipino" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Religion</span>
                            <input type="text"  name="religion" placeholder="Religion" value="Catholic" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Occupation</span>
                            <input type="text"  name="occupation" placeholder="Occupation" value="None" >
                            </div>
                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="number" name="contact_number" placeholder="Contact Number" value="09123123123123" required>
                            </div>
                        <div class="input-box">
                            <input type="checkbox" name="isPwd" id="isPwd" value="Yes">
                            <label for="isPwd"> Yes or No PWD</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">If Yes, type PWD Number</span>
                            <input type="text"  name="PWD" placeholder="PWD Number" >
                            </div>
                        <div class="input-box"> 
                            <span class="details">Family Montly Income</span>
                            <input type="text"  name="family_monthly_income" placeholder="Family Montly Income" value="wanmilyon" required>
                            </div>
                        <div class="input-box">
                        <input type="checkbox" name="indigent"  id="indigent" value="Yes">
                            <label for="indigent"> Yes or No Indigent</label><br>
                            </div>
                        <div class="input-box">
                        <input type="checkbox" name="soloParent"  id="soloParent" value="Yes">
                            <label for="soloParent"> Yes or No solo Parent</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">If Yes, Solo Parent ID Number</span>
                            <input type="number" name="is_solo_parent" placeholder="Enter number here" >
                            </div>
                        <div class="input-box"> 
                            <input type="checkbox" name="is_4ps" id="4Ps" value="Yes">
                            <label for="4Ps"> Yes or No 4Ps Member</label><br>
                            </div>
                        <div class="input-box">
                        <input type="checkbox" name="is_registered_voter" id="4Ps" value="Yes">
                            <label for="4Ps"> Yes or No Registered Voter</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Purok Number</span>
                            <input type="text"  name="purok_number" placeholder="Enter purok number here" value="basta" required>
                            </div>
                        <div class="input-box">
                            <span class="details">House Number</span>
                            <input type="text"  name="house_number" placeholder="Enter house number here" value="1" required>
                            </div>
                        <div class="input-box"> 
                            <span class="details">Street</span>
                            <input type="text"  name="street" placeholder="Enter Street Name" value="Gulaman" required>
                            </div>
                    </div>

                    <div class="image-container">
                        <label for="member-picture">Select an image:</label>
                        <br>
                        <input type="file" class="member-picture" name="member-picture" id="member-picture" accept="image/*" required>
                    </div>

                    <div class="button">
                    <button id="addMemberBtn" onclick="addMember()">Add Member</button>
                    <button id="submitRecordBtn" onclick="submitRecord()">Submit Record</button>
                    </div>
                </div>
            </form>
            <script>
                function addmember() {
                    document.getElementById("addMember").submit();
                }
            </script> 
   </body>
</html>
 