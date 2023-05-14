<?php

$db = mysqli_connect('localhost','root','', 'db_pw2_2023');

if (!$db){
    die("gagal koneksi ke db " . mysqli_connect_error());
}
$query = "SELECT * FROM murid;";
$query = "SELECT * FROM murid WHERE id = 6";


if(mysqli_multi_query($db, $query)){
    do{
        if ($hasil = mysqli_use_result($db)){
            while($data = mysqli_fetch_assoc($hasil)){
                echo ' ' . $data[nama];
            }
            mysqli_free_result($hasil);
        }
        if(mysqli_more_results($db)){
            echo '----masih ada ---';
        }
    }while(mysqli_next_result($db));
}


mysqli_close($db);


?>