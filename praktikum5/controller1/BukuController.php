<?php

require_once "Model1/DaftarBukuModel.php";
class BukuController{
    public function jalankan(){

        // menggunakan model
        $dataModel = new DaftarBukuModel();

        // mengirim dataModel ke bukuView dan menampilkannya
        include"View1/BukuView.php";
    }
}