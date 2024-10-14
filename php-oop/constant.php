<?php
// constant : nilainya tidak dapat diubah
// constant biasa nya didefinisikan dengan kata kunci define / const (bisa didalam class)
// nilai constant biasanya itu huruf besar


define('NAMA', 'MUHAMMAD SYAUQI MURTADLO');
echo NAMA;
echo "<br/>";
const UMUR = 19;
echo UMUR;

class Coba
{
  const UMUR = 19;
}

echo Coba::UMUR;

// ! MAGIC CONSTANT YANG ADA DI PHP
// __DIR__
// __FILE__
// __LINE__
// __CLASS__
// __TRAIT__
// __METHOD__
// __FUNCTION__
// __NAMESPACE__

echo __FILE__;
