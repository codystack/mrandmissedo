<?php
include "./components/header.php";
include "./components/navbardark.php";
?>

<section class="pt-21 pb-20">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-xl-between">
            <div class="col-sm-12 col-lg-8 col-xl-6">
                <div class="row g-2 gallery-1">
                    <div class="col aos-init aos-animate" data-aos="fade-up">
                        <figure class="media media-image equal-md-1-2" data-bp="{&quot;imgSrc&quot;: &quot;./assets/images/pay1.jpg&quot; , &quot;parentGalleryClass&quot;: &quot;gallery-1&quot; }">
                            <span style="background-image: url('assets/images/pay1.jpg')"></span>
                        </figure>
                    </div>
                    <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <figure class="media media-image equal-md-1-2" data-bp="{&quot;imgSrc&quot;: &quot;./assets/images/pay2.jpg&quot; , &quot;parentGalleryClass&quot;: &quot;gallery-1&quot; }">
                            <span style="background-image: url('assets/images/pay2.jpg')"></span>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-5">
                <h2>Mr & Miss Edo Registration</h2>
                <p class="text-secondary">Register using any mode of payment that suits you, the <b>Pay Online</b> allows you to pay using your debit or credit card while the <b>Bank Transfer</b> allows you register by making payment through bank deposit or transfer.</p>
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="row justify-content-center justify-content-lg-start g-1 mb-3">
                            <div class="col-auto"><a href="https://paystack.com/pay/i4xpu0pqco" class="btn btn-dark">Pay Online</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center justify-content-lg-start g-1 mb-3">
                            <div class="col-auto"><a href="register-banktransfer" class="btn btn-outline-dark">Bank Transfer</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "./components/footer.php"; ?>
