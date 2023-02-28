<?php

require("helper_function.php");
 
treko();

enter();

echo getProdi(24);

enter();

echo getProdiByNPM(2125110089);


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
        "hm" => "b+",
        "k" => 3,
    ],
    [
        "mk" => "Matematika Diskrit",
        "kode_mk" => "I1207",
        "hm" => "b",
        "k" => 4,
    ]];



echo "<h1>N I L A I</h2>";

echo "</br></br></br></br><table border=1>
    <tr>
        <th> Mata Kuliah </th>
        <th>kode mk</th>
        <th>HM</th>
        <th>AM</th>
        <th>K</th>
        <th>M</th>
    </tr>";
foreach ($nilais as $data) {
    echo " <tr>
    <td>" . $data['mk'] . "</td>
    <td>" . $data['kode_mk'] . "</td>
   <td>" . $data['hm'] . "</td>
    <td>" . getAM($data['hm']) . "</td>
     <td>" . $data['k'] . "</td>
      <td>" . getM(getAM($data['hm']), $data['k']) . "</td>
    </tr>";
}
echo "</table>";

?>