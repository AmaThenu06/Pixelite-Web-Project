<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title>
        SignUp || Pixelite
    </title>
    <link rel="stylesheet" href="styles/signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="back">
        <div class="wrapper" style="margin-top:100px;">
        <form action="signup-php.php" method="post">
                <h1>Create Your Account</h1>
                <div class="input-box">
                    <input type="text" name = "Fname" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name = "username" placeholder="User Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name = "email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="text" name = "phone" placeholder="Contact Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-box">
                    <input type="text" name = "NIC" placeholder="NIC Number" required>
                    <i class='bx bxs-id-card'></i>
                </div>
                <div class="input-box">
                    <input type="password" name = "pw" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" name = "Rpw" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Create New Account</button>
                <div class="register-link">
                    <p>Already have a account ?<a href="login.php">Log in</a></p>
                </div>
            </form>
        </div>
    </section>
</body>



</html>