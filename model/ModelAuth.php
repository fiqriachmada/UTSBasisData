<?php
class ModelAuth{
    public function index(){
        require_once("View/auth/index.php");
    }
    public function daftar_author(){
        require_once("View/auth/daftar_praktikan.php");
    }

    public function prosesAuthAuthor($email,$password){
        $sql = "SELECT * FROM author WHERE email='$email' AND password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    public function authAuthor(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = $this->prosesAuthAuthor($email,$password);
        if($data){
            $_SESSION['role'] = "author";
            $_SESSION['author'] = $data;

            header("location: index.php?page=author&aksi=view&pesan=Berhasil Login");
        }else {
            header("location: index.php?page=auth&aksi=login&pesan=Password atau NPM Salah!");
        }
    }
}