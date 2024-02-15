
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://3.bp.blogspot.com/-Y9AvSF928D0/VD5ucs_iCnI/AAAAAAAAICg/JGrgHSPwDck/s1600/genezers-19.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-dark mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-dark">Use these awesome forms to login or create new account in your project.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center text-dark pt-4">
              <h4>Registrasi </h4>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
            
                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                  
                </p>
            
            </div>
            <div class="card-body">
              <form action="routers/r_login.php?aksi=register" method="post">
                <input type="text" name="userid" id="userid" hidden>
                <div class="mb-3">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
                <div class="mb-3">
                  <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="text-center text-secondary">
                  <input type="submit" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0" name="registrasi" value="Registrasi">
                </div>
                <p class="text-sm  text-dark mt-3 mb-0">Already have an account? <a href="index.php" class="text-secondary font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
</body>

</html>