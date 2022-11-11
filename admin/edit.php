<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main class="container">
        <a id="back_to_home_admin" href="">
            <h3 class="text-center mt-5">Luxenus Furniture</h3>
        </a>
        <h6 class="text-center">Chỉnh sửa sản phẩm tại đây</h6>
        <form method="post" action="" class="mb-5">
            <div class="form-group">
                <label for="name_product_edit">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name_product_edit" name="name_product_edit">
            </div>
            <div class="form-group">
                <label for="price_product_edit">Giá</label>
                <input type="text" class="form-control" id="price_product_edit" name="price_product_edit">
            </div>
            <div class="form-group">
                <label for="type_product_edit">Loại sản phẩm</label>
                <select id="type_product_edit" name="type_product_edit" class="form-control" required>
                    <option>Chọn loại sản phẩm</option>
                    <option value="1">Sofa</option>
                    <option value="2">Ghế</option>
                    <option value="3">Trang trí</option>
                    <option value="4">Kệ sách</option>
                    <option value="5">Bàn</option>
                    <option value="6">Tủ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="des_product_edit">Mô tả sản phẩm</label>
                <div>
                    <textarea class="form-control" name="des_product_edit" id="des_product_edit" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="color_product_edit">Màu</label>
                <input type="text" class="form-control" id="color_product_edit" name="color_product_edit">
            </div>
            <div class="form-group">
                <label for="brand_product_edit">Thương hiệu</label>
                <input type="text" class="form-control" id="brand_product_edit" name="brand_product_edit">
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="img_product_edit" name="img_product_edit" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <button id="btn_edit_product_edit" name="btn_edit_product_edit" type="submit" class="btn">Cập nhật</button>
        </form>
    </main>
</body>
</html>