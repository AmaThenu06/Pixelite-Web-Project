<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Feedback</title>
    <link rel="stylesheet" href="styles/sucess.css">
</head>

<body>
    <?php
    // Start session
    session_start();

    // Include database connection file
    require 'send.php';

    // Check if User ID is provided
    if (isset($_POST['userID'])) {
        $userID = $_POST['userID'];

        // Fetch feedback for the given user ID
        $result = mysqli_query($con, "SELECT * FROM feedback WHERE userID = $userID");

        // Check if the query was successful and if there are any rows returned
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);
            ?>
            <!-- Display the feedback in a form for editing -->
            <div class="add-box">
                <form action="updatefed.php" method="POST" enctype="multipart/form-data">
                    <!-- Hidden input field to store the user ID -->
                    <h2>Update Feedback</h2>
                    <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
                    <!-- Textarea for editing the feedback message -->
                    <textarea placeholder="<?php echo $row['msg']; ?>" class="message" name="message"></textarea><br />
                    <!-- Submit button for updating the feedback -->
                    <button type="submit" class="submit" style="width:150px;">Edit Feedback</button>
                </form>
            </div>
            <?php
        } else {
            // If no feedback is found for the given user ID, display a message
            echo "No feedback found for the provided user ID.";
        }
    } else {
        // If no user ID is provided, display a message
        echo "User ID is not provided.";
    }
    ?>

</body>

</html>
