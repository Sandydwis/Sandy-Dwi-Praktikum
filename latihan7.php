<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LATIHAN 7 PEMROGRAMAN WEB</title>
</head>
<body>

<h3>Form (Method GET)</h3>

<form method="get" action="">
  <table border="1" cellpadding="6" cellspacing="0">
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td><input type="text" name="nim" required></td>
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
if (isset($_GET["kirim"])) {
    $nama = htmlspecialchars($_GET["nama"]);
    $nim  = htmlspecialchars($_GET["nim"]);

    echo "<b>HASIL OUTPUT SESUAI INPUTAN DARI FORM DIATAS</b><br/><br/>";
    echo "Nama : $nama <br/>";
    echo "NIM : $nim <br/>";
    echo "<br/><i>Perhatikan URL berubah karena method GET.</i>";
}
?>

</body>
</html>
