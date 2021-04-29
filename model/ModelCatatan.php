<?php

class ModelCatatan{
    public function get(){
        $sql =
        "SELECT * FROM catatan";

        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("view/catatan/index.php");
    }

}