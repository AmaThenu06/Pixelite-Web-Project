<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio || Pixelite</title>
    <link rel="stylesheet" href="styles/portfolio.css">
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
                <li><a href="#">Portfolio</a></li>
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
                <li><a href="services.php">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="login.php"><button class="btn1">LOG IN</button></a></li>
                <li><a href="signup.php"><button class="btn1">SIGN UP</button></a></li>
    </div>
    </header>

    </nav>
    <section class="About-hero">
        <div class="hero-content">
            <h1>Portfolio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, voluptatum. </p>
        </div>
    </section><br><br>
    


    <!--portfolio container box-->
    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
                

            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
               

            </div>
        </div>
    </div>
    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
               

            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
                

            </div>
        </div>
    </div>

    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
               

            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
                

            </div>
        </div>
    </div>

    <div class="products">
        <div class="products-container">
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img1.jpg" alt="" width="100%"></a>
                
            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
               

            </div>
            <div class="p1">
                <a href="images/img1.jpg"><img src="images/img2.jpg" alt="" width="100%"></a>
                

            </div>
        </div>
    </div>



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