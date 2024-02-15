<?php

include_once "../controllers/c_album.php";
include_once "../controllers/c_foto.php";
include_once "template/header.php";

$baru = new c_album();
$foto = new c_foto();


?>
    <?php foreach ($baru->edit($_GET['albumid']) as $read) : ?>
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2><?= $read->namaalbum ?></h2>
            <p><?= $read->deskripsi ?></p>

            <a class="cta-btn" href="tambahfoto.php?albumid=<?php echo $_GET['albumid'];?>">Tambah Foto</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    <?php endforeach; ?>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <?php if (empty($foto->read($_GET['albumid']))) { 
      echo'<h3 class="text-secondary"> You is Not Have a Album';
    }else{  ?>
   
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
         <?php foreach ($foto->read($_GET['albumid']) as $read) : ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="../assets/img/<?= $read->lokasifile ?>" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
              <?php
               if ($_SESSION['userid'] ==  $read->userid) {
              ?>
                <a href="editfoto.php?fotoid=<?= $read->fotoid ?>" title= "" class="details-link"><i class="bi bi-pencil-square"></i></a>
                <a href="../routers/r_foto.php?fotoid=<?= $read->fotoid ?>&aksi=delete&albumid=<?= $read->albumid ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"  title= "hapus" class="details-link"><i class="bi bi-trash"></i></a>
              <?php }?>  
                <a href="foto1.php?fotoid=<?= $read->fotoid ?>" title= "Detail" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <?php endforeach; ?>
         <?php } ?>
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

<?php

include_once "template/footer.php.";

?>