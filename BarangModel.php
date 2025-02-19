<?php

class BarangModel
{
    private $koneksi;

    public function __construct(mysqli $koneksi)
    {
        $this->koneksi = $koneksi;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM barang";
        $rows = $this->koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
    public function penjualan($Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan)
    {
        $sql = "INSERT INTO barang (Nama_barang, kategori, harga , idbarang, stok, Tanggal_pengecekan) values(?,?,?,?,?,?)";
        $row = $this->koneksi->execute_query($sql, [$Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan]);
        header("Location: penjualan.php");
    }
    public function find($id)
    {
        $sql = "SELECT * FROM barang where id=?";
        $row = $this->koneksi->execute_query($sql, [$id])->fetch_assoc();
        return $row;
    }
    public function update($Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan)
    {
        $sql = "UPDATE barang SET Nama_barang=?, kategori=?, harga=?, idbarang=?, stok=?, Tanggal_pengecekan=? where id=?";
        $row = $this->koneksi->execute_query($sql, [$Nama_barang, $kategori, $harga, $idbarang, $stok, $Tanggal_pengecekan,]);
        header("Location:barang.php");
    }
    public function delete($id)
    {
        $sql = "DELETE FROM barang WHERE id=?";
        $row = $this->koneksi->execute_query($sql, [$id]);
        header("Location:barang.php");
    }
}
