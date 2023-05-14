<?php

$db = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}

$query = "SELECT * FROM murid";
$hasil = mysqli_query($db, $query);

if (mysqli_num_rows($hasil) > 0){
    while ($data = mysqli_fetch_assoc($hasil)){
       echo 'id: ' . $data['id'];
    }
} else {
    echo 'tabelnya kosong';
}

mysqli_close($db);
?>
