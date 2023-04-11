<?php 
    include("konfigurasi.php");
   
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMataKuliah";
        $sql = "CREATE TABLE $tbel(
            kodeMK VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(10),
            sks INT
            
            
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