
<?php
function getConvert($file){
    $newFile = 'j';
    if($file == '1'){
        $newFile = 'ktp';
    }
    else if($file == '2'){
        $newFile = 'kk';
    }
    else if($file == '3'){
        $newFile = 'akte';
    }
    else  if($file == '4'){
        $newFile = 'ijazah_sma';
    }
    return $newFile;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $npm = $_POST['npm'];
    $file = $_POST['file'];

}
else{
    echo "damn";
}

$fiels = getConvert($file);
for ($i = 1; $i <= 999; $i++) {
    $filename = str_pad($i, 3, '0', STR_PAD_LEFT); // membuat nomor file menjadi 3 digit dengan angka 0 di depan jika kurang dari 3 digit
    $link = "https://simponi2.mdp.ac.id/file_datapribadi/$fiels/$npm-$filename.jpg"; // membuat link gambar
    echo "<img src=\"$link\" width=\"300\" height=\"500\" alt=\"Contoh Gambar\" />\n"; // menampilkan gambar dengan ukuran yang telah ditentukan
}
?>
 