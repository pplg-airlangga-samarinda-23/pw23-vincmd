<?php
require "koneksi.php";
require "BarangModel.php";
$BarangModel = new BarangModel($koneksi);
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
require  "views/barang-edit.view.php";
