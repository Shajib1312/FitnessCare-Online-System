<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="cover.css">
    <title>contact</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="iccon">
                <h2 class="logo"><a href="homepage.php">FitnessCare</a> </h2>
            </div>
            <div class="manu">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="service.htm">Services</a></li>
                    <li><a href="sign.php">Subscribe</a></li>
                </ul>
            </div>
        </div>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>At FitnessCare Online, keeping in touch with you is our main priority.
                    Contact us through phone or email anytime and we can assure you that we?ll get back to you within the day.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p> 69/A Nahar Road, <br> 2200 Mymensingh,<br>Dhaka,Bangladesh.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p> +8804190101312</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p> fitnesscare77@care.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form action="collection.php" method="post">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="senderName" id="" required>
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" id="" required>
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="contain" id="" required></textarea>
                            <span>Type Your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>

</body>

</html>