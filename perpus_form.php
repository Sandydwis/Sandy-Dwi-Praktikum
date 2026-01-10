<!DOCTYPE html>
<html>
<head><title>Formulir Perpustakaan Kota Madiun</title></head>
<body>

<h2>Formulir Pendaftaran Anggota Perpustakaan Kota Madiun</h2>

<form action="perpus_simpan.php" method="post">
  Nama Lengkap:
  <input type="text" name="nama" required>
  <br><br>

  Password:
  <input type="password" name="password" required>
  <br><br>

  Jenis Kelamin:
  <label><input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki</label>
  <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
  <br><br>

  Hobi Membaca:
  <label><input type="checkbox" name="hobi[]" value="buku_pelajaran" checked> Buku Pelajaran</label>
  <label><input type="checkbox" name="hobi[]" value="novel"> Novel</label>
  <label><input type="checkbox" name="hobi[]" value="komik"> Komik</label>
  <br><br>

  Asal Kecamatan:
  <select name="kecamatan" required>
    <option value="Taman">Taman</option>
    <option value="Kartoharjo">Kartoharjo</option>
    <option value="Manguharjo" selected>Manguharjo</option>
  </select>
  <br><br>

  Alamat Lengkap:
  <br>
  <textarea name="alamat" rows="5" cols="30"></textarea>
  <br><br>

  <input type="submit" value="Daftar Anggota">
</form>

</body>
</html>
