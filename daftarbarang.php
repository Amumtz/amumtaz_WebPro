<?php
session_start();

// Cek apakah sudah ada session 'barang', jika tidak, inisialisasi
if (!isset($_SESSION['barang'])) {
    $_SESSION['barang'] = [
        ["ID" => 1, "Nama Barang" => "Buku", "Kategori" => "Alat Tulis", "Harga" => 20000],
        ["ID" => 2, "Nama Barang" => "Pulpen", "Kategori" => "Alat Tulis", "Harga" => 5000]
    ];
}

// Gunakan barang dari session
$barang = $_SESSION['barang'];

// Ambil ID terakhir untuk increment ID berikutnya
$last_id = end($barang)['ID'];

// Variable untuk menandai apakah sedang mengedit
$edit_index = null;
$edit_barang = null;

// Create
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Tambahkan barang baru dengan ID increment
    $last_id++;
    $barang[] = ["ID" => $last_id, "Nama Barang" => $nama, "Kategori" => $kategori, "Harga" => $harga];

    // Simpan barang ke session
    $_SESSION['barang'] = $barang;
}

// Delete
if (isset($_POST['delete'])) {
    $id_to_delete = $_POST['delete'];

    // Hapus barang berdasarkan ID
    foreach ($barang as $index => $b) {
        if ($b['ID'] == $id_to_delete) {
            unset($barang[$index]);
            $barang = array_values($barang); // Reindex array
            break;
        }
    }

    // Simpan barang ke session
    $_SESSION['barang'] = $barang;
}

// Handle edit
if (isset($_POST['edit'])) {
    $id_to_edit = $_POST['edit'];

    // Cari barang yang akan diubah berdasarkan ID
    foreach ($barang as $index => $b) {
        if ($b['ID'] == $id_to_edit) {
            $edit_index = $index;
            $edit_barang = $b;
            break;
        }
    }
}

// Update
if (isset($_POST['update'])) {
    $index_to_update = $_POST['index'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Update data barang
    $barang[$index_to_update]['Nama Barang'] = $nama;
    $barang[$index_to_update]['Kategori'] = $kategori;
    $barang[$index_to_update]['Harga'] = $harga;

    // Simpan barang ke session
    $_SESSION['barang'] = $barang;
}
?>

<h3><?php echo $edit_barang ? "Edit Barang" : "Tambah Barang"; ?></h3>
<form action="" method="POST">
    <?php if ($edit_barang): ?>
        <input type="hidden" name="index" value="<?php echo $edit_index; ?>">
    <?php endif; ?>

    <label for="nama">Nama Barang:</label><br>
    <input type="text" id="nama" name="nama" value="<?php echo $edit_barang ? $edit_barang['Nama Barang'] : ''; ?>" required><br>

    <label for="kategori">Kategori Barang:</label><br>
    <input type="text" id="kategori" name="kategori" value="<?php echo $edit_barang ? $edit_barang['Kategori'] : ''; ?>" required><br>

    <label for="harga">Harga Barang:</label><br>
    <input type="number" name="harga" id="harga" value="<?php echo $edit_barang ? $edit_barang['Harga'] : ''; ?>" required><br><br>

    <input type="submit" name="<?php echo $edit_barang ? 'update' : 'create'; ?>" value="<?php echo $edit_barang ? 'Update Barang' : 'Tambah Barang'; ?>">
</form>

<?php
echo "<h3>DAFTAR BARANG</h3>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Aksi</th></tr>";
foreach ($barang as $index => $b) {
    echo "<tr>";
    echo "<td>{$b['ID']}</td>";
    echo "<td>{$b['Nama Barang']}</td>";
    echo "<td>{$b['Kategori']}</td>";
    echo "<td>{$b['Harga']}</td>";
    echo "<td>
        <form action='' method='POST' style='display:inline-block;'>
        <input type='hidden' name='delete' value='{$b['ID']}'>
        <input type='submit' value='Hapus'>
        </form>
        
        <form action='' method='POST' style='display:inline-block;'>
        <input type='hidden' name='edit' value='{$b['ID']}'>
        <input type='submit' value='Edit'>
        </form>
    </td>";
    echo "</tr>";
}
echo "</table>";
?>
