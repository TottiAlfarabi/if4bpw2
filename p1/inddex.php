<?php

    
    echo"Hello Bro! <br/><br/>";
    echo"<h2>Ini BIO Saya</h2>";
  
    $npm = "2125250080";
    $nama = "Totti Alfarabi";
    $jk = "Pria";
    $kelas = "IF4B";
    $usia = 20;
    $pjg = 170.9;
    $prodi = "";
    
    
    //Function IF
    if(substr($npm, 4, 2) == 24){
        $prodi = "SI";
    }
    elseif(substr($npm, 4, 2) == 25){
        $prodi = "TI";
    }
    elseif(substr($npm, 4, 2) == 27){
        $prodi = "TE";
    }
    elseif(substr($npm, 4, 2) == 20){
        $prodi = "MJ";
    }
    elseif(substr($npm, 4, 2) == 21){
        $prodi = "AK";
    }
    else{
        $prodi = "Npm Salah";
    }

    //Print Function
    echo "Npm : $npm <br/>";
    echo "Nama : $nama <br/>";
    echo "Usia : $usia Tahun <br/>";
    echo "Kelas : $kelas <br/>";
    echo "Jenis Kelamin : $jk <br/>";
    echo "Tinggi : $pjg Cm <br/>";
    echo "Prodi : $prodi <br/>";
   

?>