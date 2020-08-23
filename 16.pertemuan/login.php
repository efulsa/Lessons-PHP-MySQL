<?php
session_start(); //wajib

include 'functions.php';

//cek apakah ada cookie

if(isset($_COOKIE['id']) && isset($_COOKIE['username']))
{
    $id = $_COOKIE['id'];
    $username = $_COOKIE['username'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id' ");

    $row = mysqli_fetch_assoc($result);

    if( $username === hash('sha256', $row['username']))
    {
        $_SESSION['login'] = true;
    }

}


if(isset($_SESSION['login']))
{
    header('location:index.php');
    exit;
}


if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
       //cek username
    if(mysqli_num_rows($result) === 1) //menghitung berapa baris yang dihitung, kalo ketemu nilai 1
    {
        // cel password
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row["password"]))
        {

            // set session
            
            $_SESSION['login'] = true;

            // cek remember me

            if(isset($_POST['remember']))
            {
                //buat cookie

                setcookie('id', $row['id'], time() +60);
                setcookie('username', hash('sha256', $row['username']), time() +60);
            }

            header('location:index.php');
            exit;
        }

        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <style>
        label
        {
            display:block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
<!--menampilkan pesan error-->
    <?php if(isset($error)) :?>
        <p style="color:red; font-style:italic;">Username / Password Salah !</p>
    <?php endif; ?>

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
                ingat saya
                <input type="checkbox" name="remember" id="">
            </li>
            <button type="submit" name="login">Login</button>
        </ul>
    </form>
</body>
</html>