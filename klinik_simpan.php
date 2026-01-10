<?php
require "koneksi.php";

$nama = $_POST["nama_pasien"] ?? "";
$password = $_POST["password"] ?? "";
$jk = $_POST["jenis_kelamin"] ?? "laki-laki";
$poli = $_POST["poli"] ?? "umum";
$layanan_arr = $_POST["layanan"] ?? [];
$keluhan = $_POST["keluhan"] ?? "";

$layanan = implode(", ", $layanan_arr);
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $koneksi->prepare("INSERT INTO klinik_sehat (nama_pasien, password_hash, jenis_kelamin, poli, layanan, keluhan) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $nama, $password_hash, $jk, $poli, $layanan, $keluhan);
$stmt->execute();

header("Location: klinik_tampil.php");
exit;
