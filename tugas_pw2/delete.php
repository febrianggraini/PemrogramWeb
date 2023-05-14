<?php

$db = mysqli_connect('localhost','root','', 'sekolah');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}

$data = 'DELETE from murid WHERE id in (2, 3, 4)';




if(mysqli_query($db, $data)){
    echo 'query berhasil';
} else {
    echo 'gagal';
}

mysqli_close($db);
?>
