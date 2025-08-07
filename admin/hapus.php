<link rel="stylesheet" href="admin.css">
<?php
include("../config/db.php");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM menu WHERE id=$id");
header("Location: index.php");
