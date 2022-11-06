<?php include_once '../view/header.php'; 


if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action){
        case 'register':
            include_once '../view/register.php';
            break;
        case 'about':
            include_once '../view/about.php';
            break;        
    }
}
include_once '../view/footer.php';