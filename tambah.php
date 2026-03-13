<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Absensi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Tambah Data Absensi</h2>

<form method="post" action="simpan.php">

<div class="mb-3">
<label class="form-label">Nama</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Tanggal</label>
<input type="date" name="tanggal" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Status</label>
<select name="status" class="form-control">
<option value="Hadir">Hadir</option>
<option value="Izin">Izin</option>
<option value="Sakit">Sakit</option>
</select>
</div>

<button type="submit" class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</body>
</html>