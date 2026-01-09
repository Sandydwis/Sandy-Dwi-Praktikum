<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LATIHAN 6 PEMROGRAMAN WEB</title>
</head>
<body>

<h3>Form (Method POST)</h3>

<form method="post" action="">
  <table border="1" cellpadding="6" cellspacing="0">
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><input type="text" name="alamat" required></td>
    </tr>
    <tr>
      <td>Usia</td>
      <td><input type="text" name="usia" required></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
      </td>
    </tr>
    <tr>
      <td>Pelajaran Favorit</td>
      <td>
        <select name="pelajaran" required>
          <option value="">---- Pilih ----</option>
          <option value="Pemrograman Web">Pemrograman Web</option>
          <option value="Struktur Data">Struktur Data</option>
          <option value="Algoritma">Algoritma</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="kirim" value="Simpan">
        <input type="reset" value="Reset">
      </td>
    </tr>
  </table>
</form>

<hr>

<?php
if (isset($_POST["kirim"])) {
    // ambil data POST + amankan
    $nama      = htmlspecialchars($_POST["nama"]);
    $alamat    = htmlspecialchars($_POST["alamat"]);
    $usia      = htmlspecialchars($_POST["usia"]);
    $jk        = htmlspecialchars($_POST["jk"]);
    $pelajaran = htmlspecialchars($_POST["pelajaran"]);

    echo "<b>HASIL OUTPUT SESUAI INPUTAN DARI FORM DIATAS</b><br/><br/>";
    echo "Nama : $nama <br/>";
    echo "Alamat : $alamat <br/>";
    echo "Usia : $usia <br/>";
    echo "Jenis Kelamin : $jk <br/>";
    echo "Pelajaran Favorit : $pelajaran <br/>";
}
?>

</body>
</html>
