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
  public $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } elseif ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("Ucharted", "Neil Druckmann", "Sony Kumpoter", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();
