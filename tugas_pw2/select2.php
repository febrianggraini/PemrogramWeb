<?php

$db = mysqli_connect('localhost','root','', 'sekolah');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}

$query = "SELECT id, nama, alamat FROM murid";
$hasil = mysqli_query($db, $query); 

if(mysqli_num_rows($hasil) > 0){
    while($data = mysqli_fetch_assoc($hasil)){
       echo 'ID: ' . $data['id'] .
        ' | Nama Murid: ' . $data['nama'] .
        ' | Alamat: ' . $data['alamat'] . "<br>";
    }

}else {
    echo 'Tabelnya kosong';
}

mysqli_close($db);
?>
