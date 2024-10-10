
<?php

require_once "Buku.php";

class DaftarBukuModel{

public function getData(){
    $daftar_buku = array(
        new Buku('Belajar Pemrograman Web', 'Robert T.', 'Informatika', '2024'),
        new Buku('Matematika Diskrit', 'Rinaldi M.', 'Andi Publisher', '2017'),
        new Buku('Kalkulus', 'Emely S.', 'Airlangga', '2024'),
        new Buku('Metodologi Penelitian', 'James M.', 'UIN Publisher', '2018'),
    );

    return $daftar_buku;
}

public function getKolomTabel(){
    $kolom_tabel = array(
    'No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun'
    );

    return $kolom_tabel;
}
}
