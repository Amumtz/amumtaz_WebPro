<?php
function hitungIndeksNilai($n){
    if ($n > 85){
        return "A";
    } elseif ($n >= 70) {
        return "AB";
    } elseif ($n >= 60) {
        return "B";
    } elseif ($n >= 50) {
        return "C";
    } else {
        return "D";
    }
}

echo ("Nilai = ". hitungIndeksNilai(77));