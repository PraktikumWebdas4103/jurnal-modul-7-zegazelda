<?php
include 'koneksi.php';
$nim   = $_POST['nim'];
$query="DELETE from baru where nim='$nim'";
mysqli_query($db, $query);
header("location:liatdata.php");
?>
?>