<?php

include_once "../controllers/c_like.php";
$like = new c_like();

date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d H:i:s");

if ($_GET['aksi'] == 'like') {
    $userid = $_GET['userid'];
    $fotoid = $_GET['fotoid'];

    $like->like($likeid, $fotoid, $userid, $date);

    header("Location: ../views/foto1.php?fotoid=$fotoid");

}elseif ($_GET['aksi'] == 'delete') {
    $userid = $_GET['userid'];
    $fotoid = $_GET['fotoid'];
    
    $like->delete_like($userid);
    header("Location: ../views/foto1.php?fotoid=$fotoid");
}