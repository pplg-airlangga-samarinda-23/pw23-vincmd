<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama_barang = $_POST["Nama_barang"];
    $kategori = $_POST["kategori"];
    $harga = $_POST["harga"];
    $idbarang = $_POST["idbarang"];
    $stok = $_POST["stok"];
    $Tanggal_pengecekan = $_POST["Tanggal_pengecekan"];

    $sql = "INSERT INTO penjualan (Nama_barang, kategori, harga, idbarang, stok, Tanggal_pengecekan) values (?, ?, ?, ?, ?, ?)";
    $row = $koneksi->execute_query($sql, [$Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan]);
    header("location:penjualan.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span class="dot"></span>
    <form class="Login" action="" method="post">
        <label for="Nama_barang">Nama barang:</label><br>
        <input type="text" name="Nama_barang" id="Nama_barang"><br>
        <label for="kategori">kategori:</label><br>
        <select name="kategori" value="kategori">
            <option value="makanan">Makanan</option>
            <option value="makanan">Minuman</option>
        </select><br>
        <label for="harga">harga:</label><br>
        <input type="text" name="harga" id="harga"><br>
        <label for="stok">idbarang:</label><br>
        <input type="text" name="idbarang" id="idbarang"><br>
        <label for="stok">Stok:</label><br>
        <input type="text" name="stok" id="stok"><br>
        <label for="Tanggal_pengecekan">Tanggal pengecekan:</label><br>
        <input type="text" name="Tanggal_pengecekan" id="Tanggal_pengecekan"><br>
        <button type="submit">Submit</button>
        <a href="penjualan.php">Kembali</a>
    </form>
</body>

</html>