<?php
require_once("koneksi.php");

$sql = "SELECT * FROM namamatakuliah";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($data = mysqli_fetch_assoc($result)) {
    echo $data['namamatakuliah'] . " - " . $data["kodematakuliah"] . " - " . $data["SKS"];
    echo "<br>";
}
?>
