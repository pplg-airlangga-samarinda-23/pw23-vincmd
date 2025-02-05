<?php
require 'koneksi.php';
$sql = "SELECT * FROM penjualan";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
</head>

<body>
    <h1>halaman penjualan</h1>
    <a href="penjualan-tambah.php">Tambah Data</a>
    <table>
        <thead>
            <td>id</td>
            <td>Nama_barang</td>
            <td>kategori</td>
            <td>harga</td>
            <td>idbarang</td>
            <td>stok</td>
            <td>tanggal_pengecekan</td>
            <th>aksi</th>
        </thead>

        <tbody>
            <?php $no = 0;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row["Nama_barang"]; ?></td>
                    <td><?= $row["kategori"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                    <td><?= $row["idbarang"]; ?></td>
                    <td><?= $row["stok"]; ?></td>
                    <td><?= $row["Tanggal_pengecekan"]; ?></td>
                    <td>
                        <a href="penjualan-edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="penjualan-hapus.php?id=<?= $row['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>