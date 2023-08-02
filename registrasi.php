<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aqua;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .daftar{
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
        .daftar h2{
            text-align: center;
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
            width: 100%;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
            
        }
        .kolom button{
            width: 100%;
            padding: 8px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .kolom button:hover{
            background-color: #0056b3;
        }
        .parap{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<div class="daftar">
        <h2>Daftar</h2>
        <form>
        <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Nama Lengkap" required>
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Alamat Lengkap" required>
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Nomor Telepon" required>
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Email" required>
            </div>
            <div class="kolom">
                <label for="username"></label>
                <input type="password" placeholder="Kata Sandi" required>
            </div>
            <div class="kolom">
                <button type="submit">DAFTAR</button>
            </div>
            <p class="parap">sudah memiliki akun?<a link href="login.php"> masuk akun</a></p>
            <p class="parap"><a link href="menu.php">KEMBALI</a></p>
        </form>
    </div>
</body>
</html>