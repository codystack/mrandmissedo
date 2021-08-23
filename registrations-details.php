<?php
session_start();

require_once "./config/db.php";

if (isset($_GET['close'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: contact");
}
session_start();

include "./components/header.php";
?>


    <section class="pt-21 pb-20">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-xl-between">
                <div class="col-lg-8 col-xl-6">
                    <div class="row g-2 gallery-1">
                        <div class="col aos-init aos-animate" data-aos="fade-up">
                            <figure class="media media-image equal-md-1-2" data-bp="{&quot;imgSrc&quot;: &quot;./assets/images/pay2.jpg&quot; , &quot;parentGalleryClass&quot;: &quot;gallery-1&quot; }">
                  <span style="background-image: url('assets/images/pay2.jpg')">
                  </span>
                            </figure>              </div>
                        <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <figure class="media media-image equal-md-1-2" data-bp="{&quot;imgSrc&quot;: &quot;./assets/images/hmebg.jpeg&quot; , &quot;parentGalleryClass&quot;: &quot;gallery-1&quot; }">
                  <span style="background-image: url('assets/images/hmebg.jpeg')">
                  </span>
                            </figure>              </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <h2>Registration Successful</h2>
                    <p class="text-secondary">Registration details, please copy or print and keep safe.</p>
                    <div class="row g-0">
                        <div class="col-md-12">
                            <ul class="list-group list-group-minimal">
                                <li class="list-group-item d-flex align-items-center mb-1">
                                    <div class="icon-box icon-box-sm bg-opaque-primary rounded-circle me-2"><i class="bi bi-check2 text-primary"></i>
                                    </div>
                                    <b>Full Name:&nbsp; </b> <?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?>
                                </li>
                                <li class="list-group-item d-flex align-items-center mb-1">
                                    <div class="icon-box icon-box-sm bg-opaque-primary rounded-circle me-2"><i class="bi bi-check2 text-primary"></i>
                                    </div>
                                    <b>Email:&nbsp; </b> <?php echo $_SESSION['email']; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group list-group-minimal">
                                <li class="list-group-item d-flex align-items-center mb-1">
                                    <div class="icon-box icon-box-sm bg-opaque-primary rounded-circle me-2"><i class="bi bi-check2 text-primary"></i>
                                    </div>
                                    <b>Reg No:&nbsp; </b> <?php echo $_SESSION['regCode']; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center col-md-12">
                            <button type="button" class="btn btn-dark btn-block text-white" onclick="window.print()">
                                <span class="btn-inner--text">Print</span>
                            </button>
                            <a href="close" class="btn btn-block btn-danger text-white">
                                <span class="btn-inner--text">Close</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
