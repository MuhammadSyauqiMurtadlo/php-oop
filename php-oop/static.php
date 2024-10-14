<?php
// static keyword :
// member yang terikat dengan class, bukan dengan object
// nilai static akan selalu tetap meskipun object di instansiasi berulang kali
// membuat kode menjadi 'procedural'
// biasanya digunakan untuk mesin bantuan / helper
// atau digunakan di class - class utility pada framework

class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

echo ContohStatic::$angka;
echo "<br/>";
echo ContohStatic::halo();
echo "<br/>";
echo ContohStatic::halo();
