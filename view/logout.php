<?php 
    if($_COOKIE['remember_login']){
        setcookie('remember_login', $_COOKIE['remember_login'], time() - 3600);
        unset($_SESSION['login_success']);
    }else{
        unset($_SESSION['login_success']);
        if(isset($_SESSION['email_customer'])){
            unset($_SESSION['email_customer']);
        }
        if(isset($_SESSION['phone_number'])){
            unset($_SESSION['phone_number']);
        }   
    }