<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once 'header.php'; ?>
    <!-- Chèn header -->
    <main>
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page">Đăng ký tài khoản</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Đăng ký tài khoản</li>
                </ol>
            </nav>
        </div>
        <h3 style="font-weight: 700;" class="text-center">ĐĂNG KÝ TÀI KHOẢN</h3>

        <form id="registration-form" class="container" action="#" method="post" enctype="multipart/form-data">
            <!-- nhớ sửa lại thuộc tính enctype -->
            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="fullname" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="number_phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Mật khẩu" id="password">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" type="password" name="confirm_password" placeholder="Nhập lại mật khẩu">
            </div>
            <button id="register-button" type="submit" class="btn">Đăng ký</button>
        </form>
    </main>
    <!-- Chèn footer -->
    <?php require_once 'footer.php' ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <!-- Form validate -->
    <script type="text/javascript" src="jquery.validate.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#registration-form').validate({
                rules:{
                    fullname: "required",
                    email: {required: true, email: true},
                    number_phone: {required: true, number: true, minlength: 10},
                    password: {required: true, minlength: 5},
                    confirm_password: {required: true, minlength: 5, equalTo: "#password"}
                },
                messages:{
					fullname: "Bạn chưa nhập vào họ tên của bạn",
					email: "Hộp thư điện tử không hợp lệ",
                    number_phone: "Số điện thoại không hợp lệ, phải có ít nhất 10 ký tự",
					password:{
						required: "Bạn chưa nhập vào mật khẩu",
						minlength: "Mật khẩu phải có ít nhất 5 ký tự"
					},
					confirm_password:{
						required: "Bạn chưa nhập vào mật khẩu",
						minlength: "Mật khẩu phải có ít nhất 5 ký tự",
						equalTo: "Mật khẩu không trùng khớp với mật khẩu đã nhập"
					},
				},
                errorElement: "div",	
				errorPlacement: function(error, element){
					error.addClass("invalid-feedback");
					if(element.prop("type")==="checkbox"){
						error.insertAfter(element.siblings("label"));
					}else{
						error.insertAfter(element);
					}
				},
				highlight: function(element, errorClass, validClass){
					$(element).addClass("is-invalid").removeClass("is-valid");
				},
				unhighlight: function(element, errorClass, validClass){
					$(element).addClass("is-valid").removeClass("is-invalid");
				}
            });
        });
    </script>
</body>
</html>