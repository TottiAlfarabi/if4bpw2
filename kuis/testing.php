<?php 

 

function getJabatan($kode){
    if($kode == 'M'){
        $jabatan = 'Manager';
    }
     else if($kode == 'MP'){
        $jabatan = 'Mobile Programmer';
    }
     else if($kode == 'WP'){
        $jabatan = 'Web Programmer';
    }
     else if($kode == 'UIX'){
        $jabatan = 'UI/ UX Designer';
    }
      else{
        $jabatan = 'Database designer';
    }

    return $jabatan;
}


function getGaji($kode){
    if($kode == 'M'){
        $gaji = 15000000;
    }
     else if($kode == 'MP'){
        $gaji = 10000000;
    }
     else if($kode == 'WP'){
         $gaji = 10000000;
    }
     else if($kode == 'UIX'){
        $gaji = 8000000;
    }
      else{
         $gaji = 9000000;
    }

    return $gaji;
}

function tahunAbdi($v,$w){
    $hasil = $v - $w;
    return $hasil;
}


?>