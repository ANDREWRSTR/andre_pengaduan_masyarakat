<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPOR</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
   <style>
    body{
        background-color: grey;
    }
   </style>
<body>
    <?php include"navbar.php" ?>
    <div class="text-bg-secondary p-3">
    <div class="container">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Laporan Anda" ></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Foto</label>
  <input class="form-control" type="file" id="formFile">
</div>
<button type="button" class="btn btn-dark">kirim</button><br><br><br><br>
    </div>
</div>
<?php include"penutup.php" ?>
</body>
</html>