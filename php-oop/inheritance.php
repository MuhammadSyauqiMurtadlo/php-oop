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

// ! inheritance = class parent & class child

class Produk
{
  public  $judul;
  public  $penulis;
  public  $penerbit;
  public  $harga;
  public  $jmlHalaman;
  public  $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }

  public function getInfoProduk()
  {
    $str = " {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class cetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = " {$produk->getLabel()} | {$produk->penerbit} (Rp. {$produk->harga}) ";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

$produk2 = new Game("Ucharted", "Neil Druckmann", "Sony Kumpoter", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
