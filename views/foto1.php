<?php

include_once "template/header.php";
include_once "../controllers/c_foto.php";
include_once "../controllers/c_komentar.php";
include_once "../controllers/c_like.php";

$foto = new c_foto();
$komentar = new c_komentar();
$like = new c_like();

date_default_timezone_set('Asia/Jakarta');
$waktu = date("Y-m-d H:i:s");
?>
<body>
	<?php foreach ($foto->read1($_GET['fotoid']) as $read) : ?>
		<div class="container">
			<div class="blog__banner pt-4 pb-5" >
				<img src="../assets/img/<?= $read->lokasifile ?>" alt="">
			</div>
			<div class="blog__container">
				<div style="text-align: left;">
				<h2><?= $read->judulfoto ?></h2>
				<p><?= $read->deskripsifoto ?> </p>	
				</div>
			</div>
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="text-secondary"><?= $like->jumlah($read->fotoid) ?> Like | <?= $komentar->jumlah($read->fotoid) ?> Comments</h6>
            </div>
			<?php endforeach; ?>
			<div class="blog__container post__footer">
				<div class="row">
					<div class="col-md-6">
						<div class="post__tags">
							<?php if ($like->user($read->fotoid, $userid) == 0) { ?>
							<a href="../routers/r_like.php?fotoid=<?= $read->fotoid ?>&userid=<?= $userid ?>&aksi=like" title= "Like" class="details-link"><i class="bi bi-hand-thumbs-up"></i>Like</a>
							<?php } else { ?>
							<a href="../routers/r_like.php?fotoid=<?= $read->fotoid ?>&userid=<?= $userid ?>&aksi=delete" title= "Unlike" class="details-link"><i class="bi bi-hand-thumbs-down"></i>Unlike</a> 
							<?php } ?>
						</div> 
					</div>
				</div>
				<br>
				<?php
				if (empty($komentar->read_komentar($read->fotoid))) {
                    echo "";
                } else { ?>
                    <?php foreach ($komentar->read_komentar($read->fotoid) as $komen) : ?>
                        <div class="alert alert-dark alert-dismissible fade show" col-lg-12 role="alert">
                            <a class="nav-link nav-profile align-items-center pe-0" data-bs-toggle="dropdown">
                                <span class="username text-dark" ><?= $komen->username ?> </span>
                                <span style="margin-left: 80%;">
                                    <?= $komen->tanggalkomentar ?>
                                </span>
                                <br>
                                <span><?= $komen->isikomentar ?></span>
                            
                                 <?php if ($userid == $komen->userid) { ?>
                                    <a href="../routers/r_komentar.php?komentarid=<?= $komen->komentarid ?>&aksi=hapus&fotoid=<?= $read->fotoid ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"  class="btn-close"></a>
                                <?php } ?>  
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
				<form class="row g-3 mt-3" action="../routers/r_komentar.php?aksi=tambah" method="post">
                    <input type="text" name="isikomentar" class="form-control" placeholder="Comments">
                    <input type="text" name="komentarid" id="id" hidden >
                    <input type="text" name="userid" id="" value="<?= $userid ?>" hidden>
                    <input type="text" name="fotoid" id="" value="<?= $read->fotoid ?>" hidden>
                    <input type="text" name="tanggalkomentar" id="" value="<?= $waktu ?>" hidden>
                    <button type="submit"hidden > </button>
                </form>
			</div>
		</div>
		

	 <!-- Blog Page end -->

 	<?php
  include_once "template/footer.php";
 ?>

	</body>
</html>
