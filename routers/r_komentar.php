<?php

include_once "../controllers/c_komentar.php";
$komen = new c_komentar();

if ($_GET['aksi'] == 'tambah') {
    $komentarid = $_POST['komentarid'];
    $fotoid = $_POST['fotoid'];
    $userid = $_POST['userid'];
    $isikomentar = $_POST['isikomentar'];
    $tanggalkomentar = $_POST['tanggalkomentar'];

    $komen->insert_komentar($komentarid, $fotoid, $userid, $isikomentar, $tanggalkomentar);
    header("Location:../views/foto1.php?fotoid=$fotoid");

} elseif ($_GET['aksi'] == 'hapus') {
    $komentarid = $_GET['komentarid'];
    $fotoid =$_GET['fotoid'];

    $komen->delete($komentarid);
    header("Location: ../views/foto1.php?fotoid=$fotoid");
}