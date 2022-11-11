<?php 
    include './handleFunction_admin_page.php';
    $product = get_category_name();
    
    if(isset($_GET['add_product'])){
        if(isset($_POST['name_product_add'])&&isset($_POST['price_product_add'])&&isset($_POST['type_product_add'])
            &&isset($_POST['des_product_add'])&&isset($_POST['color_product_add'])&&isset($_POST['brand_product_add'])&&isset($_FILES['img_product'])){
                $name_product_add = $_POST['name_product_add'];
                $price_product_add = $_POST['price_product_add'];
                $type_product_add = $_POST['type_product_add'];
                $des_product_add = $_POST['des_product_add'];
                $color_product_add = $_POST['color_product_add'];
                $brand_product_add = $_POST['brand_product_add'];
                $img_product = $_FILES['img_product'];
            
                //Lấy category_id từ bảng category
                $category_id = get_category_id($type_product_add);

                //Xử lí file ảnh upload
                $checkup_load = upload_img($img_product);

                if($checkup_load == 1){
                    add_product_to_DB($name_product_add, $price_product_add, $category_id, $des_product_add, $color_product_add, $brand_product_add, $img_product['name']);
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Không thể upload được file ảnh !");'; 
                    echo '</script>';
                }
        }else {
            echo '<script language="javascript">';
            echo 'alert("Không thể upload được file ảnh !");'; 
            echo '</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main class="container">
        <div class="row">
            <button id="btn_add_admin" name="btn_add_product_admin" class="btn">
                <a href="./admin.php" class="text-light" style="text-decoration:none">Trở về</a>
            </button>
        </div>
        <a id="back_to_home_admin" href="">
            <h3 class="text-center mt-5">Luxenus Furniture</h3>
        </a>
        <h6 class="text-center">Thêm sản phẩm bạn muốn tại đây</h6>
        
        <form method="post" action="?add_product" class="mb-5" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name_product_add">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name_product_add" name="name_product_add" required>
            </div>
            <div class="form-group">
                <label for="price_product_add">Giá</label>
                <input type="text" class="form-control" id="price_product_add" name="price_product_add" required>
            </div>
            <div class="form-group">
                <label for="type_product_add">Loại sản phẩm</label>
                <select id="type_product_add" name="type_product_add" class="form-control" required>
                    <?php foreach($product as $value) {?>
                        <option value="<?php echo $value['category_name']?>"><?php echo $value['category_name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="des_product_add">Mô tả sản phẩm</label>
                <div>
                    <textarea class="form-control" name="des_product_add" id="des_product_add" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="color_product_add">Màu</label>
                <input type="text" class="form-control" id="color_product_add" name="color_product_add" required>
            </div>
            <div class="form-group">
                <label for="brand_product_add">Thương hiệu</label>
                <input type="text" class="form-control" id="brand_product_add" name="brand_product_add" required>
            </div>
            <div class="custom-file">
                <input type="file"
                id="fileToUpload" name="img_product"
                accept="image/png, image/jpeg">
                <!-- <input type="file" class="custom-file-input" id="customFile"> -->
                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
            </div>
            <button id="btn_add_product_add" name="btn_add_product_add" type="submit" class="btn">Thêm</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>