<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="npm">masukkan npm</label>
    <input type="text" id="npm">
    </form>
</body>
</html>



<?php

for ($i = 1; $i <= 999; $i++) {
    $filename = str_pad($i, 3, '0', STR_PAD_LEFT); // membuat nomor file menjadi 3 digit dengan angka 0 di depan jika kurang dari 3 digit
    $link = "https://simponi2.mdp.ac.id/file_datapribadi/ktp/2125250079-$filename.jpeg"; // membuat link gambar
    echo "<img src=\"$link\" width=\"300\" height=\"500\" alt=\"Contoh Gambar\" />\n"; // menampilkan gambar dengan ukuran yang telah ditentukan
}
?>
 