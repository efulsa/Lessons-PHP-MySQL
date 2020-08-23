<?php

require 'functions.php';
if(isset($_POST['register']))
{
    if (registrasi($_POST) > 0)
    {
        echo
        "
            <script>
                alert('registrasi berhasil !');
            </script>
        ";
    }
    else
    {
        echo
        "
            <script>
                
            </script>
        ";
        mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <style>
        label
        {
            display: block;
        }
    </style>

</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="passkonfir">Ulangi Password :</label>
                <input type="password" name="passkonfir" id="passkonfir">
            </li>
            <button type="submit" name="register">Register</button>
        </ul>
    </form>
</body>
</html>