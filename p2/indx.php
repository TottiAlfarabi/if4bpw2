<?php
$nama = "Ahmad";
$npm = "2125250080";
$hobby = array("makan", "minum", "Sholat");


echo "Nama : $nama";
echo "<br>Npm : $npm";
echo "<br>hobi : $hobby[1]";

echo"<ul>";
foreach($hobby as $data){
    echo"<li>".$data."</li>";
}

echo"</ul>";

//array asodsiatif

$mahasiswa = array(
    "npm" => 2125250089,
    "nama" => "Ahmad"
);

echo $mahasiswa['npm'];

//array multidimensi

$mahasiswas = [
    [
        "npm" => 2125250034,
        "nama" => "Tedi"
    ],
    [
         "npm" => 2125250056,
        "nama" => "Teder"
    ],
    [
         "npm" => 2125250056,
        "nama" => "geri"
    ]
    ];

    echo"</br></br></br></br><table border=1>
    <tr>
    <th>Npm</th><th>Nama Mahasiswa</th>
    </tr>";
foreach($mahasiswas as $data){
    echo " <tr>
    <td>".$data['npm']."</td>
    <td>".$data['nama']."</td>
    </tr>";
}
 echo"</table>";
   
   

?>
