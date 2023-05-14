<?php

$db = mysqli_connect('localhost','root','', 'sekolah');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}

$data = " INSERT INTO murid (nama, alamat)
            VALUES ('ayam', 'kota solok'), ('laila', 'kota solok')";

if(mysqli_query($db, $data)){
    echo 'query berhasil';
} else {
    echo 'gagal';
}

mysqli_close($db);
?>
