<?php
include 'koneksi.php';

function hapusData($conn,$id){
    $query = mysqli_query($conn,"DELETE FROM data_absensi WHERE id='$id'");
    return $query;
}

$id = $_GET['id'];

hapusData($conn,$id);

header("location:index.php");
?>