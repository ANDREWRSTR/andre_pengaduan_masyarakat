<?php
        $koneksi = new PDO ('mysql:host=localhost;dbname=pengaduan_masyarakat','root','');

       // if($koneksi){;
       // echo "berhasil terkirim";

       // }else {
       // echo "gagal";
       // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
                h1{
                        text-align: center;
                        font-family: fantasy;
                }
                button{
                       align-items: center; 
                       
                }
        </style>
</head>
<body>
       <h1>APA KAMU TERSESAT</h1> 
       <a href="table.php"><button>KEMBALI</button></a>
</body>
</html>