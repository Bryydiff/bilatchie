<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/certificates.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Indigency Form</title>
</head>
<body>

    <h2>Barangay Indigency Form</h2>

    <form action="/submit_indigency_form" method="post">
        <!-- Text Input - Name -->
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Text Input - Address -->
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <!-- Date of Birth -->
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <!-- Text Input - Occupation -->
        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation" name="occupation" required>

        <!-- Checkbox - Indigent Status -->
        <p>Indigent Status:</p>
        <input type="checkbox" id="indigent" name="indigent" value="yes">
        <label for="indigent">Check if you qualify as an indigent</label>

        <!-- Textarea - Purpose -->
        <label for="purpose">Purpose of Indigency Certificate:</label>
        <textarea id="purpose" name="purpose" rows="4" required></textarea>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>
