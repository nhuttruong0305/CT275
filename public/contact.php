<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/style.css" type="text/css">
    
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once '../partials/header.php' ?>
    <!-- Chèn header -->
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
    <?php require_once '../partials/footer.php' ?>
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
    
</body>
</html>