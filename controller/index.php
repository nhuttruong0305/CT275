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
            case 'search_product':
                $result_search_product  = search_product();
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
                include '../view/search.php';
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
            case 'news1':
                include '../view/news1.php';
                break;
            case 'news2':
                include '../view/news2.php';
                break;
            case 'news3':
                include '../view/news3.php';
                break;
            case 'news4':
                include '../view/news4.php';
                break;
            case 'news5':
                include '../view/news5.php';
                break;
            case 'news6':
                include '../view/news6.php';
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
                    $id_of_category=0;
                    $name_of_category=$stmt->fetch()['category_name'];
                    if($name_of_category=='sofa'){
                        $id_of_category=1;
                    }elseif($name_of_category=='ghế'){
                        $id_of_category=2;
                    }elseif($name_of_category=='trang trí'){
                        $id_of_category=3;
                    }elseif($name_of_category=='kệ sách'){
                        $id_of_category=4;
                    }elseif($name_of_category=='bàn'){
                        $id_of_category=5;
                    }else{
                        $id_of_category=6;
                    }
                }
                include '../view/detail_product.php';
                break;  
            case 'agree_order':
                if(isset($_SESSION['cart'])){
                    $last_id_of_orders=create_order();
                    $product_in_order_success = $_SESSION['cart'];
                   
                    //Vòng lặp thêm all sản phẩm vào orders_detail
                    include PATH_TO_CONNECT;
                    if(isset($_POST['agree_to_order'])){
                        //$sql_success="insert into orders_detail(product_name, product_img, price, amount, thanhtien, id_orders) values (?,?,?,?,?,?)";
                        $sql_success="insert into orders_detail(product_name, product_img, price, amount, thanhtien, id_orders) values (:product_name,:product_img,:price,:amount,:thanhtien,:id_orders)";
                        $stmt_success=$conn->prepare($sql_success);
                        foreach($product_in_order_success as $id_success => $value_success){
                            $value_total = $value_success['price']*$value_success['quantity'];
                            $stmt_success -> bindParam('product_name',$value_success['product_name']);
                            $stmt_success -> bindParam('product_img', $value_success['img']);
                            $stmt_success -> bindParam('price', $value_success['price']);
                            $stmt_success -> bindParam('amount', $value_success['quantity']);
                            $stmt_success -> bindParam('thanhtien', $value_total);
                            $stmt_success -> bindParam('id_orders', $last_id_of_orders);
                            $stmt_success->execute();
                        }
                    }
                }   
                // --------
                include '../view/order_success.php';
                
                break;
            case 'delete_order':
                if(isset($_POST['continue_order'])){
                    unset($_SESSION['cart']);
                }
                header("Location: ?action=home");
                break;
            case 'change_quantity':
                if(isset($_GET['type']) && isset($_GET['quantity'])&& isset($_GET['id'])){
                    $quantity = change_quantity_product($_GET['type'], $_GET['quantity']);
                    $_SESSION['cart'][$_GET['id']]['quantity'] = $quantity;
                    header("Location: ?action=cart");
                }
                    
                include '../view/cart.php';
                break;
        
            default:
                if(isset($_GET['search_product'])){
                    header("Location: ?action=search_product&search_key=".$_GET['search_product']);
                }

                require_once '../vendor/autoload.php';
    
                $quote = new \RandomQuotes\RandomQuotes();

                $quotes_random = $quote -> generate();

                include '../view/home.php';
                break;
        }
    }else{
        include '../view/home.php';
    }
    
    include '../view/footer.php'; 
    ob_end_flush();
?>