<?php

$db = mysqli_connect('localhost','root','', 'db_pw2_2023');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}
$query = "CREATE DATABASE sekolah";

if(mysqli_query($db, $query)){
    echo 'database sudah di buat';
}
else {
    echo 'gagal membuat database' . mysql_error($db);
}

mysqli_close($db);


?>