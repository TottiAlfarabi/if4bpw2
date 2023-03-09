<?php

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

            echo $nis."<br>";
            echo $nama."<br>";
            echo $jk."<br>";
            echo $kota."<br>";
            echo $tglLahir ."<br>";

           
        

            var_dump($foto);

            $temp = explode(".", $_FILES["foto"]["name"]);
            $newfilename = $nis . '.' . end($temp);
            move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $newfilename);


            // upload foto
    }
    else{
        echo "Silahkan isi form terlebih dahulu";
    }


    


?>