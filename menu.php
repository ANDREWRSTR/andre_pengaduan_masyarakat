<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            
            
        }
        header{
            background-color: aqua;
            color: #fff;
            padding: 10px;
        }
        nav{
           display: flex;
        }
        .user button{
           padding: 8px 15px;
           background-color: #fff;
           border: none;
           border-radius: 20px;
           cursor:pointer;
        }
        .logo img{
            height: 40px;
            margin-left: 10px;
        }
        .user{
            margin-right: 10px;
            margin-left: auto;
        }
        .form-group{
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .form-group label{
            margin-bottom: 5px;
        }
        .form-group input{
            width: 100%;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
            align-items: center;
            display: flex;
        }
        .lampiran h1{
            text-align: center;
        }
    </style>
</head>
    <header>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <ul>

            </ul>
            <div class="user">
               <a link href="login.php"> <button>MASUK</button></a>
            <a link href="registrasi.php"><button>DAFTAR</button></a>
            </div><br>
        </nav>
    </header>
    <body>
    <div class="lampiran">
        <h1>SAMPAIKAN LAPORAN ANDA</h1>
    </div>
    <div class="form-group">
                <label for="username"></label>
                <input type="text" placeholder="Masukan Judul Laporan Anda" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="textarea" placeholder="Masukan Laporan Anda" required>
            </div>
    </body>
</html>