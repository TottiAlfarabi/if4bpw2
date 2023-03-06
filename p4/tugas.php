<?php
require("helperp4.php");
 
// treko();

// enter();

// echo getProdi(24);

// enter();

// echo getProdiByNPM(2125110089);


$nilais =  [
    [
        "mk" => "Algoritma Struktur Data 2",
        "kode_mk" => "IF0017",
        "hm" => "a",
        "k" => 3,
       
    ],
    [
        "mk" => "Aplikasi Bisnis",
        "kode_mk" => "IF0041",
        "hm" => "d",
        "k" => 3,
    ],
    [
        "mk" => "Matematika Diskrit",
        "kode_mk" => "I1207",
        "hm" => "d",
        "k" => 4,
    ],
    [
        "mk" => "Kalkulus 2",
        "kode_mk" => "IF0037",
        "hm" => "a",
        "k" => 3,
       
    ],
    [
        "mk" => " Kalkulus 1",
        "kode_mk" => "IF0036",
        "hm" => "a",
        "k" => 3,
       
    ],
    [
        
        "mk"    => "Tugas Akhir",
        "kode_mk"   => "IF0055",
        "hm"        => "a",
        "k"         => 4,

    ]];



echo "<h1>N I L A I</h2>";

echo "</br><table border=1>
    <tr>
        <th> no </th>
        <th> Mata Kuliah </th>
        <th>kode mk</th>
        <th>HM</th>
        <th>AM</th>
        <th>K</th>
        <th>M</th>
    </tr>";

$total_k = 0;
$total_m = 0;
 $adaD = false;
 $no = 1;
 $TA = false;
 $nilaiE = false;
 $minimalD = 0;
foreach ($nilais as $data) {

    if($data['kode_mk'] == 'IF0055'){
        if($data['hm'] != 'd' && $data['hm'] != 'e' ){
            $TA = true;
        }
       
    }
    if($data['hm'] == 'e'){
        $nilaiE = true; 
     }
     if($data['hm'] == 'd'){
           $adaD = true;
           $minimalD += $data['k'];   
        }
    
   
    
    
    $total_k += $data['k'];
    $total_m += getM(getAM($data['hm']), $data['k']);
    echo " <tr>
    <td>" . $no++ . "</td>
    <td>" . $data['mk'] . "</td>
    <td>" . $data['kode_mk'] . "</td>
    <td>" . $data['hm'] . "</td>
    <td>" . getAM($data['hm']) . "</td>
    <td>" . $data['k'] . "</td>
    <td>" . getM(getAM($data['hm']), $data['k']) . "</td>
    </tr>";
}

echo "<><td colspan='5'>JUMLAH</td><td>".$total_k."</td><td>".$total_m."</td></tr>";
echo "<><td colspan='5'>IPK</td><td colspan =2>".getIPK($total_m, $total_k)."</td></tr>";
echo "<><td colspan='7' align = center>PREDIKAT : ".getPredikatKelulusan(getIPK($total_m, $total_k), $adaD)."</td></tr>";
echo "<><td colspan='7' align = center>YUDISIUM : ".getYudisium($TA,getIPK($total_m, $total_k),$nilaiE,$minimalD)."</td></tr>";
echo "<tr><td colspan='7' align = center>Dengan Nilai D : ".$minimalD." SKS</td></tr>";


echo "</table>";
?>