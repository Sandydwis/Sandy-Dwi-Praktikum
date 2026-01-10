<!DOCTYPE html>
<html>
<head><title>Formulir Service Motor</title></head>
<body>

<h2>Formulir Pendaftaran Service Motor</h2>

<form action="service_simpan.php" method="post">
  Nama Pelanggan:
  <input type="text" name="nama_pelanggan" required>
  <br><br>

  Password:
  <input type="password" name="password" required>
  <br><br>

  Jenis Kelamin:
  <label><input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki</label>
  <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
  <br><br>

  Jenis Motor:
  <select name="jenis_motor" required>
    <option value="Honda">Honda</option>
    <option value="Yamaha">Yamaha</option>
    <option value="Suzuki">Suzuki</option>
    <option value="Kawasaki">Kawasaki</option>
  </select>
  <br><br>

  Layanan Service:
  <label><input type="checkbox" name="layanan[]" value="ganti_oli" checked> Ganti Oli</label>
  <label><input type="checkbox" name="layanan[]" value="tune_up"> Tune Up</label>
  <label><input type="checkbox" name="layanan[]" value="servis_rem"> Servis Rem</label>
  <label><input type="checkbox" name="layanan[]" value="servis_injeksi"> Servis Injeksi</label>
  <br><br>

  Tanggal Masuk:
  <input type="date" name="tanggal_masuk" required>
  <br><br>

  Keluhan:
  <br>
  <textarea name="keluhan" rows="5" cols="30" placeholder="Tulis keluhan motor..."></textarea>
  <br><br>

  <input type="submit" value="Kirim">
</form>

</body>
</html>
