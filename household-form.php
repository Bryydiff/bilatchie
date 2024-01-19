<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/logo.png" />
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
                <?php $PAGE = "household" ?>
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
                                <input type="text" name="middle_name" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Suffix</span>
                                <input type="text" name="suffix" placeholder="Jr Sr I,II,III etc.">
                            </div>
                            <div class="input-box">
                                <span for="inputState">Age</span>
                                <select name="age" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="1-20">1-20</option>
                                    <option value="21-40">21-40</option>
                                    <option value="41-60">41-60</option>
                                    <option value="61-80">61-80</option>
                                    <option value="90-Above">90-Above</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span for="inputState">Civil Status</span>
                                <select name="civilstatus" class="form-control" placeholder="" value="" required>
                                    <option selected>Choose...</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span for="inputState">Sex</span>
                                <select name="gender" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="lgbtq">LGBTQ</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Nationality</span>
                                <input type="text" name="nationality" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Religion</span>
                                <input type="text" name="religion" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Birth Date</span>
                                <input type="date" name="birth_date" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Birth Place</span>
                                <input type="text" name="birth_place" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Time Span</span>
                                <input type="time" name="time_span" placeholder="">
                            </div>
                            <div class="input-box">
                                <span class="details">Occupation</span>
                                <input type="text" name="occupation" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Contact Number</span>
                                <input type="text" name="contact_number" placeholder="09" value="" required pattern="\d*">
                            </div>


                            <div class="input-box">
                                <span class="details">type PWD Number</span>
                                <input type="text" name="pwd_number" placeholder="Type PWD number">
                            </div>
                            <div class="input-box">
                                <span class="details">Monthly Income</span>
                                <input type="text" name="monthly_income" placeholder="Type income" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Solo Parent ID Number</span>
                                <input type="number" name="solo_parent_id" placeholder="Type number">
                            </div>

                            <div class="input-box">
                                <span class="details">4Ps Id Member?</span>
                                <input type="text" name="ps_id" placeholder="Type number">
                            </div>

                            <div class="input-box">
                                <span class="details">Purok Number</span>
                                <input type="number" name="purok_number" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">House Number</span>
                                <input type="text" name="house_number" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Street</span>
                                <input type="text" name="street" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Indigent?</span>
                                <input type="radio" name="indigent" id="isYesI" value="yes">
                                <label for="isYesI"> Yes</label>
                                <input type="radio" name="indigent" id="isNoI" value="no">
                                <label for="isNoI"> No</label>
                            </div>

                            <div class="input-box">
                                <span class="details">Registered Voter?</span>
                                <input type="radio" name="register_voter" id="isYesRV" value="yes">
                                <label for="isYesRV"> Yes</label>
                                <input type="radio" name="register_voter" id="isNoRV" value="no">
                                <label for="isNoRV"> No</label>
                            </div>


                            <div class="image-container">
                                <span for="member-picture">Select an image:</span>
                                <br>
                                <input type="file" class="member-picture" name="member-picture" id="member-picture" accept="image/*" required>
                            </div>

                            <div class="button">
                                <button id="addMemberBtn" onclick="addMember()">Add Member</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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