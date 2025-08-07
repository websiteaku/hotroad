<?php include("../config/db.php");

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id=$id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];

  if (!empty($_FILES['gambar']['name'])) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../img/" . $gambar);
    $update = "UPDATE menu SET nama='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE id=$id";
  } else {
    $update = "UPDATE menu SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
  }

  mysqli_query($conn, $update);
  header("Location: index.php");
}
?>
<link rel="stylesheet" href="admin.css">
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>
  <textarea name="deskripsi" required><?= $data['deskripsi']; ?></textarea><br>
  <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br>
  <input type="file" name="gambar"><br>
  <button type="submit">Update</button>
  <a href="index.php">Kembali</a>
</form>
