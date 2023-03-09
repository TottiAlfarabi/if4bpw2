<?php

function getConvertTgl($date){
    $new_date = date('d-m-Y', strtotime($date));
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

?>