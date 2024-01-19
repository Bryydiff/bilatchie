<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Household Member Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" href="css/house-member-form.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $PAGE = "" ?>
                <?php require_once('./sidebar.php'); ?>
            </div>
            <div class="col-md-9">
                <div class="container">
                    <div class="title">Household Member Registration</div>
                    <form action="add-household-member.php" method="POST" id="addMember">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Last Name</span>
                                <input type="text" name="last_name_member" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">First Name</span>
                                <input type="text" name="first_name_member" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Middle Name</span>
                                <input type="text" name="middle_name_member" placeholder="" value="" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Suffix</span>
                                <input type="text" name="suffix_member" placeholder="Jr Sr I,II,III etc.">
                            </div>
                            <div class="input-box">
                                <span for="inputState">Age</span>
                                <select name="age_member" class="form-control" placeholder="" value="" required>
                                    <option selected>Choose...</option>
                                    <option value="1-20">1-20</option>
                                    <option value="21-40">21-40</option>
                                    <option value="41-60">41-60</option>
                                    <option value="61-80">61-80</option>
                                    <option value="90-Above">90-Above</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Contact Number</span>
                                <input type="text" name="contact_number_member" placeholder="09" value="" pattern="\d*" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Civil Status</span>
                                <select name="civilstatus_member" class="form-control" placeholder="" value="" required>
                                    <option selected>Choose...</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Sex</span>
                                <select name="gender_member" class="form-control" placeholder="" value="" required>
                                    <option selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="lgbtq">LGBTQ</option>
                                </select>
                            </div>
                        </div>

                        <div class="image-container">
                            <span for="member-picture_member">Select an image:</span>
                            <br>
                            <input type="file" class="member-picture_member" name="member-picture_member" id="member-picture_member" accept="image/*" required>
                        </div>

                        <div class="button">
                            <button type="button" onclick="addMember()">Add Member</button>
                        </div>

                        <script>
                            function addMember() {
                                // Serialize form data
                                var formData = $('#addMember').serialize();

                                // Use AJAX to submit the form
                                $.ajax({
                                    type: 'POST',
                                    url: 'add-household-member.php', // Update the URL to the correct file handling form submission
                                    data: formData,
                                    success: function(response) {
                                        // Assuming your response contains the updated HTML content for kabaranggay.php
                                        // Update the content on kabaranggay.php
                                        $('#kabaranggayContent').html(response);
                                    },
                                    error: function(error) {
                                        console.log('Error:', error);
                                    }
                                });
                            }
                        </script>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>