<?php

$Angka = [16, 40];


$menu= 3;


if ($menu == 1) {
    echo "Penjumlahan <br>";
    $Jumlah =0;
    $i = 0;
    while ($i < count($Angka)){
        $Jumlah += $Angka[$i]; 
        if($i < count($Angka)-1){
            echo "$Angka[$i] + ";
        } else{
            echo "$Angka[$i] ";
        }
        $i++;
    }
    echo "= $Jumlah";
} elseif ($menu == 2){
    echo "Rata-rata <br>";
    $i = 0;
    $Jumlah =0;
    while ($i < count($Angka)){
        $Jumlah += $Angka[$i]; 
        $i++;
    }

    $Rata_rata = $Jumlah / count($Angka);
    echo "Rata-rata = $Rata_rata";
} elseif ($menu == 3){
    echo "Penjumlahan <br>";
    $Jumlah =0;
    $i = 0;
    while ($i < count($Angka)){
        $Jumlah += $Angka[$i]; 
        if($i < count($Angka)-1){
            echo "$Angka[$i] + ";
        } else{
            echo "$Angka[$i] ";
        }
        $i++;
    }
    echo "= $Jumlah";

    echo "<br> Rata-rata <br>";
    $i = 0;
    $Jumlah =0;
    while ($i < count($Angka)){
        $Jumlah += $Angka[$i]; 
        $i++;
    }

    $Rata_rata = $Jumlah / count($Angka);
    echo "Rata-rata = $Rata_rata";
} elseif($menu == 4){
    $Jumlah = $Angka[0]; 
    $i = 1; 
    
    while ($i < count($Angka)) {
        $Jumlah = $Angka[$i]; 
        // echo "$Angka[$i-1] - $Angka[$i] ";
        if ($i < count($Angka)-1) {
            echo "- ";
        } else {
            echo "= ";
        }
        $i++;
    }
}



