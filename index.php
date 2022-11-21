<?php
    include 'backend/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litty Readings || <?php echo $_SESSION['page'] ?></title>
    <link rel="stylesheet" href="assets/stylesheets/index.css">
</head>
<body>
    <header class="header">
        <ul>
            <img src="assets/images/facebook.webp" alt="" />
            <img src="assets/images/twitter.webp" alt="" />
        </ul>
        <div class="logobox">
            <img class="headerlogo" src="assets/images/headerlogo.webp" alt="">
        </div>
        <form action="backend/changePage.php" method="get">
            <input class="navButton" id="homeButton" type="submit" name="home" value="Home">
            <input class="navButton" id="servicesButton" type="submit" name="services" value="Services">
            <a class="navButton" id="more">More</a>
        </form>
        <div class="mobileNav">
            <img class="menuBtn" src="assets/images/hamburgerButton.svg" alt="">
        </div>
    </header>
    <main>
        <?php 
            if($_SESSION['page'] === 'Home') {
                page('home');
            }
            if($_SESSION['page'] === 'Services'){
                page('services');
            } 
        ?>
    </main>
    <input type="hidden" class="page" value="<?php echo $_SESSION['page'] ?>">
    <script src="frontend/js/index.js"></script>
</body>
</html>