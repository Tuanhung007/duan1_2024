<?php
   include "header.php";
  
?>
<main>
    <section>
        <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
            <div class="lg-rg-img position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                <div class="logo"><h1 class="mb-0"><a href="index-2.html" title="Home"><img src="assets/images/logo.svg" alt="Logo"></a></h1></div><!-- Logo -->
            </div>
            <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                <div class="lg-rg-form-top align-items-center justify-content-between d-flex flex-wrap w-100">
                    <a class="back-btn rounded-circle" href="login.html" title=""><i class="fi fi-rr-angle-small-left"></i></a>
                    <p class="mb-0">Already a member? <a href="login.html" title="">Sign In</a></p>
                </div>
                <div class="lg-rg-form-inner w-100">
                    <h2 class="mb-0">Forgot Password?</h2>
                    <p class="mb-0">Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
                    <form>
                        <div class="field-box v2 position-relative w-100">
                            <label>Email</label>
                            <input type="email">
                        </div>
                        <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                            <button class="theme-btn bg-color1" type="submit">Sent Reset Instructions<span></span><span></span><span></span><span></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Login & Register Wrap -->
    </section>
</main><!-- Main Wrapper -->

<?php
     include "footer.php";
?>