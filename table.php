<?php 

 $koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

 $query = $koneksi->query("select * from pengaduan");
 $data = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REKAP</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>
    h1{
        text-align: center;
        font-family: fantasy;
        color: black;
    }
    .detail{
      text-decoration: none;
      color: white;
    }
</style>
<body>
    <?php include"navbar.php" ?>
    <div class="text-bg-secondary p-3">
    <h1>Rekap Laporan Anda</h1><br>
<div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nik</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){ ?>
    <tr>
      <td><?= $pengaduan['id_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><img style="height: 70px; width: 50;" src="gambar_laporan/<?= $pengaduan['foto'] ?>"></td>
      <td><?= $pengaduan['status']?></td>
      <td><a href="detail.php" class="detail">Detail</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table><br><br>
    </div>
    </div>
    <?php include"penutup.php" ?>
</body>
</html>