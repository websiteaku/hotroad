<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin Menu Kopi</title>
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <h2>Data Menu Kopi</h2>
  <a href="tambah.php">+ Tambah Menu</a>
  <table border="1" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $result = mysqli_query($conn, "SELECT * FROM menu");
    while ($data = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>{$no}</td>
        <td><img src='../img/{$data['gambar']}' width='80'></td>
        <td>{$data['nama']}</td>
        <td>{$data['deskripsi']}</td>
        <td>Rp " . number_format($data['harga'], 2, ',', '.') . "</td>
        <td>
          <a href='edit.php?id={$data['id']}'>Edit</a> | 
          <a href='hapus.php?id={$data['id']}' onclick='return confirm(\"Yakin ingin hapus?\")'>Hapus</a>
        </td>
      </tr>";
      $no++;
    }
    ?>
  </table>
</body>

</html>
