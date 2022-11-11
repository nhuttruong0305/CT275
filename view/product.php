<title>Sản phẩm</title>
    <main>
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page"><?php echo  mb_strtoupper($name_category);?></p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="../controller/index.php?action=home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page"><?php echo  mb_strtoupper($name_category);?></li>
                </ol>
            </nav>
        </div>
        <div id="nav_product_product" class="container">
            <div class="row">
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=1" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/036-sofa-1_a7ebdf06ace04ea89ca902476cb22632.png" alt="">  
                        <p>Sofa</p>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=2" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/043-chair-2_5167b889e218465fba9faf07bdb7dc19.png" alt="">    
                        <p>Ghế</p>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=3" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/022-lamp_82b4234113484b53b4ee0a1a8504d1de.png" alt="">    
                        <p>Trang trí</p>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=4" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/012-shelf_7e79d57824b345d0ba184f7e8c0c9a23.png" alt="">    
                        <p>Kệ sách</p>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=5" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/006-table-1_ad853cf4b5ab4d919552e0fc67e52ff8.png" alt=""> 
                        <p>Bàn</p>
                    </a>
                </div>
                <div class="col-6 col-lg-2 col-md-4 nav_item_product_home">
                    <a href="../controller/index.php?action=product&category_id=6" class="d-block text-center">
                    <img src="https://file.hstatic.net/200000280801/collection/050-closet_74974ddd24a34029bfeaf0eed1d90304.png" alt="">  
                        <p>Tủ quần áo</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <h3 id="title_product" class="text-center"><?php echo  mb_strtoupper($name_category);?></h3>
            <div class="row">
                <?php foreach($product as $value){
                    echo '
                        <div class="col-md-3 col-6 featured_item_home">
                            <a href="../controller/index.php?action=detail_product&id_product='.$value['id'].'" class="d-block">
                                <img src="'.$value['img'].'" alt="">
                            </a>
                            <a href="../controller/index.php?action=detail_product&id_product='.$value['id'].'" class="d-block text-center mt-3 featured_item_name_home">'.$value['product_name'].'</a>
                            <p class="text-center featured_item_price_home">'.number_format($value['price'],0,'','.')." đ".'</p>
                            </div>';
                        }?>
            </div>
        </div>
</main>
