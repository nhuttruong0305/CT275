<?php 
    include '../model/PDOconnect.php';

    $sql = "select * from product";
    $stmt = $conn -> prepare($sql);
    $stmt->execute();
    $result = $stmt -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <main class="container">
        <div class="top_container">
            <a id="back_to_home_admin" href="">
                <h3 class="text-center mt-5">Luxenus Furniture</h3>
            </a>
            <div class="right_top_container">
                <div class="img_admin">
                    <img src="https://www.pngitem.com/pimgs/m/128-1280822_check-mark-box-clip-art-blue-admin-icon.png" alt="">
                </div>
                <a href="../controller/index.php?action=home">Đăng xuất</a>
            </div>
        </div>
        <div class="row">
            <button id="btn_add_admin" name="btn_add_product_admin" class="btn">Thêm sản phẩm</button>
        </div>
        <div class="row">
            <div class="col-sm-12 px-0 mt-3">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Loại</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Màu</th>
                            <th scope="col">Thương hiệu</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_admin">
                        <?php foreach($result as $item){?>
                        <tr>
                            <td><?php echo $item['product_name'];?></td>
                            <td><?php echo $item['price'];?></td>
                            <td><?php echo $item['brand'];?></td>
                            <td style="width: 100px;">
                                <p><?php echo $item['description'];?></p>
                            </td>
                            <td><?php echo $item['color'];?></td>
                            <td><?php echo $item['brand'];?>y</td>
                            <td class="b-block"><img class="d-block" src="https://bizweb.dktcdn.net/thumb/large/100/364/402/products/2-042bbb81b1b64e5287a9a94736f714bf-master.jpg?v=1566961266000" alt=""></td>
                            <th style="width: 170px;">
                                <a href=""><button class="btn btn-warning">Edit</button></a>
                                <a href=""><button class="btn btn-warning">Delete</button></a>
                            </th>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>