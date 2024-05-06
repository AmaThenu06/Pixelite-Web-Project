    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Send Feedbacks</title>
        <link rel="stylesheet" href="styles/sucess.css">
    </head>
    <body>
        <?php
        require 'send.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $msg = $_POST["message"];

            // Insert feedback information into database
            $sql = "INSERT INTO feedback (username, email, msg) 
                    VALUES ('$username', '$email', '$msg')";
            if (mysqli_query($con, $sql)) {
                echo "<link rel='stylesheet' href='styles/sucess.css'><div class='success'>Feedback added successfully!<br><img src='https://www.icegif.com/wp-content/uploads/2023/08/icegif-727.gif' style='width:60%;border-radius:20px;'><br>Your Feedback : $msg<br>";
                ?>
                <form action="updatefeedback.php" method="POST">
                    <input type="hidden" name="userID" value="<?php echo mysqli_insert_id($con); ?>">
                    <button type="submit" class='submit'>Edit Feedback <i class='fa-solid fa-trash'></i></button>
                </form>
                <form action="deletefeedback.php" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                    <input type="hidden" name="userID" value="<?php echo mysqli_insert_id($con); ?>">
                    <button type="submit" class='back'>Delete Feedback <i class='fa-solid fa-trash'></i></button>
                </form>
                <a href='feedback.php'><button class='goback'>Go Back</button></a>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        }
        ?>
    </body>
    </html>
