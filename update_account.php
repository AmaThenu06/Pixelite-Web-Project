<?php
session_start();
require 'send.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture all relevant fields from the form
    $userID = $_POST['userID'];
    $Fname = $_POST['Fname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $NIC = $_POST['NIC'];
    $pw = $_POST['pw'];
    $Rpw = $_POST['Rpw'];

    // Update query to set correct fields in the users table
    $query = "UPDATE users SET Fname='$Fname', username='$username', email='$email', phone='$phone', NIC='$NIC', pw='$pw', Rpw='$Rpw' WHERE userID=$userID";

    // Execute the query
    if (mysqli_query($con, $query)) {
        // Send pop-up message using JavaScript
        echo '<script>alert("Profile updated successfully!");</script>';
        // Redirect to the user profile page
        echo '<script>window.location.href = "userprofile.php";</script>';
        exit(); // Ensure script execution stops here
    } else {
        echo "Error updating profile: " . mysqli_error($con);
    }
}
?>
