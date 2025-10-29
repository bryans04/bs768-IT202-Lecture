<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="Unit08Exercise_action_bs768.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" require><br><br>
       
        <label for="email">Email:</label><br>
        <input type="text" name="email" require><br><br>
       
        <label for="message">Message:</label><br>
        <textarea name="message" rows="message" require></textarea><br><br>
       
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
    </form>
    <p>Bryan Sanchez, IT202-003, Internet Applications, Unit08Exercise, bs768@njit.edu
</p>
    <p>
       <?php
           date_default_timezone_set("America/New_York");
           echo "The date and time is " . date("D M j h:ia T Y");
       ?>
    </p>
</body>
</html>