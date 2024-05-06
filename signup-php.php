<?php
require 'send.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['Fname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $NIC = $_POST['NIC'];
    $pw = $_POST['pw'];
    $Rpw = $_POST['Rpw'];

    // Insert user data into database
    $sql = "INSERT INTO users (Fname, username, email, phone, NIC, pw, Rpw) 
            VALUES ('$fullname', '$username', '$email', '$phone', '$NIC', '$pw', '$Rpw')";
    if (mysqli_query($con, $sql)) {
        // Redirect to the sign-in page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
