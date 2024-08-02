<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/15b.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Login</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Login </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- =============account section start here ====================-->
<section class="account py-120">
    <div class="account-inner">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="assets/images/thumbs/login-img.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="account-form">
                        <div class="account-form__content mb-4">
                            <?php
                            if (isset($_SESSION['ten_nguoidung'])) {
                                extract($_SESSION['ten_nguoidung']);
                            ?>
                            <div class="account-form__content mb-4">
                                Xin chào: <br>
                                <h3 class="account-form__title mb-2"> "
                                    <?= $ten_nguoidung ?>"
                                </h3>
                            </div>

                            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

                            <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                            <?php if ($role == 1) { ?>
                            <li class="form_li"><a href="../admin/index.php">Đăng nhập ADMIN</a></li>
                            <?php } ?>
                            <?php if ($role == 1) { ?>
                            <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                            <?php }
                                if ($role == 0) { ?>
                            <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                            <?php } ?>

                            <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>

                            <?php
                            } else {

                            ?>
                            <h3 class="account-form__title mb-2"> Sign In Your Account </h3>
                            <p class="account-form__desc"></p>
                        </div>

                        <form id="loginForm" action="index.php?act=login" method="POST">
                            <div class="field-box v2 position-relative w-100">
                                <label>Email</label>
                                <input type="text" name="email" id="email" required>
                            </div>
                            <div class="field-box v2 position-relative w-100">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" id="password" required>
                            </div>
                            <div
                                class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                <button class="theme-btn bg-color1" name="login" type="submit">Đăng
                                    nhập<span></span><span></span><span></span><span></span></button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================account section end here ========================-->