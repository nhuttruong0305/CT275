<title>Tìm kiếm sản phẩm</title>
<!-- Chèn header -->
<main>
    <div id="breadcrumb-background">
        <p class="text-center" id="title-page">Kết quả tìm kiếm "<span><?php echo $_GET['search_key'];?></span>" - Sea Furniture</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center" id="bread-crumb">
                <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>
                <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Tìm kiếm</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3">
            <h2 class="font-weight-bold mb-4">Trang tìm kiếm</h2>
            <h5 class="font-weight-bold mb-3">Có <?php echo count($result_search_product);?> kết quả tìm kiếm phù hợp</h5>
            <div class="row">
                <?php foreach($result_search_product as $value){
                    echo '
                        <div class="col-md-3 col-6 featured_item_home">
                            <a href="../controller/index.php?action=detail_product&id_product='.$value['id'].'" class="d-block">
                                <img src="../admin/upload/'.$value['img'].'" alt="">
                            </a>
                            <a href="../controller/index.php?action=detail_product&id_product='.$value['id'].'" class="d-block text-center mt-3 featured_item_name_home">'.$value['product_name'].'</a>
                            <p class="text-center featured_item_price_home">'.number_format($value['price'],0,'','.')." đ".'</p>
                            </div>';
                        }?>
            </div>
        </div>
</main>
<!-- Chèn footer -->


    

