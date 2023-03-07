<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo $_POST['nis'];
            echo "<br>".$_POST['nama'];
            echo "<br>".$_POST['JK'];
            echo "<br>".$_POST['kota'];
            echo "<br>".$_POST['tgl'];
    }
    else{
        echo "Silahkan isi form terlebih dahulu";
    }


    


?>