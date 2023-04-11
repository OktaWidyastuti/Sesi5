<?php 
    include("konfigurasi.php");
   
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMHS";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(30),
            nim VARCHAR(10),
            alamat VARCHAR(225),
            telp VARCHAR(15),
            prodi VARCHAR(225),
            jeniskelamin VARCHAR(2),
            tgllahir DATE
            
        )";
        $hasil = mysqli_query ($cnn, $sql );
        if($hasil){
            echo "Pembuatan tabel " . $tbel . " Sukses"; 
        }else{
            echo "Pembuatan tabel " . $tble . " Gagal";
        }


    }else{
        echo"Koneksi ke Mysql sukses";
    }