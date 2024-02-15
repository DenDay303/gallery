<?php

session_start();
include_once "c_conn.php";

class c_login{
    public function register($userid, $username, $password, $email, $namalengkap, $alamat) {
        $conn = new c_conn();
        $query = mysqli_query($conn->conn(), "INSERT INTO user VALUES ('$userid', '$username', '$password', '$email', '$namalengkap', '$alamat')");
        
        header("location: ../index.php");
        exit;
    }

    public function login ($email, $password){
        $conn = new c_conn();
        if (isset($_POST['login'])){
            $query = mysqli_query($conn->conn(), "SELECT * FROM user WHERE email='$email'");
            $data = mysqli_fetch_assoc($query);
            if ($data){
                if(password_verify($password, $data['password'])){
                    $_SESSION['data'] = $data;
                    $_SESSION['userid'] = $data['userid'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['namalengkap'] = $data['namalengkap'];
                    $_SESSION['alamat'] = $data['alamat'];

                    header("Location: ../views/home.php");
                    exit;
                
            
                }else {
                    echo "<script> alert('password anda salah!');
                    document.location.href = '../index.php';
                    </script>";

                }
            }else{
                echo "<script> alert('username / email anda salah');
                    document.location.href = '../index.php';
                    </script>";
            }
        }
    }

    public function logout(){

        //menghentikan session
        session_destroy();
 
        header("location: ../index.php");
        exit;

    }
}