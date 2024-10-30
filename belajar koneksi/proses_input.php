<?php

require_once("koneksi.php");

$nama_matakuliah=$_POST['nama_mata_kuliah'];
$kode_matakuliah=$_POST['kode_mata_kuliah'];
$sks = $_POST['sks'];

$sql= "INSERT INTO namamatakuliah(namamatakuliah, kodematakuliah, SKS) VALUES('$nama_matakuliah','$kode_matakuliah', $sks)";

// mysqli_query($conn, $sql);
if(mysqli_query($conn,$sql)){
    header("Location: read_data.php");
}
else{
    echo "error".$sql."<br>". mysqli_error($conn);
}