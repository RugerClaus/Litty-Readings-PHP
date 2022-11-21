<?php

function page($options){
    if($options == 'home'){
        include 'views/home.php';
    }
    if($options === 'services'){
        include 'views/services.php';
    }
    $page = $options;
    return $page;
}