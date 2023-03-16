<?php

abstract class Mobil{

    public $warna;

    public $merek;

    private $harga;

    function bunyi(){
        return "";
    }

    function setHarga($val){
        $this->harga = $val;
    }
    
    function getHarga(){
        return $this->harga;
    }

    

}

class MobilJepang extends Mobil{
    
    function bunyi(){
        return "stutututu";
    }
}

class MobilItalia extends Mobil{
    function bunyi(){
        return "brott brottt brott";
    }
}

function convert_to_rupiah($angka)
	{
		return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
	}

?>