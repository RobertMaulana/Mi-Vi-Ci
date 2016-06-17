<?php

function AutoLoad($files){
    require '../Configuration/'. $files .'.php';
}

spl_autoload_register('AutoLoad');

$baru = new connection();
$tes = $baru->connect_mysqli();

if($tes){
    echo 'Koneksi berhasil';
}else{
    echo 'Koneksi gagal';
}

?>