<?php 
    include './handleFunction_admin_page.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $product_data = get_data_product($id);
        $product = get_category_name();

    //Tiến hành cập nhật sản phẩm
    if(isset($_GET['edit_product'])){
                if(isset($_POST['name_product_edit'])&&isset($_POST['price_product_edit'])&&isset($_POST['type_product_edit'])
                &&isset($_POST['description_product_edit'])&&isset($_POST['color_product_edit'])&&isset($_POST['brand_product_edit'])&&isset($_FILES['img_product'])){
                    $name_product_edit = $_POST['name_product_edit'];
                    $price_product_edit = $_POST['price_product_edit'];
                    $type_product_edit = $_POST['type_product_edit'];
                    $des_product_edit = $_POST['description_product_edit'];
                    $color_product_edit = $_POST['color_product_edit'];
                    $brand_product_edit = $_POST['brand_product_edit'];
                    $img_product = $_FILES['img_product'];


                    if(empty($img_product['name'])){
                        //Lấy category_id từ bảng category
                        $category_id = get_category_id($type_product_edit);
                        update_product_to_DB($name_product_edit, $price_product_edit, $category_id, $des_product_edit, $color_product_edit, $brand_product_edit, $_POST['img_old'], $id);
                        header("Location: admin.php?update_success");
                    }else{
                        //Lấy category_id từ bảng category
                        $category_id = get_category_id($type_product_edit);

                        //Xử lí file ảnh upload
                        $checkup_load = upload_img($img_product);

                        $img_old = $product_data['img'];
                        if($checkup_load == 1){
                            unlink("./upload/$img_old");
                            update_product_to_DB($name_product_edit, $price_product_edit, $category_id, $des_product_edit, $color_product_edit, $brand_product_edit, $img_product["name"], $id);
                            header("Location: admin.php?update_success");
                        }else{
                            echo '<script language="javascript">';
                            echo 'alert("Không thể upload được file ảnh !");'; 
                            echo '</script>';
                        }
                    }
                }else {
                    echo '<script language="javascript">';
                    echo 'alert("Không thể upload được file ảnh !");'; 
                    echo '</script>';
                }
            }
        }
?>

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
        <a id="back_to_home_admin" href="./admin.php">
            <h3 class="text-center mt-5">Luxenus Furniture</h3>
        </a>
        <h6 class="text-center">Chỉnh sửa sản phẩm tại đây</h6>
        <form method="post" action="?edit_product&id=<?php if(isset($_GET['id'])) echo $_GET['id']?>" class="mb-5" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name_product_edit">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name_product_edit" name="name_product_edit" value="<?php echo $product_data['product_name']?>" required>
            </div>
            <div class="form-group">
                <label for="price_product_edit">Giá</label>
                <input type="text" class="form-control" id="price_product_edit" name="price_product_edit" value="<?php echo $product_data['price']?>" required>
            </div>
            <div class="form-group">
                <label for="type_product_edit">Loại sản phẩm</label>
                <span>Hiện tại</span>
                <input type="text" class="form-control" id="type_product_edit" name="type_product_edit_old" value="<?php echo $product_data['category_name']?>" disabled>
                <br>
                <select id="type_product_edit" name="type_product_edit" class="form-control" required>
                    <?php foreach($product as $value) {?>
                        <option value="<?php echo $value['category_name']?>" <?php if($value['category_name'] == $product_data['category_name'] ) echo 'selected';?>><?php echo $value['category_name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="des_product_edit">Mô tả sản phẩm</label>
                <div>
                    <input type="text" class="form-control" id="description_product_edit" name="description_product_edit" value="<?php echo $product_data['description']?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="color_product_edit">Màu</label>
                <input type="text" class="form-control" id="color_product_edit" name="color_product_edit" value="<?php echo $product_data['color']?>" required>
            </div>
            <div class="form-group">
                <label for="brand_product_edit">Thương hiệu</label>
                <input type="text" class="form-control" id="brand_product_edit" name="brand_product_edit" value="<?php echo $product_data['brand']?>" required> 
            </div>
            <div>
                <h4>Ảnh sản phẩm hiện tại</h4>
                <img src="./upload/<?php echo $product_data['img']?>" class="img-thumbnail" alt="..." width="200px" height="200px">
                <input type="hidden" name="img_old" value="<?php echo $product_data['img']?>">
            </div>
            <div class="custom-file">
                <input type="file"
                id="fileToUpload" name="img_product"
                accept="image/png, image/jpeg">
                <!-- <input type="file" class="custom-file-input" id="customFile"> -->
                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
            </div>
            <button id="btn_edit_product_edit" name="btn_edit_product" type="submit" class="btn">Cập nhật</button>
        </form>
    </main>
</body>
</html>