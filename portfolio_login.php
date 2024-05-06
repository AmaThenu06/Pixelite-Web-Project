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
                <li><a href="index_login.php">Home</a></li>
                <li><a href="about_login.php">About</a></li>
                <li><a href="services_login.php">Services</a></li>
                <li><a href="#">Portfolio</a></li>
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
                <li><a href="index_login.php">Home</a></li>
                <li><a href="about_login.php">About</a></li>
                <li><a href="services_login.php">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="book_login.php">Book Now</a></li>
                <li><a href="contact_login.php">Contact</a></li>
                <li><a href="feedback_login.php">Feedback</a></li>
                <a href="userprofile.php"><img src="images/prof.png" alt="" width="50px" style="border-radius:50%; cursor:pointer;margin-left:100px;"></a>
            <a href="logout.php"><button class="btn1">LOG OUT <i class="fa-solid fa-arrow-right-from-bracket"></i></button></a>
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