<?php
session_start();
require 'send.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['userID'])) {
        $userID = $_POST['userID'];

        // Delete the listing from the database
        $query = "DELETE FROM feedback WHERE userID=$userID";
        if (mysqli_query($con, $query)) {
            echo "<link rel='stylesheet'href='styles/sucess.css'><div class='success'>Feedback Deleted successfully!<br><img src='https://www.icegif.com/wp-content/uploads/2023/08/icegif-727.gif' style='width:80%;border-radius:20px;'><br><a href='feedback.php'><button class='back'>Go Back</button></a>";
        } else {
            echo "Error deleting feedback: " . mysqli_error($con);
        }
    } else {
        echo "Feedback ID not provided.";
    }
}
?>
