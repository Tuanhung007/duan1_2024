<main>
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="product-detail position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="product-detail-imgs position-relative w-100">
                                <span class="bg-color4 rounded-pill position-absolute">20% OFF</span>
                                <ul class="product-detail-big-imgs list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-1.jpg" data-fancybox="gallery" title=""><img src="../upload/<?= $anh_sp ?>" alt="<?= $ten_sp ?>"><i class="fi fi-rr-eye rounded-circle"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-2.jpg" alt="Product Detail Big Image 2"><i class="fi fi-rr-eye rounded-circle"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-3.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-3.jpg" alt="Product D   etail Big Image 3"><i class="fi fi-rr-eye rounded-circle"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-4.jpg" data-fancybox="gallery" title=""><img src="../upload/<?= $anh_sp ?>" alt="<?= $ten_sp ?>"><i class="fi fi-rr-eye rounded-circle"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Product Detail Images -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="product-detail-info position-relative w-100">
                                <div class="product-rate-review d-flex flex-wrap align-items-center">
                                    <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i></span>
                                    <a class="d-inline-block review-link" href="javascript:void(0);" title="">(1
                                        customer review)</a>
                                </div>

                                <h2 class="mb-0"><?= $ten_sp ?></h2>
                                <span class="d-block price"><?= $gia_sp ?></span>

                                <p class="mb-0"><?= $thong_tin_sp ?></p>
                                <div class="products-color d-flex flex-wrap align-items-center w-100">
                                    <span>Colors:</span>
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                                <div class="products-size d-flex flex-wrap align-items-center w-100">
                                    <span>Size:</span>
                                    <a href="javascript:void(0);" title="">XS</a>
                                    <a href="javascript:void(0);" title="">S</a>
                                    <a href="javascript:void(0);" title="">M</a>
                                    <a href="javascript:void(0);" title="">L</a>
                                    <a href="javascript:void(0);" title="">XL</a>
                                </div>
                                <div class="product-bottom d-flex flex-wrap align-items-center w-100">
                                    <div class="product-quanty">
                                        <input type="number" class="qty" value="01">
                                    </div>
                                    <button class="theme-btn bg-color1" type="submit">Add to
                                        Cart<span></span><span></span><span></span><span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Product Detail -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title-wrap d-flex flex-wrap align-items-end justify-content-between w-100">
                    <div class="sec-title position-relative">
                        <h2 class="mb-0">Sản phẩm cùng loại</h2>
                    </div><!-- Section Title -->
                    <div class="sec-btn">
                        <a class="theme-btn bg-color1 brd-btn" href="product-detail.html" title="">View More
                            Products<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Section Title Wrap -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <?php foreach ($sp_cungloai as $sp) { ?>
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="product-box position-relative w-100">
                                    <div class="product-img overflow-hidden position-relative w-100">
                                        <a href="index.php?act=sanphamct&id_sp=<?= $sp['id_sp'] ?>">
                                            <img src="../upload/<?= $sp['anh_sp'] ?>" alt="<?= $sp['ten_sp'] ?>">
                                        </a>
                                        <div class="product-btns position-absolute">
                                            <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                            <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                            <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info w-100">
                                        <h4 class="mb-0"> <a href="index.php?act=sanphamct&id_sp=<?= $sp['id_sp'] ?>"><?= $sp['ten_sp'] ?></a>
                                        </h4>
                                        <span class="price"><?= number_format($sp['gia_sp'], 0, ',', '.') ?>VND</span>
                                        <div class="products-color d-flex flex-wrap">
                                            <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                            <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                            <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div><!-- Products Wrap -->
            </div>
        </div>
    </section>
</main><!-- Main Wrapper -->