<?php
require "koneksi.php";
$data = $koneksi->query("SELECT * FROM service_motor ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Data Service Motor</title></head>
<body>

<h2>Data Service Motor</h2>
<a href="service_form.php">+ Tambah Data</a> | <a href="index.php">Menu</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>JK</th>
    <th>Jenis Motor</th>
    <th>Layanan</th>
    <th>Tanggal Masuk</th>
    <th>Keluhan</th>
    <th>Waktu Input</th>
  </tr>

  <?php $no=1; while($row = $data->fetch_assoc()): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row["nama_pelanggan"]) ?></td>
    <td><?= htmlspecialchars($row["jenis_kelamin"]) ?></td>
    <td><?= htmlspecialchars($row["jenis_motor"]) ?></td>
    <td><?= htmlspecialchars($row["layanan"]) ?></td>
    <td><?= htmlspecialchars($row["tanggal_masuk"]) ?></td>
    <td><?= nl2br(htmlspecialchars($row["keluhan"])) ?></td>
    <td><?= $row["created_at"] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
