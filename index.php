<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Pixelite</title>
    <link rel="stylesheet" href="styles/newindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <!--Nav bar-->
        <div class="navbar">

            <img class="logo" src="images/2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
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
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="book.php">Book Now</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="login.php"><button class="btn1">LOG IN</button></a></li>
            <li><a href="signup.php"><button class="btn1">SIGN UP</button></a></li>
        </div>
    </header>


    <main>
        <section id="hero">
            <h1>Welcome To Pixelite</h1>
            <p>We capture moments that last a lifetime</p>
        </section>
    </main>

    <!--portfolio container box-->
    <section>
    <div class="title">
            <h1>EVENTS</h1>
            <div class="line"></div>
        </div>
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
        <center>
        <a href="about.php" class="ctn">View More</a>
        </center>
        
    </div>
    </section>
    <!--about-->

    <section class="about">
        <div class="about-content">
            <h1>About</h1>
            <p>Pixelite offers professional event photography services tailored to your needs. With experienced
                photographers and cutting-edge technology, we capture unforgettable moments at corporate events,
                weddings, and fundraisers. From consultation to delivery, we ensure exceptional service and stunning
                photos that preserve your memories. Contact us to learn more.</p><br>
            <a href="about.php" class="ctn">Read More</a>
        </div>
    </section>

    <!--review section-->
    <center>
        <h2 class="title" style="margin-top:50px;">DISCOVER WHAT OTHERS HAVE EXPERIENCED</h1>

        </h2>
    </center>
    <section class="reviews">
        <div class="left-reviews">
            <img src="images/rate.png" alt="" width="80%">
        </div>
        <div class="right-reviews">
            <div class="reviewbox">
                <img src="images/prof.png" alt="" width="20%">
                <h3>Lorem ipsum dolor sit amet.</h3><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, facere incidunt veritatis
                    laboriosam optio iure eum nisi necessitatibus? Sed necessitatibus neque odit quasi? Voluptatum nam
                    adipisci non consequuntur quisquam beatae vero quibusdam, asperiores debitis accusantium odio
                    voluptatem. Saepe, suscipit voluptate. Eaque aspernatur veniam fugiat facilis? Porro animi harum
                    quisquam est?</p><br>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
            </div>
        </div>
    </section>
        <script src="feedback.js"></script>
    <!--footer -->

    <section class="footer">
        <p>123 Main Street, City, Country | Phone: +123 456 789 | Email: info@example.com</p>
        <p>&copy; 2024 Pixelite.com || All rights reserved.</p>
    </section>


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