<?php

include_once "template/header.php";
include_once "../controllers/c_album.php";
include_once "../controllers/c_login.php";
$album = new c_album();

date_default_timezone_set('Asia/jakarta');
$tanggal = date("Y-m-d H:i:s");

?>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container" >
          <div class="row">
            <div class="col-xl-9 col-lg-5 col-md-7 d-flex flex-column mx-lg-6 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Edit Album</h4>
                  <p class="mb-4"></p>
                </div>
                <div class="card-body">

                <?php foreach($album->edit($_GET['albumid']) as $edit) : ?>
                <form action="../routers/r_album.php?aksi=edit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="albumid" name="albumid" placeholder="albumid" value="<?= $edit->albumid ?>" hidden>
                    </div>

                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Nama Album" aria-label="namaalbum" name="namaalbum" value="<?= $edit->namaalbum ?>">
                    </div>

                    <div class="form-group mt-3">
                      <textarea class="form-control" name="deskripsi" rows="4" placeholder="Deskripsi" required><?= $edit->deskripsi ?></textarea>
                    </div>

                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" value="<?= $tanggal ?>" placeholder="Tanggal Dibuat" aria-label="tanggaldibuat" name="tanggaldibuat" hidden>
                    </div>

                    <div class="col-md-6 form-group mt-3 mt-md-0">
                     <input type="file" class="form-control" value="<?= $edit->photo ?>" name="photo" id="photo" placeholder="Photo" required>
                    </div>

                    <div class="form-group">
                      <input type="id" class="form-control form-control-user" id="userid" value="<?= $_SESSION['userid']?>" name="userid" placeholder="userid" hidden>
                    </div>
                    
                    <div class="text-center text-secondary">
                      <input type="submit" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0" value="Edit Album">
                    </div>
                  </form>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>
<?php

 include_once "template/footer.php.";

?>
</body>

</html>