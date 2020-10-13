<?php
// buat toko
// buku & game
class Produk
{
    public $judul = "Judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Shonen Jump";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = 25000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 133000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();
