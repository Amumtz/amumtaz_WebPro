<?php

$totalUang = readline("masukkan angka =");
$totaluang = (int)$totalUang;

$pecahan = [
	['pecahan' => 100000,
	'jumlah' => 0,],
	['pecahan' => 50000,
	'jumlah' => 0,],
	['pecahan' => 10000,
	'jumlah' => 0,],
	['pecahan' => 5000,
	'jumlah' => 0,],
	['pecahan' => 1000,
	'jumlah' => 0,],
	['pecahan' => 100,
	'jumlah' => 0,],
	['pecahan' => 50,
	'jumlah' => 0,]
];

$key = 0;
while ($totaluang > 0 && $key<count($pecahan)) {
	if ($totaluang >= $pecahan[$key]['pecahan']) {
        $pecahan[$key]['jumlah'] = intdiv($totaluang, $pecahan[$key]['pecahan']);
        $totaluang = $totaluang % $pecahan[$key]['pecahan'];
    }
    $key++;
}

foreach ($pecahan as $nilai) {
	if ($nilai['jumlah'] > 0) {
        echo "Jumlah pecahan " . $nilai['pecahan'] . ": " . $nilai['jumlah'] . PHP_EOL;
    }
}
?>