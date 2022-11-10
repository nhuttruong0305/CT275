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
                        }else{
                            $_SESSION['login_success'] = $full_name; 
                        }
                    } else{
                        $status_process = 'fail';
                    }
                }else{
                    $status_process = 'fail';
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
                }
            }
        }
    }

    // function delete_cart(){
    //     if(isset($_GET['id_product_in_cart'])){
    //         $id = $_GET['id_product_in_cart'];
    //         unset($_SESSION['cart'][$id]);
    //     }
    // }




