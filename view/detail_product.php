<main>
    <title>Sản phẩm</title>
    <div id="breadcrumb-background">
        <p class="text-center" id="title-page"><?php echo $detail_product['product_name'];?></p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center" id="bread-crumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <!-- cần echo thêm loại sản phẩm -->
                <li class="breadcrumb-item"><a href="index.html"><?php echo UCWords ($name_of_category); ?></a></li>

                <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page"><?php echo $detail_product['product_name'];?></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <?php echo '<img id="img_detail" src="'.$detail_product['img'].'" alt="">'; ?>
                <!-- <img id="img_detail" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/364/402/products/2-acaf4822a6e84c0bad48378c37346e92-master.jpg" alt=""> -->
            </div>
            <div id="contains_product_details" class="col-md-6">
                <h1 id="title_name_detail_product"><?php echo $detail_product['product_name'];?></h1>
                <p id="brand_detail_product"><?php echo $detail_product['brand'];?></p>
                <i class="fas fa-ellipsis-h"></i>
                <p id="price_detail_product" class="text-center"><span><?php echo number_format($detail_product['price'],0,'','.'). " đ";?></span></p>
                <p id="des_detail_product"><?php echo $detail_product['description'];?></p>
                <hr>
                <form id="form_add_into_cart" method="post" class="row mt-5" action="?action=cart">
                    <div class="col-3">
                        <label for="amount_product" style="color: rgb(247, 148, 29); font-size: 16px; font-weight: 600;" >Số lượng</label>
                    </div>    
                    <div class="col-9">
                        <input type="number" id="amount_product" class="col-7 mx-sm-3" min="1" name="quantity" value="1">
                    </div>
                    <input type="hidden" name="id_product" value="<?php echo $detail_product['id'];?>">
                    <button type="submit" id="add_into_cart" name="add_into_cart" class="btn">Thêm vào giỏ hàng</button>
                </form>
                <p class="font-weight-bolder">Gọi đặt mua: <span style="color: rgb(247,148,29);">19006750</span> (Miễn phí, 8-21h cả T7,CN)</p>
            </div>
        </div>
    </div>
</main>