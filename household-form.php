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
                            <input type="number"  name="age" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text"  name="gender" placeholder="" value="" required>
                            </div>                       
                            <div class="input-box">
                                <label for="inputState">Civil Status</label>
                                <select name="civil_status" class="form-control">
                                <option selected>Choose...</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widow">Widow</option>
                                <option value="Divorce">Divorce</option>
                                </select>
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
                            <span class="details">Birth Date</span>
                            <input type="date" name="birth_date" placeholder="" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Birth Place</span>
                            <input type="text"  name="birth_place" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                            <span class="details">Time Span</span>
                            <input type="time"  name="time_span" placeholder="" >
                            </div>
                        <div class="input-box"> 
                            <span class="details">Occupation</span>
                            <input type="text"  name="occupation" placeholder="" value="" required >
                            </div>
                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="number" name="contact_number" placeholder="09" value="" required >
                            </div>
                        <div class="input-box">
                            <span class="details">type PWD Number</span>
                            <input type="number"  name="pwd_id" placeholder="Type number" >
                            </div>
                        <div class="input-box"> 
                            <span class="details">Monthly Income</span>
                            <input type="text"  name="monthly_income" placeholder="Type income" value="" required>
                            </div>
                        <div class="input-box">
                            <span class="details">Indigent?</span>
                            <input type="checkbox" name="indigent" id="isYesI" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="indigent" id="isNoI" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Solo Parent ID Number</span>
                            <input type="number" name="solo_parent_id" placeholder="Type number" >
                            <input type="checkbox" name="solo_parent_id" id="sp_NO" value="N/A">
                            <label for="isNo" required> N/A</label><br>
                            </div>
                            
                        <div class="input-box">
                            <span class="details">4Ps Id Member?</span>
                            <input type="text"  name="ps_id" placeholder="Type number" >
                            <input type="checkbox" name="ps_id" id="ps_Mno" value="no">
                            <label for="isNo" required> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Registered Voter?</span>
                            <input type="checkbox" name="register_voter" id="isYesRV" value="yes">
                            <label for="isYes"> Yes</label><br>
                            <input type="checkbox" name="register_voter" id="isNoRV" value="no">
                            <label for="isNo"> No</label><br>
                            </div>
                        <div class="input-box">
                            <span class="details">Purok Number</span>
                            <input type="number"  name="purok_number" placeholder="" value="" required>
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