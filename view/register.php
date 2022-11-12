<title>Đăng ký tài khoản</title>
<!-- Chèn header -->
<main>
    <div id="breadcrumb-background">
        <p class="text-center" id="title-page">Đăng ký tài khoản</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center" id="bread-crumb">
                <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>
                <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Đăng ký tài khoản</li>
            </ol>
        </nav>
    </div>
    <h3 style="font-weight: 700;" class="text-center">ĐĂNG KÝ TÀI KHOẢN</h3>

    <form id="registration-form" class="container" action="#" method="post" enctype="multipart/form-data">
        <!-- nhớ sửa lại thuộc tính enctype -->
        <div class="form-group">
            <input class="form-control form-control-lg" type="text" name="fullname" placeholder="Họ và tên" required>
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="text" name="number_phone" placeholder="Số điện thoại" required>
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Mật khẩu" id="password" required>
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
        </div>
        <button id="register-button" type="submit" class="btn" name="btn_register">Đăng ký</button>
    </form>
</main>
<!-- Chèn footer -->


    

