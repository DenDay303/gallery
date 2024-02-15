<?php
include_once "c_conn.php";
class c_album{
    public function insert($albumid, $namaalbum, $deskripsi, $tanggaldibuat, $photo, $userid){
        $conn = new c_conn();
        $query = "INSERT INTO album VALUES ('$albumid', '$namaalbum', '$deskripsi', '$tanggaldibuat', '$photo', '$userid')";
        $data = mysqli_query($conn->conn(), $query);
        
    }
    public function read(){
        $conn = new c_conn();
        // perintah mengambil semua data dari barang dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM album ORDER BY albumid DESC";
        $data = mysqli_query($conn->conn(), $query);

        // mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }   

        // mengembalikan nilai
        if (!empty($rows)) {
            return $rows;
        }
    }

    public function edit($albumid) {
        $conn = new c_conn();
        $query = mysqli_query($conn->conn(), "SELECT * FROM album WHERE albumid = $albumid");
        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    
    public function update($albumid, $namaalbum, $deskripsi, $photo){
        $conn = new c_conn();
        $query = mysqli_query($conn->conn(), "UPDATE album SET namaalbum='$namaalbum', deskripsi='$deskripsi', photo ='$photo' WHERE albumid = $albumid");
    }
    
    public function delete($id){
        $conn = new c_conn();

        // perintah untuk menghapus data dari barang berdasarkan id
        $query = "DELETE FROM album WHERE albumid = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/album.php");
    }
}
?>