<title>Thanh toán thành công</title>
    <main id="main_of_order_success">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div id="icon_check_order_success" class="col-2 d-flex align-items-center justify-content-center"><i style="font-size: 40px; color: #8fc445;" class="fas fa-check d-block"></i></div>
                        <div class="col-10">
                            <h5 style="font-weight: 700;">Cảm ơn bạn đã đặt hàng</h5>
                            <p>Một email xác nhận đã được gửi tới <span class="font-weight-bold"><?php if(isset($_POST['email_customer_cart'])) echo $_POST['email_customer_cart'];?></span> Xin vui lòng kiểm tra email của bạn</p>
                        </div>
                    </div>
                    <div id="shipment_details" class="row mt-3">
                        <div class="col-md-6">
                            <h4>Thông tin mua hàng</h4>
                            <p><?php if(isset($_POST['name_customer_cart'])) echo $_POST['name_customer_cart'];?></p>
                            <p><?php if(isset($_POST['email_customer_cart'])) echo $_POST['email_customer_cart'];?></p>
                            <p><?php if(isset($_POST['sdt_customer_cart'])) echo $_POST['sdt_customer_cart'];?></p>
                        </div>
                        <div class="col-md-6">
                            <h4>Địa chỉ nhận hàng</h4>
                            <p><?php if(isset($_POST['address_customer_cart'])) echo $_POST['address_customer_cart'];?></p>
                            <p>Ghi chú: <?php if(isset($_POST['note_customer_cart'])) echo $_POST['note_customer_cart'];?></p>
                        </div>
                        <div class="col-md-6">
                            <h4>Phương thức thanh toán</h4>
                            <p><?php if(isset($_POST['payments_customer_cart'])) echo $_POST['payments_customer_cart'];?></p>
                        </div>
                        <div class="col-md-6">
                            <h4>Phương thức vận chuyển</h4>
                            <p>Giao hàng tận nơi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            Đơn hàng #<?php echo $last_id_of_orders;?>
                        </div>

                        <?php if(isset($product_in_order_success)){
                            foreach($product_in_order_success as $id_success => $value_success){
                        ?>

                        <div id="card_body_order_success" class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <img src="<?php echo $value_success['img'];?>" alt="">
                                    <span><?php echo $value_success['product_name'];?></span>
                                </div>
                                <p><?php echo number_format($value_success['price']*$value_success['quantity'],0,'','.')." đ"?></p>
                            </div>
                            <hr>
                        </div>
                        <?php }};?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between" style="padding-top: 26px;">
                                <p>Tạm tính: </p>
                                <p><?php if(isset($_POST['total_order'])){echo number_format($_POST['total_order'],0,'','.')." đ";} ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between" style="padding-top: 26px;">
                                <p>Phí vận chuyển: </p>
                                <p>20.000đ</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="padding-top: 26px;">
                                <p>Tổng cộng: </p>
                                <p style="font-size: 30px; color: rgb(0,0,132); font-weight: 600;"><?php if(isset($_POST['total_order'])){echo number_format($_POST['total_order']+20000,0,'','.')." đ";}?></p>
                            </li>
                        </ul>
                      </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <form action="index.php?action=delete_order" method='post'>
                    <button class="btn btn-primary" name="continue_order">Tiếp tục mua hàng</button>
                </form>
                
            </div>
        </div>
    </main>
