<?php

function treko(){
    echo "belajar function";
}

function enter(){
        echo "<br><br>";
}

function getProdi($kode_prodi){

    $prodi =[
        11 => "Manajemen Informatika",
        20 => "Manajemen",
        21 => "Akuntansi",
        24 => "Sistem Informasi",
        25 => "Informatika",
        27 => "Teknik Elektro",
    ];
    return $prodi[$kode_prodi];
}

function getProdiByNPM($npm){
    return getProdi(substr($npm, 4,2));
}


function getAM($nilais){
    $am =[
        "a" => 4,
        "a-" => 3.7,
        "b+" => 3.3,
        "b" => 3,
        "b-" => 2.7,
        "c+" => 2.3,
        "c" => 2,
        "d" => 1,
        "e" =>0,

    ];
    return $am[$nilais];
}

function getM ($am,  $k){

    return $am*$k;
} 
function getIPK($total_m, $total_k)
{
    return number_format(($total_m/$total_k), 2);
}

function getPredikatKelulusan($ipk , $adaD = false){

   if($ipk > 3.51){
        if($adaD == true){
            $predikat= "Sangat Memuaskan";
        }
        else{
        $predikat = "Dengan Pujian";
            }   
    }
   else if($ipk >= 3.01){
         $predikat = "Sangat Memuaskan";
   }
    else if($ipk >= 2.76){
         $predikat = "Memuaskan";
   }
    else if($ipk >= 2.5){
         $predikat = "Lulus";
   }
   else{
    $predikat = "Tidak Lulus";
   }
   return $predikat;
}

?>