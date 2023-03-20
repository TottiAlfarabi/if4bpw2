<?php

$serverName = "LAPTOP-978R728N";
$database = "account";
$uid = "";
$pass  = "";

$connection = array(
        
            "database"=> $database,
            "uid"=> $uid,
            "pass"=>$pass

);

$conn = sqlsrv_connect($serverName, $connection);


if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

else{
    echo 'connected';
}

// $sql = "SELECT * FROM account";
// $stmt = sqlsrv_query($conn, $sql);

// if ($stmt === false) {
//     die(print_r(sqlsrv_errors(), true));
// }

// while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
//     echo $row['kolom1'] . ", " . $row['kolom2'] . "<br>";
// }

?>