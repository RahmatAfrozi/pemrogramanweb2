<?php
    include "orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
        <?php
        //proses instanisasi
        $mahasiswa = new orang('Afrozi');

        //menggunakan setter dan getter
        $mahasiswa->setNama('Afrozi');
        $mahasiswa->setTglLahir('2005-02-10');
        $mahasiswa->setAlamat('Kerinci');

        echo "<br>";
        echo "Data Mahasiswa". $mahasiswa->getNama(). "<br>";
        echo "Nama : ". $mahasiswa->getNama() ."<br>";
        echo "Tgl Lahir : ". $mahasiswa->getTglLahir() ."<br>";
        echo "Alamat : ". $mahasiswa->getAlamat() ."<br>";

        //memanggil method
        $mahasiswa->ucapkanSalam();

        echo "<br>";
        $mahasiswa2 = new orang('Lionel Messi');

        $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>
</html>