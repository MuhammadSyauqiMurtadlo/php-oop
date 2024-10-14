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

  public function getInfoProduk()
  {
    $str = " {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

    $this->jmlHalaman = $jmlHalaman;
  }


  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Ucharted", "Neil Druckmann", "Sony Kumpoter", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
