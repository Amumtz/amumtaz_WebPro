<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
    // Cek apakah data 'Name' dan 'E-mail' dikirimkan
    if (isset($_POST['Name']) && isset($_POST['E-mail']) &&isset($_POST['Password'])) {
        $name = $_POST['Name'];
        $email = $_POST['E-mail'];
        $password = $_POST['Password'];

        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: ". $password. "<br>";
    } else {
        // Tampilkan pesan jika field tidak diisi
        echo "Username dan email harus diisi.";
    }
}
?>
