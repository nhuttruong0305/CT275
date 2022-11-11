<?php 
    function check_exist_email($email_input, $conn){
        $sql = "select * from account where email = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute([$email_input]);
        return $stmt->rowCount();
    }


    function register_process(){
        include_once(__DIR__ . '.\PDOconnect.php');
        $status_process = '';
        if(isset($_POST['btn_register'])){
            if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['number_phone']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
                $full_name = $_POST['fullname'];
                $email = $_POST['email'];
                $number_phone = $_POST['number_phone'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                $password_hash = password_hash($password, PASSWORD_DEFAULT); //Hash password with bcrypt
                if(check_exist_email($email, $conn) > 0){
                    $status_process = 'exist_email';
                }else if($password != $confirm_password){
                    $status_process = 'no_duplicated_password';
                }else{
                    $sql = "insert into account(email, full_name, phone_number, pass_word) values(?, ? , ?, ?)";
                    $stmt = $conn -> prepare($sql);
                    $stmt -> execute([$email, $full_name, $number_phone, $password_hash]);
                    $status_process = 'success';
                }
            }else{
                $status_process = 'fail';
            }
        }
        return $status_process;
    }

    function login_process(){
        include_once(__DIR__ . '.\PDOconnect.php');
        $status_process = '';
        if(isset($_POST['btn_login'])){
            if(isset($_POST['email']) && isset($_POST['password'])){

                $email = $_POST['email'];
                $password = $_POST['password'];

                if($email == 'admin@gmail.com' && $password == 'admin'){
                    header("Location: ../admin/admin.php");
                }else{
                    $sql = "select * from account where email = ?";
                    $stmt = $conn -> prepare($sql);
                    $stmt->execute([$email]);
    
                    $result_from_DB = $stmt -> fetch();
    
                    if($stmt -> rowCount() > 0){
                        $password_hash_from_DB = $result_from_DB['pass_word']; 
    
                        if(password_verify($password, $password_hash_from_DB)){ //Compare password 
                            $full_name = $result_from_DB['full_name'];
    
                            $status_process = 'success';
                            if(isset($_POST['remember_login']) && ($_POST['remember_login'])){
                                setcookie("remember_login", $full_name, time() + 3600);
                                $_SESSION['email_customer'] = $result_from_DB['email'];
                                $_SESSION['phone_number'] = $result_from_DB['phone_number'];
                            }else{
                                $_SESSION['login_success'] = $full_name;
                                $_SESSION['email_customer'] = $result_from_DB['email'];
                                $_SESSION['phone_number'] = $result_from_DB['phone_number'];    
                            }
                        } else{
                            $status_process = 'fail';
                        }
                    }else{
                        $status_process = 'fail';
                    }
                }

            }
            else{
                $status_process = 'fail';
            }
        }
        return $status_process;
    }

    function choose_category_id(){
        include_once(__DIR__ . '.\PDOconnect.php');
        if(isset($_GET['category_id'])){
            $category_id = $_GET['category_id'];

            if($category_id == 'all'){
                $sql = "select * from product";
                $stmt = $conn -> prepare($sql);
                $stmt ->  execute([]);
            }else{
                $sql = "select * from product where category_id = ?";      
                $stmt = $conn -> prepare($sql);
                $stmt ->  execute([$category_id]);
            }

            $product = $stmt->fetchAll();

            return $product;
        }
    }

    function get_detail_product(){
        include_once(__DIR__ . '.\PDOconnect.php');
        if(isset($_GET['id_product'])){
            $id_of_product=$_GET['id_product'];
            $sql='select * from product where id=?';
            $stmt = $conn -> prepare($sql);
            $stmt ->  execute([$id_of_product]);

            $detail_product=$stmt->fetch();
            $conn = null;
            return $detail_product;
        }
    }


    function add_to_cart(){
        include_once(__DIR__ . '.\PDOconnect.php');
        if(isset($_POST['add_into_cart'])){
            if(isset($_POST['quantity'])){
                $soluong_SP = $_POST['quantity'];
                $id_product = $_POST['id_product'];

                if(isset($_SESSION['cart'][$id_product])){
                    $_SESSION['cart'][$id_product]['quantity'] += $soluong_SP ;
                }else{
                    $sql = "select * from product where id = ?";
                    $stmt = $conn -> prepare($sql);
                    $stmt->execute([$id_product]);
                    $result = $stmt -> fetch();

                    
                    //$_SESSION['cart'][$id_product] = $id_product;
                    $_SESSION['cart'][$id_product]['img'] = $result['img'];
                    $_SESSION['cart'][$id_product]['product_name'] = $result['product_name'];
                    $_SESSION['cart'][$id_product]['price'] = $result['price'];
                    $_SESSION['cart'][$id_product]['quantity'] = $soluong_SP;

                    // if(isset($count_the_number_of_products)){
                    //     global $count_the_number_of_products;
                    //     $count_the_number_of_products=count($_SESSION['cart']);
                    // }

                    header("Location:../controller/index.php?action=cart");
                }
            }
        }
    }

    function create_order(){
        include_once(__DIR__ . '.\PDOconnect.php');
        if(isset($_POST['agree_to_order'])){
            if(isset($_POST['name_customer_cart']) && isset($_POST['email_customer_cart']) && isset($_POST['sdt_customer_cart']) && isset($_POST['address_customer_cart']) && isset($_POST['payments_customer_cart']) && isset($_POST['total_order'])){
                
                $sql="insert into orders (full_name,address,phone_number,email,total,payment) values(?,?,?,?,?,?)";
                $stmt = $conn -> prepare($sql);
                $stmt -> execute([$_POST['name_customer_cart'], $_POST['address_customer_cart'], $_POST['sdt_customer_cart'], $_POST['email_customer_cart'],$_POST['total_order'],$_POST['payments_customer_cart']]);
                
            }
            //Trả về ID cuối cùng được thêm vào bảng orders
            return $conn->lastInsertID();
            $conn= null;
        }
    }


    function search_product(){
        include_once(__DIR__ . '.\PDOconnect.php');
        if(isset($_GET['search_key'])){
            $search_key = $_GET['search_key'];

            $sql_search_key = "select * from product where product_name LIKE '%$search_key%'";
            $stmt = $conn->prepare($sql_search_key);

            $stmt->execute();

            $result_search_key  = $stmt->fetchAll();
            
            return $result_search_key;
        }
    }

    function change_quantity_product($type ,  $quantity){
        if($type == 'decrease'){
            $quantity -- ;
        }else{
            $quantity++;
        }
        return $quantity;
    }
?>

