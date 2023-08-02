<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASUK</title>
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
        .login{
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
        .login h2{
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
            width: 270px;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
        }
        .kolom button{
            width: 290px;
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
        }
    </style>
</head>
<body>
        <div class="login">
        <h2>Masuk</h2>
        <form>
        <div class="kolom">
                <label for="username"></label>
                <input type="text"  placeholder="Email/No.Hp/Username"  required>
            </div>
            <div class="kolom">
                <label for="password"></label>
                <input type="password"  placeholder="Kata Sandi"  required>
            </div>
            <div class="kolom">
                <button type="submit">MASUK</button>
            </div>
            <p class="parap">tidak memiliki akun?<a link href="registrasi.php">buat akun</a></p>
            <p class="parap"><a link href="menu.php">KEMBALI</a></p>
        </form>
    </div>
</body>
</html>