<?php
session_start();
include "./components/header.php";
include "./components/navbardark.php";
require_once "./controllers/registration.php";
?>

    <section class="pt-21 pb-20 border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                    <h4>Please kindly fill in your details<br>correctly in the form below.</h4>
                    <?php
                    if (isset($_SESSION['error_status'])) {
                        ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle"></i>
                            <div>
                                <?php echo $_SESSION['error_status']; ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['error_status']);
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['success_status'])) {
                        ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="bi bi-check2-square"></i>
                            <div>
                                <?php echo $_SESSION['success_status']; ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['success_status']);
                    }
                    ?>
                </div>
                <div class="col-lg-8">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" required name="firstName" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" required name="lastName" placeholder="Your Surname">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" required name="email" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNum" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" required name="phoneNum" placeholder="0812 345 6789">
                        </div>
                        <div class="col-md-6">
                            <label for="lga" class="form-label">LGA</label>
                            <input type="text" class="form-control" required name="lga" placeholder="Local Government Area">
                        </div>
                        <div class="col-md-6">
                            <label for="ydateOfBirth" class="form-label">Date of Birth</label>
                            <input type="date" required class="form-control" name="dateOfBirth">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example" required name="gender">
                                <option selected="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="height" class="form-label">Height</label>
                            <input type="text" class="form-control" name="height" placeholder="Height in meters">
                        </div>
                        <div class="col-md-6">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="text" required class="form-control" name="occupation" placeholder="What do you do?">
                        </div>
                        <div class="col-md-6">
                            <label for="occupation" class="form-label">Instagram Handle</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" name="igHandle" class="form-control" placeholder="miss_dorime_example" aria-label="miss_dorime_example" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="button" class="btn btn-dark btn-with-icon mt-3">
                                <i class="bi bi-check2-square"></i> Payment made using Paystack
                            </button>
                        </div>
                        <div class="col-md-6">
                            <label for="picture" class="form-label">Photograph</label>
                            <input class="form-control" required type="file" name="picture">
                        </div>

                        <div class="col-md-12">
                            <label for="biography" class="form-label">Biography</label>
                            <textarea class="form-control" name="biography" rows="3" placeholder="Brief biography about yourself, career ambition, scholastic ambition and hobbies."></textarea>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required id="gridCheck">
                                <label class="form-check-label text-muted small" for="gridCheck">
                                    I accept the <a href="" class="underline">Terms
                                        &amp; Conditions</a> and acknowledge that my information will be used in accordance with Privacy
                                    Policy.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="register_btn_online" class="btn btn-block btn-dark">Complete Registration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include "./components/footer.php"; ?>