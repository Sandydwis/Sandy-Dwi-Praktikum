<?php
require "koneksi.php";
$data = $koneksi->query("SELECT * FROM klinik_sehat ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Data Klinik Sehat</title></head>
<body>

<h2>Data Pendaftaran Klinik Sehat</h2>
<a href="klinik_form.php">+ Tambah Data</a> | <a href="index.php">Menu</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>JK</th>
    <th>Poli</th>
    <th>Layanan</th>
    <th>Keluhan</th>
    <th>Waktu Input</th>
  </tr>

  <?php $no=1; while($row = $data->fetch_assoc()): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row["nama_pasien"]) ?></td>
    <td><?= htmlspecialchars($row["jenis_kelamin"]) ?></td>
    <td><?= htmlspecialchars($row["poli"]) ?></td>
    <td><?= htmlspecialchars($row["layanan"]) ?></td>
    <td><?= nl2br(htmlspecialchars($row["keluhan"])) ?></td>
    <td><?= $row["created_at"] ?></td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
