<?php 
    include '../view/header.php'; 

    if(isset($_GET['action'])) {
        switch ($_GET['action']){ 
            case 'about':
                include_once '../view/about.php';
                break;  
            case 'contact':
                include_once '../view/contact.php';
                break;  
            case 'login':
                include_once '../view/login.php';
                break;
            case 'news':
                include_once '../view/news.php';
                break;
            case 'register':
                include_once '../view/register.php';
                break;
            default:
                include '../view/home.php';
                break;
        }
    }else{
        include '../view/home.php';
    }
    
    include '../view/footer.php'; 
?>