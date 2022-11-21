<?php
    include 'session.php';

if(isset($_GET['home'])){
    $_SESSION['page'] = 'Home';
    $page = $_SESSION['page'];
    header("location: ../index.php?=$page");
}
if(isset($_GET['services'])) {
    $_SESSION['page'] = 'Services';
    $page = $_SESSION['page'];
    header("location: ../index.php?=$page");
}