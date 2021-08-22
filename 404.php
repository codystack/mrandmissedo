<!doctype html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6YWB4ECCWW"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
  
      gtag('config', 'G-6YWB4ECCWW');
  </script>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
  
  <!-- Libs CSS -->
  <link rel="stylesheet" href="assets/css/libs.bundle.css" />
  
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/index.bundle.css" />
  
  <!-- Title -->
  <title>404</title></head>

<body class="bg-black">
  
  


  <!-- hero -->
  <section class="inverted">
    <div class="d-flex flex-column container min-vh-100 py-20">
      <div class="row align-items-center justify-content-center justify-content-lg-between my-auto">
        <div class="col-lg-6 order-lg-2">
          <img class="img-fluid" src="assets/images/svg/404.svg" alt="Figure">
        </div>
        <div class="col-md-8 col-lg-5 order-lg-1 text-center text-lg-start">
          <h1 class="display-2">Sorry, page not found.</h1>
          <button onclick="goBack()" class="btn btn-outline-white">Go back</button>
        </div>
      </div>
    </div>
  </section>

  <!-- javascript -->
  <script src="assets/js/vendor.bundle.js"></script>
  <script src="assets/js/index.bundle.js"></script>
  <script>
      function goBack() {
          window.history.back();
      }
  </script>

</body>

</html>