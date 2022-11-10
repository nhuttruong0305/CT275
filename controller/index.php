<?php 
    ob_start();
    session_start();
    include '../view/header.php'; 
    include '../model/handle_function.php';
    define('PATH_TO_CONNECT','../model/PDOconnect.php');
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
                    header("Location: ?action=home");
                }else if($status_login == 'fail'){
                    echo '<script language="javascript">';
                    echo 'alert("Đăng nhập thất bại !");'; 
                    echo '</script>';
                }
                include '../view/login.php';
                break;
            case 'logout':
                include '../view/logout.php';
                header("Location: ?action=home");
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
                }
                include '../view/register.php';
                break;
            case 'cart':
                add_to_cart();
                if(isset($_SESSION['cart'])){
                    $product_at_cart = $_SESSION['cart'];
                }
                include '../view/cart.php';
                break;

            case 'delete_cart':
                unset($_SESSION['cart'][$_GET['id_product_in_cart']]);
                header("Location: ?action=cart");
                break;
            case 'product':
                //ham xu ly
                $product = choose_category_id();
                include '../model/PDOconnect.php';
                
                $sql = "select * from category where id = ?";
                $stmt = $conn -> prepare($sql);
                if(isset($_GET['category_id'])){
                    if($_GET['category_id'] == 'all'){
                        $name_category = 'TẤT CẢ SẢN PHẨM';
                    }else{
                        $stmt -> execute([$_GET['category_id']]);
                    
                        $name_category = $stmt->fetch()['category_name'];
                    }
                }
                
                include '../view/product.php';
                break;
            case 'detail_product': 
                $detail_product=get_detail_product(); 
                // $name_of_category=get_category_product();
                include PATH_TO_CONNECT;
                if(isset($_GET['id_product'])){
                    $id_of_product=$_GET['id_product'];
                    $sql='select * from category c join product p on c.id=p.category_id where p.id=?';
                    $stmt = $conn -> prepare($sql);
                    $stmt ->  execute([$id_of_product]);
        
                    $name_of_category=$stmt->fetch()['category_name'];
                }
                include '../view/detail_product.php';
                break;  
            default:
                include '../view/home.php';
                break;
        }
    }else{
        include '../view/home.php';
    }
    
    include '../view/footer.php'; 
    ob_end_flush();
?>