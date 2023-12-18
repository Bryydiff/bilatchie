<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <title> Household</title>
    <link rel="stylesheet" type="text/css" href="dash/dashboard.css">
    <link rel="stylesheet" href="css/household-form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head> 
   <body>
    <div class="flex">
        <?php $PAGE = "household"?>
        <?php require_once('./sidebar.php'); ?>
        <div class="container">
            <div class="title">Household Information Form</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Enter your household name" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">House Members</span>
                        <input type="text" placeholder="Enter name" required>
                    </div>
                    <div class="input-box">
                        <span class="details"></span>
                        <input type="text" placeholder="Age" required>
                    </div>
                    <div class="input-box"> 
                        <span class="details"></span>
                        <input type="text" placeholder="Relationship" required>
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

                <div class="image-container">
                    <label for="member-picture">Select an image:</label>
                    <br>
                    <input type="file" class="meber-picture" name="member-picture[]" id="member-picture" accept="image/*">
                </div>


                <div class="button">
                    <button type="button" id="add-member">Add Member</button>
                    <input type="submit" value="Submit">
                </div>
            </form> 
      </div>
   </body>
</html>
 