<?php include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];

  move_uploaded_file($tmp, "../img/" . $gambar);

  mysqli_query($conn, "INSERT INTO menu (nama, deskripsi, harga, gambar) VALUES ('$nama', '$deskripsi', '$harga', '$gambar')");
  header("Location: index.php");
}
?>
<link rel="stylesheet" href="admin.css">
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="nama" placeholder="Nama Kopi" required><br>
  <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
  <input type="number" name="harga" placeholder="Harga" required><br>
  <input type="file" name="gambar" required><br>
  <button type="submit">Simpan</button>
  <a href="index.php">Kembali</a>
</form>
