<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/certificates.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Citizen Form</title>
</head>
<body>

    <h2>Senior Citizen Form</h2>

    <form action="/submit_senior_citizen_form" method="post">
        <!-- Text Input - Name -->
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Date of Birth -->
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <!-- Text Input - Address -->
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <!-- Text Input - Contact Number -->
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required>
        <small>Format: 1234567890</small>

        <!-- Checkbox - Senior Citizen Status -->
        <p>Senior Citizen Status:</p>
        <input type="checkbox" id="senior_citizen" name="senior_citizen" value="yes">
        <label for="senior_citizen">Check if you are a senior citizen</label>

        <!-- Textarea - Additional Information -->
        <label for="additional_info">Additional Information:</label>
        <textarea id="additional_info" name="additional_info" rows="4"></textarea>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>
