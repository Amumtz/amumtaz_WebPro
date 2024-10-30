<?php
$host= "localhost";
$user="root";
$pass="";

$db= "kuliah";

$conn = mysqli_connect("localhost", "root", "", "kuliah");


if(!$conn){
    die("koneksi gagal: ". mysqli_connect_error());
} else{
    echo "koneksi berhasil <br>";
}

