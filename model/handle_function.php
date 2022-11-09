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
            if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['number_phone']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $number_phone = $_POST['number_phone'];
                $password = $_POST['pass_word'];
                $confirm_password = $_POST['confirm_password'];

                if(check_exist_email($email, $conn) > 0){
                    $status_process = 'exist_email';
                }else if($password != $confirm_password){
                    $status_process = 'no_duplicated_password';
                }else{
                    $sql = "insert into account(email, full_name, phone_number, pass_word) values(?, ? , ?, ?)";
                    $stmt = $conn -> prepare($sql);
                    $stmt -> execute([$email, $full_name, $number_phone, $password]);
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

                $sql = "select * from account where email = ? and pass_word = ?";
                $stmt = $conn -> prepare($sql);
                $stmt->execute([$email, $password]);

                $full_name = $stmt->fetch()['full_name'];

                if($stmt->rowCount() > 0){
                    $status_process = 'success';
                    if(isset($_POST['remember_login']) && ($_POST['remember_login'])){
                        setcookie("remember_login", $full_name, time() + 3600);
                    }else{
                        $_SESSION['login_success'] = $full_name; 
                    }
                }
                else{
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

  
