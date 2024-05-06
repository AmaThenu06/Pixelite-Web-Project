<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reservation.css">

    <title>Reservation</title>
</head>

<body
    style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0)),  url('https://www.peerspace.com/resources/wp-content/uploads/austin-indoor-outdoor-event-space-zilker-park-1024x683.jpeg');background-size: cover;backdrop-filter: blur(5px);">
    <header>
        <!-- <h4>header</h4> -->
        <div class="header_wrapper">

            <div class="logo">
                <img src="./images/WhatsApp Image 2024-04-29 at 11.29.21_cb6dbac0.jpg" alt="">
            </div>
            <div class="nav_links">
                <ul>
                    <li id="home">HOME</li>
                    <li>SERVICES</li>
                    <li>PORTFOLIO</li>
                    <li>BOOK NOW</li>
                    <li>CONTACT US</li>
                    <li>ABOUT US</li>
                </ul>

                <a href="logout.php">
                    <button id="logout_btn">LOG OUT</button>
                </a>
            </div>
            <div class="user">
                <img src="./images/1920x1200-img_329115.png" alt="">
                <p>Welcome,User_123</p>
            </div>
        </div>
    </header>
    <div class="CDate">
        <p id="currentDate"></p>
    </div>
    <div class="parent-form">

        <div class="form-container">
            <form action="./book.php" method="post">
                <div class="form-content">
                    <div class="input-field">
                        <label for="Name">BOOKING REQUESTING PERSON’S NAME: </label>
                        <input type="text" id="Name" name="bookingName" required>
                    </div>
                    <div class="input-field">
                        <label for="email">EMAIL: </label>
                        <input type="email" id="email" name="emailAdress" required>
                        <p id="validCheckMail"></p>
                    </div>
                    <div class="input-field">
                        <label for="mobileNumber">CONTACT NUMBER: </label>
                        <input type="tel" id="mobileNumber" name="contactNumber" placeholder="+94 xx xxxxxxx" required>
                        <p id="validCheckNum"></p>
                    </div>
                    <div class="input-field">
                        <label for="date">EVENT DATE: </label>
                        <input type="date" id="date" name="bookingDate" required>
                        <p id="checkDate"></p>
                    </div>
                    <div class="input-field">
                        <label for="time">TIME (START): </label>
                        <input type="time" id="time" name="bookingTime" required>
                    </div>
                    <div class="input-field">
                        <label for="event">SELECT YOUR EVENT: </label>
                        <select name="eventCategory" id="event" required>
                            <option value="graduation" selected>GRADUATION</option>
                            <option value="batch party">BATCH PARTY</option>
                            <option value="exhibition">EXHIBITION</option>
                            <option value="anniversary celebration">ANNIVERSARY CELEBRATION</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="eventType">TYPE OF THE EVENT: </label>
                        <select name="eventType" id="eventType" required>
                            <option value="indoor" selected>INDOOR</option>
                            <option value="outdoor">OUTDOOR</option>
                            <option value="indoor & outdoor">INDOOR & OUTDOOR</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="eventMang">EVENT MANAGER'S NAME: </label>
                        <input type="text" id="eventMang" name="eventMangerName">
                    </div>
                    <div class="input-field">
                        <label for="location">EVENT LOCATION (RECEPTION OR OTHER): </label>
                        <input type="text" id="location" name="bookingLocation" required>
                    </div>
                    <div class="input-field">
                        <label for="guestNo">NO. OF GUESTS: </label>
                        <input type="number" id="guestNo" name="noOfguests" required>
                        <p id="checkGuest"></p>
                    </div>
                    <div class="input-field">
                        <label for="message">MESSAGE: </label>
                        <textarea name="specialRequests" id="message" placeholder="IF ANY SPECIAL REQUESTS..." cols="30"
                            rows="5"></textarea>
                    </div>
                    <div class="input-field">
                        <label for="source">HOW DID YOU HEAR ABOUT US: </label>
                        <textarea name="source" id="source" rows="5"></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" id="submitButton" value="REQUEST-A-QUOTE" name="submit"
                        onclick="validateForm()">
                </div>
                <div class="sign-in">
                    <p>Already have an account? <a href="#" target="_self">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <!-- <h4>footer</h4> -->
        <div class="footer1">
            <center><img src="images/logo.png" alt="" width="30%">
                <p>"Lorem ipsum dolor sit amet consectetur."</p><br>
                <h3>Connect With Us</h3>
                <hr class="hr1">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </center>
        </div>
        <div class="footer2">
            <h3>Quick links</h3>
            <hr class="hr1" style="float:left"><br>
            <p><a href="#">About Us</a></p>
            <p><a href="#">Contact Us</a></p>
            <p><a href="#">FAQs</a></p>
            <p><a href="#">Terms of Service</a></p>
            <p><a href="#">Privacy Policy</a></p>
        </div>
        <div class="footer3">
            <h3>Contact Information</h3>
            <hr class="hr1" style="float:left"><br>
            <p><i class="fa-solid fa-location-dot"></i> 123 Main Street, City, Country</p>
            <p><i class="fa fa-phone"></i> Phone: +123 456 789</p>
            <p><i class="fa-solid fa-envelope"></i> Email: info@example.com</p>
        </div>
    </footer>
    <script src="js/reservation.js"></script>
</body>

</html>




<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    $_SESSION["customer_id"] = 1;
} //updated

include 'send.php';

function validateData($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);

    return $data;
}

if (!isset($_SESSION['customer_id'])) {
    echo "<script>alert('Login or Register for Reservations!');</script>";
    echo "<script>window.location.replace('register.php?error=Not registered!');</script>";
    exit();
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "<script>alert('inside post')</script>";
        if (isset($_POST['submit'])) {
            // echo "<script>alert('Inside submit')</script>";
            $bookingName = validateData($_POST['bookingName']);
            $phone = validateData($_POST['contactNumber']);
            $timeStart = validateData($_POST['bookingTime']);
            $eventType = validateData($_POST['eventType']);
            $location = validateData($_POST['bookingLocation']);
            $specialReq = validateData($_POST['specialRequests']);
            $email = validateData(strtolower($_POST['emailAdress']));
            $eventDate = validateData($_POST['bookingDate']);
            $event = validateData($_POST['eventCategory']);
            $eveMangName = validateData($_POST['eventMangerName']);
            $guestAmount = validateData($_POST['noOfguests']);
            $source = validateData($_POST['source']);
            $customerID = $_SESSION['customer_id'];


            $sql = "INSERT INTO reservation VALUES ('','$bookingName','$phone','$timeStart','$eventType','$location','$specialReq','$email','$eventDate','$event','$eveMangName','$guestAmount','$source','$customerID')";

            // echo "<script>alert('$sql')</script>";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Request Quote Successful!')</script>";
            } else {
                echo "<script>alert('Request Quote Unsuccessful!)</script>";
                echo "<script>window.location.replace('reservation.php?error=Request Quote Unsuccessful!');</script>";

                exit();
            }
        }
    }
}

$conn->close();

?>