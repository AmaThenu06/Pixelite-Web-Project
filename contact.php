<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Pixelite</title>
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://kit.fontawesome.com/42e5148630.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <!--Nav bar-->
    <div class="navbar">
        
            <img class= "logo" src="images/2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
                <a href="login.php"><button class="btn1">LOG IN</button></a>
                <a href="signup.php"><button class="btn1">SIGN UP</button></a>
                <div class="tag">
                <i class="fa-solid fa-bars"></i>
                </div>
    </div>

    <div class="dropdown_menu">
            <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="login.php"><button class="btn1">LOG IN</button></a></li>
                <li><a href="signup.php"><button class="btn1">SIGN UP</button></a></li>
    </div>
    </header>


    <div class="contact-container">
        <div class="left-contact">
            <h1>CONTACT US</h1>
            <hr class="hr"><br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.587103659373!2d79.9746923!3d6.9152691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1713425876312!5m2!1sen!2slk"
                width="600" height="450" style="border: 5px solid; border-radius:20px;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
            
        </div>
        <div class="right-contact">
            <form action="">
                <label for="name">Name :</label><br>
                <input type="text"><br>
                <label for="email">Email :</label><br>
                <input type="email"><br>
                <label for="subject">Subject :</label><br>
                <input type="text"><br>
                <label for="message">Message :</label><br>
                <textarea name="msg" id="" cols="30" rows="10"></textarea><br><br>
                <button class="btn3">SUBMIT</button>
            </form>
        </div>
    </div>


    <!--footer -->

 <section class="footer">
        <p>123 Main Street, City, Country | Phone: +123 456 789 | Email: info@example.com</p>
        <p>&copy; 2024 Pixelite.com || All rights reserved.</p>
    </section>


   


    <script src="js/script.js"></script>
    
    <script>
        const tagBtn =document.querySelector('.tag')
        const tagBtnIcon =document.querySelector('.tag i')
        const dropDown =document.querySelector('.dropdown_menu')

        tagBtn.onclick = function(){
            dropDown.classList.toggle('open')
            const isOpen = dropDown.classList.contains('open')

            tagBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            :'fa-solid fa-bars'

        }

    </script>


</body>

</html>