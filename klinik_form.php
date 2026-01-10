<!DOCTYPE html>
<html>
<head><title>Formulir Klinik Sehat</title></head>
<body>

<h2>Formulir Pendaftaran Klinik Sehat</h2>

<form action="klinik_simpan.php" method="post">
  Nama Pasien:
  <input type="text" name="nama_pasien" required>
  <br><br>

  Password (contoh latihan):
  <input type="password" name="password" required>
  <br><br>

  Jenis Kelamin:
  <label><input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki</label>
  <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
  <br><br>

  Poli Tujuan:
  <select name="poli" required>
    <option value="umum">Poli Umum</option>
    <option value="gigi">Poli Gigi</option>
    <option value="anak">Poli Anak</option>
    <option value="mata">Poli Mata</option>
  </select>
  <br><br>

  Layanan Tambahan:
  <label><input type="checkbox" name="layanan[]" value="cek_tekanan_darah" checked> Cek Tekanan Darah</label>
  <label><input type="checkbox" name="layanan[]" value="cek_gula_darah"> Cek Gula Darah</label>
  <label><input type="checkbox" name="layanan[]" value="konsultasi_gizi"> Konsultasi Gizi</label>
  <br><br>

  Keluhan Pasien:
  <br>
  <textarea name="keluhan" rows="5" cols="30" placeholder="Tulis keluhan di sini..."></textarea>
  <br><br>

  <input type="submit" value="Kirim Pendaftaran">
</form>

</body>
</html>
