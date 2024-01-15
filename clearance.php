<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/certificates.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>

    <h2>Contact Us</h2>

    <form action="/submit_form" method="post">
        <!-- Text Input -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- Password Input -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Radio Buttons -->
        <p>Gender:</p>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">

        <!-- Checkbox -->
        <p>Subscribe to newsletter:</p>
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">

        <!-- Dropdown (Select) -->
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="usa">United States</option>
            <option value="canada">Canada</option>
            <option value="uk">United Kingdom</option>
            <!-- Add more options as needed -->
        </select>

        <!-- Textarea -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>
