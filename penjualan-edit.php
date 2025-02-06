<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM  penjualan where id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama_barang = $_POST["Nama_barang"];
    $kategori = $_POST["kategori"];
    $harga = $_POST["harga"];
    $idbarang = $_POST["idbarang"];
    $stok = $_POST["stok"];
    $Tanggal_pengecekan = $_POST["Tanggal_pengecekan"];
    $id = $_GET["id"];

    $sql = "UPDATE penjualan SET Nama_barang=?, kategori=?, harga=?, idbarang=?, stok=?, Tanggal_pengecekan=? where id=?";
    $row = $koneksi->execute_query($sql, [$Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan, $id]);
    header("location:penjualan.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit barang</title>
</head>

<body>
    <h1>Edit barang</h1>
    <form action="" method="POST">
        <div class="form-item">
            <label for="Nama_barang">Nama barang</label>
            <input type="text" name="Nama_barang" id="Nama_barang" value="<?= htmlspecialchars($row['Nama_barang']) ?>">
        </div>
        <label for="kategori">kategori</label>
        <select name="kategori" id="kategori">
            <option value="makanan" <?= ($row['kategori'] == 'makanan') ? 'selected' : '' ?>>Makanan</option>
            <option value="minuman" <?= ($row['kategori'] == 'minuman') ? 'selected' : '' ?>>minuman</option>
        </select>
        <div class="form-item">
            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga" value="<?= htmlspecialchars($row['harga']) ?>">
        </div>
        <div class="form-item">
            <label for="idbarang">idbarang</label>
            <input type="char" name="idbarang" id="idbarang" value="<?= htmlspecialchars($row['idbarang']) ?>">
        </div>
        <div class="form-item">
            <label for="stok">stok</label>
            <input type="text" name="stok" id="stok" value="<?= htmlspecialchars($row['stok']) ?>">
        </div>
        <div class="form-item">
            <label for="Tanggal_pengecekan">Tanggal pengecekan</label>
            <input type="text" name="Tanggal_pengecekan" id="Tanggal_pengecekan" value="<?= htmlspecialchars($row['Tanggal_pengecekan']) ?>">
        </div>
        <button type="submit">submit</button>
    </form>
    <a href="penjualan.php">Kembali</a>
</body>

</html>