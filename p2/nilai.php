<?php

$nilais =  [
    [
        "mk" => "Algoritma Struktur Data 2",
        "kode_mk" => "IF0017",
        "hm" => "a",
        "am" => 4,
        "k" => 3,
        "m" => 12
        
    ],
     [
        "mk" => "Aplikasi Bisnis",
        "kode_mk" => "IF0041",
        "hm" => "a",
       "am" => 4,
        "k" => 3,
        "m" => 12
        
    ],
     [
        "mk" => "Matematika Diskrit",
        "kode_mk" => "I1207",
        "hm" => "a",
       "am" => 4,
        "k" => 4,
        "m" => 16
        
    ],
     [
        "mk" => "Metode Numerik",
        "kode_mk" => "IF0013",
        "hm" => "a",
       "am" => 4,
        "k" => 2,
        "m" => 8
        
    ],
     [
        "mk" => "Pemograman Berorientasi Objek",
        "kode_mk" => "I1209",
        "hm" => "a",
       "am" => 4,
        "k" => 3,
        "m" => 12
        
    ],
   
 
    ];

    echo "<h1>N I L A I</h2>";

     echo"</br></br></br></br><table border=1>
    <tr>
        <th> Mata Kuliah </th>
        <th>kode mk</th>
        <th>HM</th>
        <th>AM</th>
        <th>K</th>
        <th>M</th>
    </tr>";
foreach($nilais as $data){
    echo " <tr>
    <td>".$data['mk']."</td>
    <td>".$data['kode_mk']."</td>
   <td>".$data['hm']."</td>
    <td>".$data['am']."</td>
     <td>".$data['k']."</td>
      <td>".$data['m']."</td>
    </tr>";
}
 echo"</table>";
?>