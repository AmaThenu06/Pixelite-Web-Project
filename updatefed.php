<?php
session_start();
require 'send.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $msg = $_POST['message'];

    $query = "UPDATE feedback SET msg='$msg' WHERE userID=$userID";
    if (mysqli_query($con, $query)) {
        echo "<link rel='stylesheet' href='styles/sucess.css'><div class='success'>Updated successfully!<br><img src='https://www.icegif.com/wp-content/uploads/2023/08/icegif-727.gif' style='width:80%;border-radius:20px;'><br>Your Feedback : $msg<br><a href='feedback.php'><button class='submit'>Go Back</button></a>";
    } else {
        echo "Error updating feedback: " . mysqli_error($con);
    }
}
?>
