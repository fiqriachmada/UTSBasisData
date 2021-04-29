<?php

class ModelAuthor{
    public function get($idAuthor){
        $sql =
        "SELECT * FROM catatan WHERE author_id=$idAuthor";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
    public function index(){
        $idAuthor = $_SESSION['author']['id'];
        $data = $this->get($idAuthor);
        extract($data);
        require_once("view/author/index.php");
    }
    public function prosesAddCatatan($nama, $catatan, $idAuthor){
        $sql = "INSERT INTO catatan(judul,catatan,author_id)
        VALUES('$nama','$catatan','$idAuthor')";
        return koneksi()->query($sql);
    }

    public function addCatatan(){
        $nama = $_POST['nama'];
        $catatan = $_POST['catatan'];
        $idAuthor = $_GET['idAuthor'];
        if($this->prosesAddCatatan($nama,$catatan,$idAuthor)){
            header("location: index.php?page=author&aksi=view&pesan=sukses menambah catatan");
        }else{
            header("location: index.php?page=author&aksi=view&pesan=gagal menambah catatan");
        }
    }

}