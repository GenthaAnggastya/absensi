<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

mysqli_query($conn,"INSERT INTO data_absensi VALUES('','$nama','$tanggal','$status')");

header("location:index.php");
?>