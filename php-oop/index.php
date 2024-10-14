<?php

// ? class adalah tempat untuk object, sedangkan object adalah turunan dari class
// ? satu class bisa berisi banyak object
// ? tidak ada artinya class tanpa object
// ? cara mendefinisikan object yaitu dengan menggunakan kata kunci 'new'
// class Coba
// {
// }

// $a = new Coba();
// $b = new Coba();
// $c = new Coba();

// var_dump($a);
// var_dump($b);

// ? property : mempresentasikan data / keadaan dari sebuah object
// ? property : variable yang ada di dalam object
// ? property : sama seperti variable pada php, ditambah visibility (public, protected, & private) didepannya

// ? method : mempresentasikan perilaku dari sebuah object
// ? method : function yang ada di dalam object
// ? method : sama seperti function pada php, ditambah visibility (public, protected, & private) didepannya

class Produk
{
  public  $judul = "judul";
  public  $penulis = "penulis";
  public  $penerbit = "penerbit";
  public  $harga = 0;

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Sasuke";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->judul, $produk3->penulis";
// echo "<br/>";
// echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Ucharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Kumpoter";
$produk4->harga = 250000;

echo "Komik :" . $produk3->getLabel();
echo "<br/>";
echo "Game :" . $produk4->getLabel();
