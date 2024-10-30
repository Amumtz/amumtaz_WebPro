<?php
$makanan = [
    "Pecel" => 10000,
    "Nasi Kuning" => 12000,
    "Nasi Goreng" => 15000,
    "Spaghetti" => 20000
];
$minuman = [
    "Air Mineral" => 3000,
    "Cendol" => 5000,
    ["Es Kopi" => 7000],
    ["Es Teh" => 2500]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
    if (isset($_POST["jumlah"]) && isset($_POST["jumlah1"])){
        $makan = $_POST["Makanan"];
        $jumlahmakan =$_POST["jumlah"];
        $minum = $_POST["Minuman"];
        $jumlahminum = $_POST["jumlah1"];

        
        echo '<br> Makanan '.$makan.'<br>';
        echo 'Minuman '.$minum,'<br>';
        
        
    }
    function cekbarang($makan,$makanan, $minum, $minuman){
        foreach($makanan as $nama => $harga){
            if($makan == $makanan){
                return true;
            }
            else {
             return false;
            }
        }
        foreach($minuman as $nama => $harga){
            if($minum == $minuman){
                return true;
            }
            else {
             return false;
            }
        }
    }

    $menutersedia=cekbarang ($makan,$makanan, $minum, $minuman);
    if($menutersedia = true){
        $harga = $jumlahmakan * $makanan[$makan]+ $jumlahminum * $minuman[$minum];
        echo "Total harga untuk $makan dan $minum adalah: $harga";
    }
    

}