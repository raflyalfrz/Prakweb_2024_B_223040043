<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 25000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


echo "<hr>";

new coba();
