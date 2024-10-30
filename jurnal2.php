<?php
$buah = array ("apel" =>10000, "pisang" =>5000, "mangga" =>15000);
// $buah = array("Apel","Pisang","Mangga");


$barang = strtolower(readline("Masukkan nama buah (Apel,mangga,pisang) ="));

function cekbarang($barang,$buah){
    foreach($buah as $nama => $harga){
        if($barang == $buah){
            return true;
        }
        else {
         return false;
        }
    }
}

$buahtersedia=cekbarang($barang,$buah);
if($buahtersedia = true){
    $jumlah = readline("masukkan jumlah buah = ");
    $harga = $jumlah * $buah[$barang];
    $diskon= $harga*0.25;
    $total=$harga-$diskon;

    echo "Total harga untuk $jumlah buah $barang adalah: $total";
        
} else{
    echo"maaf, buah tidak tersedia";
}


