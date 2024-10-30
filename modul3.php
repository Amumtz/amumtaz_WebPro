
<?php
$buku=[
["Judul" => "Berserk", "Penulis" => "Miura Kentaro"],
["Judul" => "Oswald", "Penulis" => "Walt Disney"]];

function tampildata($buku){
    echo"<table border='1'>";
    echo"<tr> <th>Nama Barang</th><th>Kategori</th></tr>";
    foreach($buku as $data){
        echo"<tr>";
            echo "<td>{$data['Judul']}</td>";
            echo "<td>{$data['Penulis']}</td>";
        echo"</tr>";
    }
}

//menambahkan data pada array
function tambahkandata(&$buku, $judul, $penulis){
    $buku[]= ["Judul" => $judul, "Penulis" => $penulis];
}

// mengedit data pada array
function mengeditdata(&$buku, $id, $judul, $penulis){
    if(isset($buku[$id])){
        $buku[$id]["Judul"]=$judul;
        $buku[$id]["Penulis"]=$penulis;
    }
}

// menghapus data pada array
function kurangkandata(&$buku, $id){
    if(isset($buku[$id])){
        unset($buku[$id]);
        $buku=array_values($buku);
    } 
    echo"<br>";  
}

// mencari data dengan kata kunci
function mencaridata(&$buku, $judul){
    foreach($buku as $data){
        if(strpos($data['Judul'],$judul) !== false) {
            echo"<table border='1'>";
            echo"<tr> <th>Nama Barang</th><th>Kategori</th></tr>";
            echo"<tr>";
                echo "<td>{$data['Judul']}</td>";
                echo "<td>{$data['Penulis']}</td>";
            echo"</tr>";
        }
    }
    echo "<br>";
}


echo "Menampilkan data awal"."<br>";
tampildata($buku);

echo "Menampilkan data buku baru"."<br>";
tambahkandata($buku,"One Piece", "Eiichiro Oda");
tampildata($buku);

echo "menampilkan buku dengan id ke-2"."<br>";
mengeditdata($buku, 2,"Naruto","Masashi Kishimoto");
tampildata($buku);

echo "menghapus buku dengan id ke-1"."<br>";
kurangkandata($buku, 1);
tampildata($buku);
echo "<br>";

echo "mencari buku dengan kata kunci 'Naruto'"."<br>";
mencaridata($buku, 'Berserk');
?>