<?php
// Pengulangan pada Array
// For / foreach(untuk setiap)

$angka =[33,28,324,34,2334,32,1,9];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <style>
        .kotak
        {
            width:50px;
            height:50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear
        {
            clear: both;
        }
    </style>
</head>
<body>
<?php for( $i=0; $i<count($angka); $i++ ) : ?>
    <div class="kotak"><?= $angka[$i] ?></div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a ?> </div>
<?php endforeach; ?>
</body>
</html>