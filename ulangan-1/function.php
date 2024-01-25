<?php

$nama = "Safina Latifatul";
$nomer = "081252303788" ;
$alamat = "jl Abdul muis";
$tipeKamar = "Delux";
$lama = 3;
$batas = 5;
$harga1 = 200000;
$harga2 = 400000;

echo "===== Program reservasi hotel Sederhana===== <br />";
echo "Nama pemesan : $nama<br />";
echo "Nomer WhatsApp : $nomer <br />";
echo "Alamat : $alamat <br />";
echo "Tipe kamar : $tipeKamar<br />";

if ($tipeKamar == "Deluxe" && $lama > 4){
    $biaya = $harga1 * $lama * 50/100;
   }else{
    $biaya = $harga1 * $lama;
   }

if ($tipeKamar == "Superior" && $lama > 4){  
    $biaya = $harga2 * $lama * 50/100;
   }else{
    $biaya = $harga2 * $lama;
   }

   echo "biaya = $biaya";
?>