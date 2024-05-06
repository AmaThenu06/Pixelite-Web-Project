<?php
session_start();

// Include the database connection file
require 'send.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['pw'];

    // SQL query to retrieve user data based on username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        // Error handling for SQL query
        echo "Error: " . mysqli_error($con);
        exit();
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if ($password == $row['pw']) { // Assuming passwords are stored as plaintext for this example, ideally, they should be hashed
            // Password is correct, create session variables
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];
            // Redirect based on role
            if ($row['role'] == 'user') {
                header("Location: index_login.php");
                exit();
            } elseif ($row['role'] == 'admin') {
                header("Location: admin.php");
                exit();
            } else {
                // Handle other roles or unexpected values
                echo "Invalid role";
                exit();
            }
        } else {
            // Password is incorrect
            echo "Invalid password";
            exit();
        }
    } else {
        // Username not found
        echo "User not found";
        exit();
    }
}

mysqli_close($con);
?>
