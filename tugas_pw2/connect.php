<?php

$db = mysqli_connect('localhost','root','', 'db_pw2_2023');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}
else{
    echo 'koneksi berhasil!' ;
}

?>