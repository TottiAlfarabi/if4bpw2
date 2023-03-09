<?php

function getConvertTgl($date){
    $new_date = date('l, d F Y',strtotime($date));
    return $new_date;
}


function getJK($jk){
    if($jk == 'l'){

        $jenis = "Lanang";

    }
    else if($jk == 'p'){
        $jenis = "Betina";
    }
    else{
     $jenis = "Binary";
    }


    return $jenis;
}

function getKota($paramkt){
    if($paramkt == '1'){
        $kota = 'Palembang';
    }
    else if($paramkt == '2'){
        $kota = 'Lahat';
    }
    else if($paramkt == '3'){
        $kota = 'Linggau';
    }
    else  if($paramkt == '4'){
        $kota = 'Pali';
    }
    return $kota;
}



?>