<?php

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
