<?php
$isi = $_POST ['buat'];

//$nomor = $_POST ['nik'];

$nama_foto = $_FILES['gambar']['name'];
$asal_foto = $_FILES['gambar']['tmp_name'];

include 'koneksi.php';
$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('', '$tanggal', '9090', '$isi', '$nama_foto', 'proses')");

move_uploaded_file($asal_foto, "gambar_laporan/$nama_foto");
?>