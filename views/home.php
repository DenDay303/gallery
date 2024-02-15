<?php
include_once "template/header.php";

include_once "../controllers/c_foto.php";
$home = new c_foto();

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Selamat Datang Di Pameran Foto</h2>
          <a href="album.php" class="btn-get-started">Album</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ==
    ===== -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        
        <div class="row gy-4 justify-content-center">
          <?php foreach($home->home() as $neng) : ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="../assets/img/<?= $neng->lokasifile ?>" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="foto1.php?fotoid=<?= $neng->fotoid ?>" title= "Detail" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
    <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

<?php

include_once "template/footer.php.";

?>