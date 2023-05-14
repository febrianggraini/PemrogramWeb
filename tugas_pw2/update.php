<?php

$db = mysqli_connect('localhost','root','', 'sekolah');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}

$data ="UPDATE murid SET alamat = 'kota solok' WHERE id = 1";




if(mysqli_query($db, $data)){
    echo 'query berhasil';
} else {
    echo 'gagal';
}

mysqli_close($db);
?>
