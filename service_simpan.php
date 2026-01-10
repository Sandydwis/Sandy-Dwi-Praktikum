<?php
require "koneksi.php";

$nama = $_POST["nama_pelanggan"] ?? "";
$password = $_POST["password"] ?? "";
$jk = $_POST["jenis_kelamin"] ?? "laki-laki";
$jenis_motor = $_POST["jenis_motor"] ?? "";
$layanan_arr = $_POST["layanan"] ?? [];
$tanggal_masuk = $_POST["tanggal_masuk"] ?? date("Y-m-d");
$keluhan = $_POST["keluhan"] ?? "";

$layanan = implode(", ", $layanan_arr);
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $koneksi->prepare("INSERT INTO service_motor (nama_pelanggan, password_hash, jenis_kelamin, jenis_motor, layanan, keluhan, tanggal_masuk) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss", $nama, $password_hash, $jk, $jenis_motor, $layanan, $keluhan, $tanggal_masuk);
$stmt->execute();

header("Location: service_tampil.php");
exit;
