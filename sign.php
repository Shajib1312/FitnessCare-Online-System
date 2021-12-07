<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign up page</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="iccon">
                <h2 class="logo"><a href="homepage.php">FitnessCare</a> </h2>
            </div>
            <div class="manu">
                <ul>
                    <li><a href="homepage.php" target="_blank">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="service.htm">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <section class="contact">
                <div class="contactform">
                    <form action="registation.php" method="post">

                        <h2>For Sign up</h2>
                        <div class="inputBox">
                            <input type="text" name="userName" id="" required>
                            <span>Enter User Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" id="" required>
                            <span>Enter User Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" id="" required>
                            <span>Choose Your password</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="sign up">
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>

</body>

</html>