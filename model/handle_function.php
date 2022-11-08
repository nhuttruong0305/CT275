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
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $number_phone = $_POST['number_phone'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                if(check_exist_email($email, $conn) > 0){
                    $status_process = 'exist_email';
                }else if($password != $confirm_password){
                    $status_process = 'no_duplicated_password';
                }else{
                    $sql = "insert into account(email, fullname, phone_number, password) values(?, ? , ?, ?)";
                    $stmt = $conn -> prepare($sql);
                    $stmt -> execute([$email, $fullname, $number_phone, $password]);
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

                $sql = "select * from account where email = ? and password = ?";
                $stmt = $conn -> prepare($sql);
                $stmt->execute([$email, $password]);

                if($stmt->rowCount() > 0){
                    $status_process = 'success';
                    $_SESSION['login_success'] = $stmt->fetch()['fullname']; 
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

