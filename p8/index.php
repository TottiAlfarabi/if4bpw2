<?php
require_once("Mobil.php");

$mobil = new MobilJepang();
$mobil2 = new MobilJepang();
$mobil3 = new MobilItalia();

$mobil->warna = "Merah";
$mobil2->warna = "Hitam";
$mobil3->warna = "Kuning";

$mobil->merek = "Daihatsu";
$mobil2->merek = "Toyota";
$mobil3->merek = "Supra";

$mobil->setHarga(300000000);




echo $mobil2->merek." berwarna ".$mobil2->warna." Harganya : ".convert_to_rupiah($mobil->getHarga())."<br>";

echo $mobil3->merek." berwarna ".$mobil3->warna." ".$mobil3->bunyi();

?>