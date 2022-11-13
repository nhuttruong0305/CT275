<title>Đăng nhập</title>
<!-- Chèn header -->
<main class="container-fluid">
    <div class="row">
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page">Đăng nhập</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="../controller/index.php?action=home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Đăng nhập</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg"></div>
        <div class="col">
            <h2 class="font-weight-bold mt-5  text-center">ĐĂNG NHẬP</h2>
            <br>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tài khoản Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu: </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember_1" name="remember_login">
                        <label class="form-check-label" for="remember_1">Ghi nhớ đăng nhập</label>
                    </div>
                    <button type="submit" class="btn btn-primary d-block" style="margin:0 auto" id="btn_login" name="btn_login">Đăng nhập</button>
                </form>
                <span class="d-block text-center mt-4">Bạn chưa có tài khoản, vui lòng đăng kí tại <a href="?action=register">đây.</a></span>
        </div>
        <div class="col-lg"></div>
    </div>

    </div>
</main>
<!-- Chèn footer -->

