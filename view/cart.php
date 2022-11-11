<title>Giỏ hàng</title>
    <main>
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page">Giỏ hàng của bạn - Luxenus Furniture</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="index.php?action=home">Trang chủ</a></li>
                    <li class="breadcrumb-item active" style="color: rgb(247, 148, 29); font-weight: 600;" aria-current="page">Giỏ hàng của bạn - Luxenus Furniture</li>
                </ol>
            </nav>
        </div>
        <h3 style="font-weight: 700;" class="container">Giỏ hàng của bạn</h3>
        <div id="cart_container" class="container">
            <div id="div_tag_cover_table_cart" class="table-responsive-xl">
                <table class="table table-borderless">
                    <thead id="thead_cart" class="text-center">
                        <tr class="font-weight-bold">
                            <th scope="col"></th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col"></th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
               
                    <tbody id="tbody_cart" class="text-center">
                        <?php if(isset($product_at_cart)){
                                $total = 0;
                                foreach($product_at_cart as $id => $value){$total+=$value['price']*$value['quantity'];?>
                                    <tr>
                                        <td style="padding-top: 60px;">
                                            <a href="?action=delete_cart&id_product_in_cart=<?php echo $id?>"><i class="fas fa-eraser"></i></a>
                                        </td>
                                        <td> <?php echo '<img style="width: 120px; height: auto;" src="'.$value['img'].'" alt="">'; ?></tdscope=>    
                                        
                                        <td style="padding-top: 60px;">
                                            <?php echo $value['product_name'];?>
                                        </td>
                                        <td style="padding-top: 60px;">
                                            <?php echo number_format($value['price'],0,'','.'). " đ";?>
                                        </td>
                                        <td style="padding-top: 60px;"><?php echo $value['quantity']; ?></td>
                                        <td style="padding-top: 60px;"><?php echo number_format($value['quantity']*$value['price'],0,'','.'). " đ"; ?></td>
                                    </tr>
                        <?php }};?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="3"><h4 class="text-right">Tổng số thành tiền: </h4></td>
                            <td>
                                <h4 class="text-warning"><?php if(isset($total)){echo  number_format($total,0,'','.')." đ";} else echo '0 đ';?></h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3 style="font-weight: 700;" class="container mt-4">Thông tin nhận hàng</h3>
        <form id="form_customer_cart" class="container" method="post" action="../controller/index.php?action=agree_order">
            <div class="form-group row align-items-center">
                <label for="input_name_customer_cart" class="col-sm-3 col-form-label">Họ và tên</label>
                <div class="col-sm-9">
                    <input type="text" name="name_customer_cart" class="form-control" id="input_name_customer_cart" value="<?php if(isset($_SESSION['login_success'])){ echo $_SESSION['login_success'];}?>">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_email_customer_cart" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email_customer_cart" class="form-control" id="input_email_customer_cart" value="<?php if(isset($_SESSION['email_customer'])){ echo $_SESSION['email_customer'];}?>">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_sdt_customer_cart" class="col-sm-3 col-form-label">Số điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" name="sdt_customer_cart" class="form-control" id="input_sdt_customer_cart" value="<?php if(isset($_SESSION['phone_number'])){ echo $_SESSION['phone_number'];}?>">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_address_customer_cart" class="col-sm-3 col-form-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input type="text" name="address_customer_cart" class="form-control" id="input_address_customer_cart" required>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Ghi chú</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="note_customer_cart" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="payments_customer_cart" class="col-sm-3 col-form-label align-items-center">Thanh toán</label>
                <div class="col-sm-9">
                    <select id="payments_customer_cart" class="custom-select custom-select-md mb-3" name="payments_customer_cart" required>
                        <option selected>Hình thức thanh toán</option>
                        <option value="Thanh toán khi nhận hàng (COD)">Thanh toán khi nhận hàng (COD)</option>
                        <option value="Thanh toán chuyển khoản (Internet Banking)">Thanh toán chuyển khoản (Internet Banking)</option>
                        <option value="Thanh toán qua thẻ tín dụng">Thanh toán qua thẻ tín dụng</option>
                    </select>    
                </div>
            </div>
            <input type="hidden" name="total_order" value="<?php echo $total;?>">
            <div class="row align-items-center justify-content-center">
                <div class="mr-5">
                    <a style="text-decoration: none;" href="index.php"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Quay về trang chủ</a>
                </div>
                <div>
                    <button id="btn_order_cart" type="submit" name="agree_to_order" class="btn">ĐỒNG Ý ĐẶT HÀNG</button>
                </div>
            </div>
        </form>
</main>
    
