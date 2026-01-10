<?php
require "koneksi.php";
$data = $koneksi->query("SELECT * FROM perpustakaan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Data Perpustakaan</title></head>
<body>

<h2>Data Anggota Perpustakaan</h2>
<a href="perpus_form.php">+ Tambah Data</a> | <a href="index.php">Menu</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Hobi</th>
    <th>Kecamatan</th>
    <th>Alamat</th>
    <th>Tanggal Input</th>
  </tr>

  <?php $no=1; while($row = $data->fetch_assoc()): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row["nama"]) ?></td>
    <td><?= htmlspecialchars($row["jenis_kelamin"]) ?></td>
    <td><?= htmlspecialchars($row["hobi"]) ?></td>
    <td><?= htmlspecialchars($row["kecamatan"]) ?></td>
    <td><?= nl2br(htmlspecialchars($row["alamat"])) ?></td>
    <td><?= $row["created_at"] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
