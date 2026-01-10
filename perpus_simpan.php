<?php
require "koneksi.php";

$nama = $_POST["nama"] ?? "";
$password = $_POST["password"] ?? "";
$jk = $_POST["jenis_kelamin"] ?? "laki-laki";
$hobi_arr = $_POST["hobi"] ?? [];
$kecamatan = $_POST["kecamatan"] ?? "";
$alamat = $_POST["alamat"] ?? "";

$hobi = implode(", ", $hobi_arr);
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $koneksi->prepare("INSERT INTO perpustakaan (nama, password_hash, jenis_kelamin, hobi, kecamatan, alamat) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $nama, $password_hash, $jk, $hobi, $kecamatan, $alamat);
$stmt->execute();

header("Location: perpus_tampil.php");
exit;
