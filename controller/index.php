<?php 
    session_start();
    include '../view/header.php'; 
    include '../model/handle_function.php';

    if(isset($_GET['action'])) {
        switch ($_GET['action']){ 
            case 'about':
                include '../view/about.php';
                break;  
            case 'contact':
                include '../view/contact.php';
                break;  
            case 'login':    
                $status_login = login_process();
                if($status_login == 'success'){
                    echo '<script language="javascript">';
                    echo 'alert("Đăng nhập thành công !");'; 
                    echo '</script>';
                    echo "<script>window.location.href='index.php?action=home'</script>";
                }else if($status_login == 'fail'){
                    echo '<script language="javascript">';
                    echo 'alert("Đăng nhập thất bại !");'; 
                    echo '</script>';
                }
                include '../view/login.php';
                break;
            case 'logout':
                include '../view/logout.php';
                echo "<script>window.location.href='index.php?action=home'</script>";
                break;
            case 'news':
                include '../view/news.php';
                break;
            case 'register':
                $status_register = register_process();
                switch($status_register){
                    case 'exist_email':
                        echo '<script language="javascript">';
                        echo 'alert("Email đã được sử dụng !");'; 
                        echo '</script>';
                        break;
                    case 'fail':
                        echo '<script language="javascript">';
                        echo 'alert("Đăng kí thất bại do chưa nhập đủ thông tin !");'; 
                        echo '</script>';
                        break;
                    case 'no_duplicated_password':
                        echo '<script language="javascript">';
                        echo 'alert("Nhập lại mật khẩu không chính xác !");'; 
                        echo '</script>';
                        break;
                    case 'success':
                        echo '<script language="javascript">';
                        echo 'alert("Đăng kí tài khoản thành công ! Hãy tiến hành đăng nhập !");'; 
                        echo '</script>';
                        break;
                }
                include '../view/register.php';
                break;
            case 'cart':
                include '../view/cart.php';
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