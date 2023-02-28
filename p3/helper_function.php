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
           "c+" => 2.7,

    ];
    return $am[$nilais];
}

function getM ($am,  $k){

    return $am*$k;
} 


?>