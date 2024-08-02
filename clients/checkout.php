<main>

    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">

                            <div class="checkout-form w-100">
                                <h3>Chi tiết hóa đơn</h3>
                                <form>
                                    <div class="row mrg30">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Họ *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Tên *</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Email *</label>
                                                <input type="email" placeholder="Nhập Email của bạn">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Địa chỉ *</label>
                                                <input type="text" placeholder="Nhập địa chỉ đơn hàng muốn nhận">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Số điện thoại *</label>
                                                <input type="text" placeholder="Nhập số điện thoại">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Mô tả</label>
                                                <textarea type="text" placeholder="Lời nhắn cho shop"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="cart-total v2 w-100">
                                <h4>Đơn hàng của bạn</h4>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $tongtien = 0;
                                        foreach ($listgiohang as $item) {
                                            $tong = $item['gia_sp'] * $item['so_luong'];
                                            $tongtien += $tong;
                                            echo "<tr>
                                                    <td><img class='img-fluid w-30' src='{$item['anh_sp']}'><span>{$item['ten_sp']}</span></td>
                                                    <td><span>[{$item['so_luong']}]</span></td>
                                                    <td><span class='price'>{$item['gia_sp']} VND</span></td>
                                                  </tr>";
                                        }

                                        echo "<tr>
                                                <td colspan='2'>Tổng tiền</td>
                                                <td><strong class='price'>{$tongtien} VND</strong></td>
                                              </tr>";
                                        ?>

                                    </tbody>
                                </table>
                                <div class="payment-options w-100">
                                    <div class="radio-box2 position-relative w-100">
                                        <input id="payment-info1-1" name="payment" type="radio">
                                        <label for="payment-info1-1"><strong>Chuyển khoản trực tiếp</strong></label>
                                    </div>
                                    <div class="radio-box2 position-relative w-100">
                                        <input id="payment-info1-2" name="payment" type="radio">
                                        <label for="payment-info1-2"><strong>Thanh toán khi giao hàng</strong></label>
                                    </div>
                                </div>
                                <button class="theme-btn bg-color1" type="submit">Đặt
                                    hàng<span></span><span></span><span></span><span></span></button>
                            </div>
                        </div>
                    </div>
                </div><!-- Checkout Wrap -->
            </div>
        </div>
    </section>
    <section>

    </section>

</main><!-- Main Wrapper -->