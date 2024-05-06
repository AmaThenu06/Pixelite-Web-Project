<?php
session_start();
require 'send.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// Retrieve the username of the logged-in user
$username = $_SESSION['username'];

// Query to fetch the user's details from the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);

// Check if the query executed successfully
if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // Check if the user is a buyer
    if ($user['role'] !== 'user') {
        // If not a buyer, redirect to the index page or appropriate page
        header("Location: index.php"); // Change this to the appropriate page
        exit();
    }
} else {
    // Handle error if user details not found
    echo "Error fetching user details";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile || GalleryGavel</title>
    <link rel="icon" href="images/fav-01-01.png">
    <link rel="stylesheet" href="styles/userprofile.css">

    <script src="https://kit.fontawesome.com/42e5148630.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        table {
            line-height: 3;
            border-collapse: collapse;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #ccc;
        }

        td {
            padding-left: 80px;
        }

        .actions {
            display: flex;
        }
    </style>

    <!--Nav bar-->
    <div class="navbar">
        
            <img class= "logo" src="images/2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
                <a href="userprofile.php"><img src="images/prof.png" alt="" width="50px" style="border-radius:50%; cursor:pointer;"></a>
                <a href="logout.php"><button class="btn1" style="margin-left:-70px;">LOG OUT <i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
                <div class="tag">
                <i class="fa-solid fa-bars"></i>
                </div>
    </div>

    <div class="dropdown_menu">
            <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <a href="logout.php"><button class="btn1">LOG OUT</button></a>
    </div>
    </header>

    <!--Profile container-->
    <div class="profile-box" style="margin:30px">
        <h1><span>Welcome, <?php echo $user['Fname']; ?>!</span></h1>
        <p>Your user profile details:</p>
        <br>
        <div class="details">
            <table width="100%" style="">
                <tr>
                    <td>
                        <h2>Name:</h2>
                    </td>
                    <td><?php echo $user['Fname']; ?></td>
                </tr>
                <tr>
                    <td>
                        <h2>Username:</h2>
                    </td>
                    <td><?php echo $user['username']; ?></td>
                </tr>
                <tr>
                    <td>
                        <h2>Email:</h2>
                    </td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
                <tr>
                    <td>
                        <h2>Phone No:</h2>
                    </td>
                    <td><?php echo $user['phone']; ?></td>
                </tr>
                <tr>
                    <td>
                        <h2>NIC:</h2>
                    </td>
                    <td><?php echo $user['NIC']; ?></td>
                </tr>

            </table>
        </div>
        <br><br>

        <div class="actions">

            <form action="update_acc.php" method="POST">
                <input type="hidden" name="userID" value="<?php echo $user['userID']; ?>">
                <button type="submit" class='btn2'>Edit Profile <i class='fa-solid fa-pen'></i></button>
            </form>

            <form action="delete_account.php" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this account');">
                <button type="submit" class="btn1">Delete Account <i class="fa-solid fa-trash"></i></button>
            </form>

        </div>
    </div>

    <!--footer -->

    <section class="footer">
        <p>123 Main Street, City, Country | Phone: +123 456 789 | Email: info@example.com</p>
        <p>&copy; 2024 Pixelite.com || All rights reserved.</p>
    </section>
</body>

</html>
