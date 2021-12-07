<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>FitnessCare homepage</title>
</head>
<body>
    <div class="main">
        <h5>Welcome <?php echo $_SESSION['userName'] ?></h5>
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"><a href="homepage.php">FitnessCare</a> </h2>
                </div>

                <div class="manu">
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="service.htm">Services</a></li>
                        <li><a href="sign.php">Subscribe</a></li>
                        <li><a href="contact.php">Contacts</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input type="search" class="srch" name="" placeholder="Type to text"> <a href="#"> <button class="btn">search</button></a>
                </div>
        </div>
        <div class="content">
            <h1>Fitness <br> <span>requires the shaping</span> <br> of mind too</h1>
            <p class="par">Fitness should not be all about working as hard as you can, as much as you can. <br> You have to be just as serious about your rest days <br> as you are about your workout days and focus <br> on the mental benefits of fitness just as much as the physical. <br> Instead of sticking to intense, heart-pumping, sweat-dripping workouts, <br> add in an activity every week that makes you feel calm.</p>
            <button class="cn"><a href="sign.php">Join Us</a></button>
            <form action="validation.php" method="post" class="login-from">
                <h2>Login Here</h2>
                <input type="text" name="userName" id="" placeholder="Enter User Name" required>
                <input type="password" name="password" id="" placeholder="Enter Password Here" required>
                <button type="submit" class="btnn">Login</button>
                <button class="btnn"><a href="logout.php">logout</a> </button>

                <p class="link">Don't have an account <br>
                <a href="sign.php">Sign up</a> here</p>
                <p class="liw">Login with</p>
                <div class="icon">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>