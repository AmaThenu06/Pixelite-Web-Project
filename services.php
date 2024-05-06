<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services || Pixelite</title>
    <link rel="stylesheet" href="styles/services.css">
    <script src="https://kit.fontawesome.com/42e5148630.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!--Nav bar-->
        <div class="navbar">

            <img class="logo" src="images/2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
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
            <li><a href="#">Services</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="book.php">Book Now</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="login.php"><button class="btn1">LOG IN</button></a></li>
            <li><a href="signup.php"><button class="btn1">SIGN UP</button></a></li>
        </div>
    </header>
    <section class="About-hero">
        <div class="hero-content">
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, voluptatum. </p>
        </div>
    </section><br><br>


    <!--portfolio container box-->
    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/service.jpg"><img src="images/service.jpg" alt="" width="100%"></a>
                <h3>Wedding</h3>
                <p>At Pixelite, we understand that your wedding day is one of the most significant moments of your life.
                    Let us craft a personalized, fairy-tale wedding that reflects your love story and leaves a lasting
                    impression on you and your guests.
                </p>
            </div>
            <div class="p1">
                <a href="images/service1.jpg"><img src="images/service1.jpg" alt="" width="100%"></a>
                <h3>Graduation</h3>
                <p>Celebrate your academic achievements in style with [Company Name]. Whether you're hosting an intimate
                    gathering or a lively bash, we'll ensure your graduation party is a reflection of your hard work and
                    dedication, creating memories to cherish for years to come.
                </p>

            </div>
            <div class="p1">
                <a href="images/service3.jpg"><img src="images/service3.jpg" alt="" width="100%"></a>
                <h3>Birthday</h3>
                <p>Blow out the candles and make a wish with Pixelite! From whimsical themes to sophisticated
                    soirées, our team will design a birthday bash that captures your personality and delights guests of
                    all ages.
                </p>

            </div>
        </div>
    </div>
    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/service4.jpg"><img src="images/service4.jpg" alt="" width="100%"></a>
                <h3>Musical Events</h3>
                <p>Get ready to rock and roll with Pixelite! Whether you're planning a concert, festival, or album
                    release party, we'll orchestrate an electrifying event that showcases your talent and leaves
                    audiences wanting more.
                </p>
            </div>
            <div class="p1">
                <a href="images/service5.jpg"><img src="images/service5.jpg" alt="" width="100%"></a>
                <h3>Conferences</h3>
                <p>Elevate your next conference with Pixelite. Our experienced planners will handle every detail,
                    from venue selection to logistics management, ensuring a seamless and successful event that exceeds
                    your expectations.
                </p>

            </div>
            <div class="p1">
                <a href="images/service6.jpg"><img src="images/service6.jpg" alt="" width="100%"></a>
                <h3>Photo shoots</h3>
                <p>Strike a pose and capture the moment with Pixelite. Whether you're planning a fashion shoot,
                    portrait session, or commercial production, our creative team will provide the perfect backdrop and
                    atmosphere to bring your vision to life</p>

            </div>
        </div>
    </div>



    <!--footer -->

    <section class="footer">
        <p>123 Main Street, City, Country | Phone: +123 456 789 | Email: info@example.com</p>
        <p>&copy; 2024 Pixelite.com || All rights reserved.</p>
    </section>





    <script src="js/script.js"></script>

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


    <script src="js/script.js"></script>

</body>

</html>