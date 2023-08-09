<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASUK</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
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
            border-radius: 15px;
            width: 300px;
        }
        .login h2{
            text-align: center;
        }
        .form-group{
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group label{
            margin-bottom: 5px;
        }
        .form-group input{
            width: 100%;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
        }
        .form-group button{
            width: 100%;
            padding: 8px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover{
            background-color: #0056b3;
        }
        p{
            text-align: center;
        }
        .link{
            cursor: pointer;
            text-decoration:none;
        }
    </style>
</head>
<body>
    
        <div class="login">
        <h2>Masuk</h2>
        <form>
            <div class="form-group">
                <label for="username"></label>
                <input type="text" id="username" placeholder="Nama Pengguna" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" id="password" placeholder="Kata Sandi" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">MASUK</button>
            </div>
            <p>tidak memiliki akun?<a link href="registrasi.php" class="link">buat akun</a></p>
            <p><a link href="table.php" class="link">KEMBALI</a></p>
        </form>
    </div>
</body>
</html>