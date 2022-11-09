<title>Giỏ hàng</title>
    <main>
        <div id="breadcrumb-background">
            <p class="text-center" id="title-page">Giỏ hàng của bạn - Luxenus Furniture</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center" id="bread-crumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
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
                        <tr>
                            <td style="padding-top: 60px;">
                                <a href=""><i class="fas fa-eraser"></i></a>
                            </td>
                            <td><img style="width: 120px; height: auto;" src="https://bizweb.dktcdn.net/thumb/compact/100/364/402/products/2-acaf4822a6e84c0bad48378c37346e92-master.jpg" alt=""></tdscope=>
                            <td style="padding-top: 60px;">Ghế Luxury</td>
                            <td style="padding-top: 60px;">570.000</td>
                            <td style="padding-top: 60px;">1</td>
                            <td style="padding-top: 60px;">570.000</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 60px;">
                                <a href=""><i class="fas fa-eraser"></i></a>
                            </td>
                            <td><img style="width: 120px; height: auto;" src="https://bizweb.dktcdn.net/thumb/compact/100/364/402/products/2-acaf4822a6e84c0bad48378c37346e92-master.jpg" alt=""></tdscope=>
                            <td style="padding-top: 60px;">Ghế Mambo</td>
                            <td style="padding-top: 60px;">1.270.000</td>
                            <td style="padding-top: 60px;">1</td>
                            <td style="padding-top: 60px;">1.200.000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="3"><h4 class="text-right">Tổng số thành tiền: </h4></td>
                            <td>
                                <h4 class="text-warning">460,000 đ</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3 style="font-weight: 700;" class="container mt-4">Thông tin nhận hàng</h3>
        <form id="form_customer_cart" class="container" method="post">
            <div class="form-group row align-items-center">
                <label for="input_name_customer_cart" class="col-sm-3 col-form-label">Họ và tên</label>
                <div class="col-sm-9">
                    <input type="text" name="name_customer_cart" class="form-control" id="input_name_customer_cart">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_email_customer_cart" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email_customer_cart" class="form-control" id="input_email_customer_cart">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_sdt_customer_cart" class="col-sm-3 col-form-label">Số điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" name="sdt_customer_cart" class="form-control" id="input_sdt_customer_cart">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="input_address_customer_cart" class="col-sm-3 col-form-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input type="text" name="address_customer_cart" class="form-control" id="input_address_customer_cart">
                </div>
            </div>
            <div class="form-group row">
                <label for="payments_customer_cart" class="col-sm-3 col-form-label align-items-center">Thanh toán</label>
                <div class="col-sm-9">
                    <select id="payments_customer_cart" class="custom-select custom-select-md mb-3" name="payments_customer_cart">
                        <option selected>Hình thức thanh toán</option>
                        <option value="1">Thanh toán khi nhận hàng (COD)</option>
                        <option value="2">Thanh toán chuyển khoản (Internet Banking)</option>
                        <option value="3">Thanh toán qua thẻ tín dụng</option>
                    </select>    
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="mr-5">
                    <a style="text-decoration: none;" href=""><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Quay về trang chủ</a>
                </div>
                <div>
                    <button id="btn_order_cart" type="submit" name="order_cart" class="btn">ĐỒNG Ý ĐẶT HÀNG</button>
                </div>
            </div>
        </form>
</main>
    
