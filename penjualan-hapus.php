<?php
session_start();
require "koneksi.php";
require "BarangModel.php";
$BarangModel = new BarangModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "DELETE FROM penjualan WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id]);
    if ($row) {
        header("location:penjualan.php");
    }
}
