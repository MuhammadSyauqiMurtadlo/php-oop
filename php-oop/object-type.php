<?php

// ? class adalah tempat untuk object, sedangkan object adalah turunan dari class
// ? satu class bisa berisi banyak object
// ? tidak ada artinya class tanpa object
// ? cara mendefinisikan object yaitu dengan menggunakan kata kunci 'new'


// ? property : mempresentasikan data / keadaan dari sebuah object
// ? property : variable yang ada di dalam object
// ? property : sama seperti variable pada php, ditambah visibility (public, protected, & private) didepannya

// ? method : mempresentasikan perilaku dari sebuah object
// ? method : function yang ada di dalam object
// ? method : sama seperti function pada php, ditambah visibility (public, protected, & private) didepannya


// ! constructor adalah method khusus yang akan dijalankan secara otomatis ketika kita menambahkan object di sebuah class

class Produk
{
  public  $judul;
  public  $penulis;
  public  $penerbit;
  public  $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }
}

class cetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->getLabel()} | {$produk->penerbit} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Ucharted", "Neil Druckmann", "Sony Kumpoter", 250000);

echo "Komik :" . $produk1->getLabel();
echo "<br/>";
echo "Game :" . $produk2->getLabel();
echo "<br/>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
