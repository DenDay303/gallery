<?php

include_once "../controllers/c_login.php";
include_once "../controllers/c_album.php";
include_once "template/header.php";

$baru = new c_album();

?>

<body>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Album</h2>
            <p>Jawa adalah sebuah pulau di Indonesia yang terletak di kepulauan Sunda Besar dan merupakan pulau terluas ke-13 di dunia.Pulau ini terbagi menjadi enam provinsi, yaitu Jawa Barat, Jawa Tengah, Jawa Timur, dan Banten, serta dua wilayah khusus, yaitu DKI Jakarta dan DI Yogyakarta.</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <?php if (empty($baru->read())) { 
      echo'<h3 class="text-secondary"> You is Not Have a Album';
    }else{  ?>
    <?php foreach ($baru->read() as $read) : ?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="../assets/img/<?= $read->photo ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
          <a href="foto.php?albumid=<?= $read->albumid ?>">
            <h2><?= $read->namaalbum ?></h2>
          </a>
          <div class="row">
            <div class="col-lg-6">
              <ul><span><?= $read->tanggaldibuat ?></span></li> </ul>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li>
                    <?php
                      if ($_SESSION['userid'] ==  $read->userid) {
                     ?>
                      <i class="bi bi-chevron-right"></i> 
                      <a class="cta-btn" href="editalbum.php?albumid=<?= $read->albumid ?>">Edit</a>
                    <?php }?>
                    
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li>
                  <?php
                    if ($_SESSION['userid'] ==  $read->userid) {
                  ?>
                    <i class="bi bi-chevron-right"></i>
                    <a class="cta-btn" href="../routers/r_album.php?AlbumID=<?= $read->albumid ?>&aksi=delete" onclick="return confirm('Yakin ingin menghapus data ini?')" >Hapus</a>
                  <?php }?>  
                  </li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            <?= $read->deskripsi ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <?php endforeach; ?>
   <?php } ?>

<?php

 include_once "template/footer.php.";

?>
 

</body>

</html>