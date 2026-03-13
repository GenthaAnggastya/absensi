<?php
include 'koneksi.php';

function simpanData($conn,$nama,$tanggal,$status){
    $query = mysqli_query($conn,"INSERT INTO data_absensi VALUES('', '$nama','$tanggal','$status')");
    return $query;
}

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

$simpan = simpanData($conn,$nama,$tanggal,$status);

if($simpan){
    header("location:index.php");
}else{
    echo "Data gagal disimpan";
}
?>