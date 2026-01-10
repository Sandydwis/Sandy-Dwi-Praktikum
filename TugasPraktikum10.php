<!DOCTYPE html>
<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>

<h3>Masukkan Nama, Email dan Password</h3>
<?php
date_default_timezone_set("Asia/Jakarta");
echo "Tanggal hari ini : " . date("d-m-Y") . "<br>";
echo "Jam sekarang : " . date("H:i:s") . "<br><br>";
?>

<form method="POST">
    Default Nama = belajar, Email = test@gmail.com, Password = madiun <br><br>

    Nama : <input type="text" name="nama"><br><br>
    Email : <input type="text" name="email"><br><br>
    Password : <input type="password" name="password"><br><br>
    <input type="submit" value="Cek">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<b>Hasil Pemeriksaan:</b><br>";


    if (empty($email)) {
        echo "Harap mengisi email <br>";
    } else {
        if ($email == "test@gmail.com") {
            echo "Alamat email <b>$email</b> valid <br>";
        } else {
            echo "Alamat email <b>$email</b> tidak valid <br>";
        }
    }

    $nama_default = "belajar";
    $password_valid = crypt("madiun", $nama_default);
    $password_input = crypt($password, $nama_default);

    if ($password_valid == $password_input) {
        echo "Password valid <br>";
    } else {
        echo "Password salah <br>";
    }

    echo "<br><b>Manipulasi String:</b><br>";
    echo "Nama huruf besar : " . strtoupper($nama) . "<br>";
    echo "Jumlah karakter nama : " . strlen($nama) . "<br>";
}
?>

</body>
</html>
