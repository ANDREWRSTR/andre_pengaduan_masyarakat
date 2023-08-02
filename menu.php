<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            
            
        }
        header{
            background-color: aqua;
            color: #fff;
            padding: 10px;
            height:60px;
        }
        nav{
           display: flex;
        }
        .user button{
           margin-top:20px ;
           padding: 8px 15px;
           background-color: #fff;
           border: none;
           border-radius: 20px;
           cursor:pointer;
        }
        .logo img{
            height: 75px;
            margin-left: 10px;
        }
        .user{
            margin-right: 10px;
            margin-left: auto;
        }
        .kelas{
            font-family: Arial, Helvetica, sans-serif;
            background-color: red;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            
        }
        .lampiran{
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 600px;
        }
        .lampiran h2{
            text-align:center;
            background-color:red;
            width:600px;
            border-radius:4px;
            font-size:40px;
            color:#fff;
        }
        .kolom{
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .kolom label{
            margin-bottom: 5px;
            
        }
        .kolom input{
            width: 575px;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
        }
        .kolom button{
            width: 100%;
            padding: 8px;
            background-color: green;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .tutup{
            background-color: grey;
            color: #fff;
            padding: 10px;
            height:60px;
        }
        ul {
          list-style-type: none;
          display: flex;
          align-items: center;
        }
  
        li {
        padding: 0 15px;
        }
  
        li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/logo (2).png" alt="logo">
            </div>
            <div class="user">
               <a link href="login.php"> <button>MASUK</button></a>
            <a link href="registrasi.php"><button>DAFTAR</button></a>
            </div><br>
        </nav>
    </header>
    </body>
<div class="kelas">
    <div class="lampiran">
        <h2>SAMPAIKAN LAPORAN ANDA</h2>
        <form>
        <div class="kolom">
                <label for="username"></label>
                <input type="text" placeholder="Ketik Judul Laporan Anda" >
            </div>
            <div class="kolom">
                <label for="username"></label>
                <textarea  rows="5" cols="77" placeholder="Ketik Isi Laporan Anda"></textarea>
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Tanggal Kejadian" >
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Lokasi Kejadian" >
            </div>
           
            <div class="kolom">
                <button type="submit">LAPOR</button>
            </div>
    </div>
</div>
<div>
    <div class="tutup">
          <ul>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
</div>
</div>
    
</html>