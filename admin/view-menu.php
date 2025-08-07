<?php
include('../config/db.php');
$query = mysqli_query($conn, "SELECT * FROM menu");
echo "<ul>";
while($row = mysqli_fetch_assoc($query)) {
  echo "<li><strong>{$row['nama']}</strong><br>{$row['deskripsi']}<br><em>Rp ".number_format($row['harga'])."</em></li><hr>";
}
echo "</ul>";
?>
