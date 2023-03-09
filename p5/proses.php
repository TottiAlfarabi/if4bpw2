<?php

    require("helper.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
            // echo $_POST['nis'];
            // echo "<br>".$_POST['nama'];
            // echo "<br>".$_POST['JK'];
            // echo "<br>".$_POST['kota'];
            // echo "<br>".$_POST['tgl'];

            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $jk = $_POST['JK'];
            $kota = $_POST['kota'];
            $tglLahir = $_POST['tgl'];
            $foto = $_FILES['foto'];

            // echo $nis."<br>";
            // echo $nama."<br>";
            // echo getJK($jk)."<br>";
            // echo $kota."<br>";
            // echo getConvertTgl($tglLahir) ."<br>";

            // var_dump($foto);

            $temp = explode(".", $_FILES["foto"]["name"]);
            $newfilename = $nis . '.' . end($temp);
            move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $newfilename);

            


            // upload foto
    }
    else{
        echo "Silahkan isi form terlebih dahulu";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Output</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 align="center">Form Registrasi</h2>
                <table class="table">
                    <tr>
                        <td>NIS</td>
                        <td>: <?php echo $nis; ?></td>
                        <td rowspan="5">
                            <img src="uploads/<?php echo $newfilename; ?>" width="200px">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                         <td>: <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                         <td>: <?php echo getJK($jk); ?></td>
                    </tr>
                     <tr>
                        <td>Kota</td>
                         <td>: <?php echo getKota($kota); ?></td>
                    </tr>
                     <tr>
                        <td>Tanggal Lahir</td>
                         <td>: <?php echo getConvertTgl($tglLahir); ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    
</body>
</html>