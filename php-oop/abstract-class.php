<?php
//? Abstract Class
// Sebuah class yang tidak dapat di instansiasi (tidak dapat membuat object)
// kelas 'abstrak'
// mendefinisikan interface untuk kelas lain yang menjadi turunannya
// berperan sebagai kerangka dasar untuk kelas turunannya
// memiliki minimal 1 method
// digunakan dalam 'pewarisan'/ inheritance untuk memaksakan implementasi method abstrak yang sama untuk semua kelas turunannya

// semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
// kelas abstrak boleh memiliki property / method
// kelas abstrak boleh memiliki property / static method

abstract class Produk
{
  private  $judul;
  private  $penulis;
  private  $penerbit;
  private  $diskon = 0;
  private  $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  // private
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }
  public function getJudul()
  {
    return $this->judul;
  }
  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }
  public function getPenulis()
  {
    return $this->penulis;
  }
  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }
  public function getPenerbit()
  {
    return $this->penerbit;
  }
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }
  public function getDiskon()
  {
    return $this->diskon;
  }
  public function setHarga($harga)
  {
    $this->harga = $harga;
  }
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  // end private

  public function getLabel()
  {
    return "$this->judul, $this->penulis";
  }

  abstract public function getInfoProduk();

  public function getInfo()
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
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public $daftarProduk = array();

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Ucharted", "Neil Druckmann", "Sony Kumpoter", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
