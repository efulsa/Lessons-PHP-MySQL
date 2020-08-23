<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
<?php if(isset($_POST['submit'])) : ?>
    
        <h1>Hallo <?= $_POST['nama'];  ?></h1>
    
<?php else : ?>
<h1>efulsa</h1>
<?php endif; ?>

    <form action="" method="post"> <!-- action bisa di isi link latihan4.php -->
        Masukan Nama :
        <input type="text" name="nama" id="">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>