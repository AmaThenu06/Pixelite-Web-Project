<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="styles/newindex.css">

    <link rel="stylesheet" href="styles/feedbacks.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>

    </style>

</head>

<body>
    <header style="background-image:linear-gradient(black, transparent);height:100px;">
        <!--Nav bar-->
        <div class="navbar">

            <img class="logo" src="images/logo2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#" class="active">Feedback</a></li>
            </ul>
            <a href="login.php"><button class="btn1">LOG IN</button></a>
            <a href="signup.php"><button class="btn1">SIGN UP</button></a>
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
            <li><a href="#">Feedback</a></li>
            <li><a href="login.php"><button class="btn1">LOG IN</button></a></li>
            <li><a href="signup.php"><button class="btn1">SIGN UP</button></a></li>
        </div>
    </header>


    <script src="feedback.js"></script>



    <div class="form-box">
        <form enctype="multipart/form-data" action="sendfeedback.php" method="POST" class="form-box" >
            <center>
            <table width="50%">
                <tr><td>Username : </td><td><input type="text" class="username" id="username" placeholder="Username" name="username"></td></tr>
                <tr><td>Email :</td> <td><input type="text" class="email" id="email" placeholder="Email" name="email"></td></tr>
                <tr><td>Message :</td> <td><textarea placeholder="Write your message....." class="message" name="message"></textarea></td></tr>
                <tr><td> </td><td><input type="submit" value="submit" class="btn"></td></tr>
            </table></center>
        </form>
    </div>

    <script>
        const tagBtn = document.querySelector('.tag')
        const tagBtnIcon = document.querySelector('.tag i')
        const dropDown = document.querySelector('.dropdown_menu')

        tagBtn.onclick = function () {
            dropDown.classList.toggle('open')
            const isOpen = dropDown.classList.contains('open')

            tagBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'

        }

    </script>


</body>

</html>