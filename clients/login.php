<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="../assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Morden Men Shop</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href=".assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <main>
        <section>

            <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
                <div class="lg-rg-img position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                </div>
                <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                    <div class="lg-rg-form-top align-items-center justify-content-end d-flex flex-wrap w-100">
                        <p class="mb-0">Chưa có tài khoản? <a class="theme-btn bg-color4" href="register.php"
                                title="">Đăng ký<span></span><span></span><span></span><span></span></a></p>
                    </div>
                    <div class="lg-rg-form-inner w-100">
                        <h2 class="mb-0">Đăng nhập</h2>
                        <p class="mb-0">Nhập thông tin chi tiết của bạn dưới đây</p>
                        <?php if (!empty($errors)) : ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
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
                            <button class="theme-btn bg-color1" name="dangnhap" type="submit">Đăng
                                nhập<span></span><span></span><span></span><span></span></button>
                        </div>
                    </form>
                    <?php } ?>

                </div>
            </div>
            </div><!-- Login & Register Wrap -->
        </section>
    </main><!-- Main Wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    $(document).ready(function() {
        <?php if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
        toastr.success("Đăng nhập thành công!");
        setTimeout(function() {
            window.location.href = "index.php";
        }, 1000);
        <?php endif; ?>

        $('#loginForm').on('submit', function(event) {
            const email = $('#email').val();
            const password = $('#password').val();
            if (email === '' || password === '') {
                toastr.error('Email và mật khẩu không được để trống.');
                event.preventDefault();
            }
        });
    });
    </script>
</body>

</html>