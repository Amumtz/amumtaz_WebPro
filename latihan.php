<?php
echo "1.<br>";

echo "angka ganjil dari 1-100 dengan menggunakan for <br>";
for ($i = 1; $i<100; $i++){
    if($i % 2!= 0){
        echo "$i ";
    }
}
echo "<br>angka ganjil dari 1-100 dengan menggunakan while <br>";
$angka = 1;
while ($angka < 100){
    echo "$angka ";
    $angka +=2;
}

echo "<br><br>2.<br>";
$data = ["Ardi", "Budi", "Ceryl", "Dandy", "Eka", "Fadhil"];
$keyword = "Budi";

// if (in_array($keyword,$data)){
//     echo "Ketemu";
// } else {
//     echo "Keyword tidak ditemukan";
// }


$found = false;
foreach ($data as $nama) {
  if ($nama == $keyword) {
    $found = true;
    break;
  }
}

// Cetak hasil pencarian
if ($found) {
  echo "Ketemu";
} else {
  echo "Keyword tidak ditemukan";
}
