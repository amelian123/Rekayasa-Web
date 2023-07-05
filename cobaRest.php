<?php
include("Rest.php");

$coba = new Rest();

//1. uji coba ambil data

//1. $coba->getWisata(2); //2 itu id dari tabel diphpmyadmin


//2. uji coba tambah data
$data = array(
    'id' => '5',
    'kota' => 'kota2',
    'landmark' => 'landmark2',
    'tarif' => '2jt' 
);
//$coba->updateWisata($data);
//$coba->insertWisata($data);
$coba->deleteeWisata($data);
?>