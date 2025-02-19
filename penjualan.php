<?php
require "koneksi.php";
require "BarangModel.php";
$sql = "SELECT * FROM penjualan";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
require "views/barang.view.php";
