<?php
require "koneksi.php";
require "BarangModel.php";
$BarangModel = new BarangModel($koneksi);
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
require "views/barang-tambah.view.php";
