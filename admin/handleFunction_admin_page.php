<?php 
    function get_all_product(){
        include '../model/PDOconnect.php';
        $sql = "select * from category ct join product p on ct.id = p.category_id";
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $result = $stmt -> fetchAll();
        return $result;
    }

    function get_category_name(){
        include '../model/PDOconnect.php';
        $sql = "select * from category";
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $result = $stmt -> fetchAll();
        return $result;
    }


    function delete_product($id){
        include '../model/PDOconnect.php';
        $sql = "delete from product where id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt->execute([$id]);
    }

    function upload_img($img_product){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($img_product["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($img_product["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        return $uploadOk;
    }

    function add_product_to_DB($name_product_add, $price_product_add, $category_id, $des_product_add, $color_product_add, $brand_product_add, $img_product){
        include '../model/PDOconnect.php';
        $sql = "insert into product(product_name, price, category_id, description, color, brand, img) values(?,?,?,?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt->execute([$name_product_add, $price_product_add, $category_id, $des_product_add, $color_product_add, $brand_product_add, $img_product]);
    }

    function get_category_id($category_name){
        include '../model/PDOconnect.php';
        $sql = "select * from category where category_name = ?";
        $stmt = $conn -> prepare($sql);
        $stmt->execute([$category_name]);
        $result = $stmt -> fetch()['id'];
        return $result;
    }
?>