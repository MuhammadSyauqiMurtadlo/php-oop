<?php
// INTERFACE :
// kelas abstrak yang sama sekali tidak memiliki implementasi
// murni merupakan template untuk kelas turunannya
// tidak boleh memiliki property, hanya deklarasi method saja
// semua method harus dideklarasikan dengan visibility public
// boleh mendeklarasikan __construct()
// satu kelas boleh mengimplementasikan banyak interface
// dengan menggunakan type-hinting dapat melakukan dependency injection
// pada akhirnya akan mencapai polymorphism

interface InfoProduk
{
  public function getInfoProduk();
  // ?hanya boleh deklarasi method, tidak boleh disertakan implementasi

}

abstract class Produk
{
  protected  $judul;
  protected  $penulis;
  protected  $penerbit;
  protected  $diskon = 0;
  protected  $harga;

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

  abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo()
  {
    $str = " {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk implements InfoProduk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

    $this->waktuMain = $waktuMain;
  }

  public function getInfo()
  {
    $str = " {$this->getLabel()} | {$this->penerbit} (Rp. {$this->harga})";
    return $str;
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
