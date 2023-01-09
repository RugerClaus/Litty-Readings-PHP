<?php
    session_start();
    include 'backend/session.php';
    $_SESSION['page'] = 'Home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litty Readings || <?php echo $_SESSION['page'] ?></title>
    <link rel="font" href="SpecialElite-Regular.ttf">
    <link rel="stylesheet" href="assets/stylesheets/index.css">
</head>
<body>
    <div class="mobileNav">
        <img class="menuBtn" src="assets/images/hamburgerButton.svg" alt="">
    </div>
    <div class="logobox">
        <a class="logo" href="index.php">
            <img href="index.php" src="assets/images/headerlogo.webp" alt="">
        </a>
        <header class="header">
            <div class="innerHeader">
                <div class="socmed">
                    <a href="https://facebook.com" class="facebook">
                        <img src="assets/images/facebook.webp" alt="" />
                    </a>
                    <a href="https://instagram.com" class="insta">
                        <img style="width: 30px;" src="assets/images/instagram.svg" alt="">
                    </a>
                    <a href="https://twitter.com" class="twitter">
                        <img src="assets/images/twitter.webp" alt="" />
                    </a>
                </div>
                
                <nav>
                    <a class="navButton" id="homeButton" type="submit" name="home" value="Home" href="index.php">Home</a>
                    <a class="navButton" id="servicesButton" href="/services.php">Services</a>
                    <a href="/contact.php" class="navButton" id="contactButton">Contact</a>
                    <a href="/plans.php" class="navButton" id="plansButton">Plans</a>
                </nav>
            </div>
        </header>
    </div>
    <div class="wrapper">
        
        <main class="main">
            <section class="header">
                <img src="assets/images/whoiam.webp" alt="">
            </section>
            <section class="maincontent">
                <div class="imgwrapper">
                    <img src="assets/images/littyreadingsphoto.webp" alt="Reina Meza">
                </div>
                <div class="text">
                    <p>
                    Ever since I was a child I knew I was supposed to be here to help others on their journey through this human experience. When I started this path to help others it wasn't serous at first. I would read tarot for fun and little did I know the magick I would access with my first tarot deck. I came to soon realize that tarot is not to be taken lightly and that it is serious. I spent years learning the meanings and connecting with my cards. Now I am ready to share my gifts with the world and bring light to those who are lost in darkness.
                    </p>
                    <div class="logo">
                        <img src="assets/images/littyreadingslogo.webp" alt="Litty Readings Logo">
                    </div>
                </div>
            </section>
            
        </main>
    </div>
    <footer class="footer"></footer>
    <input type="hidden" class="page" value="<?php echo $_SESSION['page'] ?>">
    <script src="frontend/js/index.js"></script>
</body>
</html>