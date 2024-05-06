<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us || Pixelite</title>
    <link rel="stylesheet" href="styles/about.css">
    <script src="https://kit.fontawesome.com/42e5148630.js" crossorigin="anonymous"></script>
</head>

<body>
    <header style="background:linear-gradient(rgb(175, 135, 74), transparent);">
    <!--Nav bar-->
    <div class="navbar">
        
            <img class= "logo" src="images/2.png" alt="" width="10%"></a>
            <ul class="links">
                <li><a href="index_login.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="services_login.php">Services</a></li>
                <li><a href="portfolio_login.php">Portfolio</a></li>
                <li><a href="book_login.php">Book Now</a></li>
                <li><a href="contact_login.php">Contact</a></li>
                <li><a href="feedback_login.php">Feedback</a></li>
            </ul>
            <a href="userprofile.php"><img src="images/prof.png" alt="" width="50px" style="border-radius:50%; cursor:pointer;margin-left:100px;"></a>
            <a href="logout.php"><button class="btn1">LOG OUT <i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
                <div class="tag">
                <i class="fa-solid fa-bars"></i>
                </div>
    </div>

    <div class="dropdown_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index_login.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="services_login.php">Services</a></li>
                <li><a href="portfolio_login.php">Portfolio</a></li>
                <li><a href="book_login.php">Book Now</a></li>
                <li><a href="contact_login.php">Contact</a></li>
                <li><a href="feedback_login.php">Feedback</a></li>
                <a href="userprofile.php"><img src="images/prof.png" alt="" width="50px" style="border-radius:50%; cursor:pointer;margin-left:100px;"></a>
            <a href="logout.php"><button class="btn1">LOG OUT <i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
    </div>
    </header>

    <!--Hero--
    <section class="About-hero">
        <div class="hero-content">
            <h1>ABOUT US</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, voluptatum. </p>
        </div>
    </section><br><br>

    <-About us container-->
    <section class="about-container">
        <div class="left-about">
            <img src="images/aboutus2.jpg" alt="" width="500px">
        </div>
        <div class="right-about">

            <p style="text-align:justify;">Welcome to EventLens, your premier solution for professional event photography management. At EventLens, we specialize in providing comprehensive event photography services tailored to meet the unique needs of every occasion.<br><br>

With years of experience in the photography industry, our team understands the importance of capturing unforgettable moments at your events. Whether it's a corporate conference, wedding celebration, or charity fundraiser, we are dedicated to delivering stunning photographs that will preserve your special memories for a lifetime.<br><br>

Our team of skilled photographers is passionate about their craft and committed to providing exceptional service. We work closely with our clients to understand their vision and requirements, ensuring that every photo reflects the essence and atmosphere of the event.<br><br>

At EventLens, we leverage cutting-edge technology to streamline the photography process and enhance the client experience. Our state-of-the-art event photography management system allows for seamless communication, efficient scheduling, and easy access to photos.<br><br>

We pride ourselves on our professionalism, reliability, and attention to detail. From the initial consultation to the final delivery of photos, we strive to exceed our clients' expectations at every step of the journey.<br><br>

Thank you for considering EventLens for your event photography needs. We look forward to the opportunity to work with you and capture the magic of your next event.

Contact us today to learn more about our services and how we can help make your event truly memorable.</p><br>
        </div></section>     
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