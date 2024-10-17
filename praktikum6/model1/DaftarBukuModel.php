<?php

require_once "Buku.php";
require_once "controller1/Database.php";

class DaftarBukuModel{

public function getData(){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $daftar_buku = [];

    if($query->num_rows>0){
        while($row = $query->fetch_assoc()){
            $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
            array_push($daftar_buku, $buku);
        }
    }

    return $daftar_buku;
}

public function getKolomTabel(){
    $kolom_tabel = array(
    'No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun'
    );

    return $kolom_tabel;
}


// database: perpustakaan
// table : buku
// id int (11) primary key auto increment,
// judul varchar (150),
// penerbit varchar (150),
// tahun int (5)
}