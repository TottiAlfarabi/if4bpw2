<?php

$serverName = "LAPTOP-978R728N";

$connection = array("Database"=> "account");

$conn = sqlsrv_connect($serverName, $connection);


if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

// else{
//     echo 'connected';
// }


$sql = "SELECT * FROM users";

function query($syntax){
    global $conn;
    $get = sqlsrv_query($conn, $syntax);
    $rows = [];
    while($row = sqlsrv_fetch_array($get, SQLSRV_FETCH_ASSOC) ){
        $rows[] = $row; 
    }

    return $rows;
}

$stmt = query($sql);


session_start();
$username = $_POST['username'];
$password = $_POST['password'];
foreach($stmt as $data){
    if($data['password'] == $password && $data['username'] == $username){
       
        $_SESSION['username'] = $data['username'];
     
        header('Location: dashboard.php');
    }

    
}





?>