<?php
include "koneksi.php";
$data = mysqli_query($conn,"SELECT * FROM data_absensi");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Absensi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Data Absensi</h2>

<a href="tambah.php" class="btn btn-primary">Tambah Data</a>

<table class="table table-bordered table-striped mt-3">

<tr>
<th>No</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
while($d=mysqli_fetch_array($data)){
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['tanggal']; ?></td>
<td><?php echo $d['status']; ?></td>
<td>
<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>
</tr>

<?php } ?>

</table>

</body>
</html>