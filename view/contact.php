<?php require_once 'header.php'; ?>
<!-- Chèn header -->
<title>Liên hệ</title>
<main class="container-fluid" id="main_contact">
    <div class="row">
        <div class="col-sm-12 col-lg text-center" id="img_background">
            <h1 class="text-light font-weight-bold">Liên hệ</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#" class="text-light font-weight-bold">Trang chủ</a></li>
                    <li class="breadcrumb-item active text-warning font-weight-bold" aria-current="page">Liên hệ</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row container-fluid d-flex mt-5">
        <div class="col-lg"></div>
        <div class="col-lg-4 col-sm-12">
            <div id="top_contact_left">
                <div>
                    <i class="fas fa-map-marker-alt"></i>&nbsp;
                    Khu II, Đ. 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ
                </div>
                <div>
                    <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;
                    09075xxxx
                </div>
                <div>
                    <i class="fas fa-envelope"></i>&nbsp;&nbsp;
                    teamdev@gmail.com
                </div>
                <h2 class="font-weight-bold mt-5">Liên hệ</h2>
                <br>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ và tên: </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="">
                    </div>
                    <div class="form-group">
                        <label for="noidung">Nội dung: </label>
                        <br>
                        <textarea name="noidung" id="" cols="30" rows="10"  id="noidung" style="height: 136px; width:360px;"></textarea required>
                        </div>
                    <button type="submit" class="btn btn-primary d-block" id="btn_submit">Gửi liên hệ</button>
                    </form>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6 col-sm-12">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8414543437398!2d105.76842661474039!3d10.02993897527015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1666517663530!5m2!1svi!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    </div>
</main>
<!-- Chèn footer -->
<?php require_once 'footer.php'; ?>
