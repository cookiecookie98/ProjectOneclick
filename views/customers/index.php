<?php
    $pages = $_GET['pages'] ?? 'home';
    if($pages !== 'login' && $pages !== 'register'){
        require_once('header.php');
    }

    
    switch ($pages) {
        case 'home':
            require_once('home.php');
            break;
        case 'product':
            require_once('product.php');
            break;
        case 'login':
            require_once('views/user/login.php');
            break;
        case 'register':
            require_once('views/user/login.php');
            break;
        default:
            require_once('home.php');
            break;
    }
    if($pages !== 'login' && $pages !== 'register'){
        require_once('footer.php');
    }
    
?>