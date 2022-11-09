<?php 
    if($_COOKIE['remember_login']){
        setcookie('remember_login', $_COOKIE['remember_login'], time() - 3600);
        unset($_SESSION['login_success']);
    }else{
        unset($_SESSION['login_success']);
    }