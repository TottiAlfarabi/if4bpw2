<?php
session_start();
$serverName = "LAPTOP-978R728N";

$connection = array("Database"=> "account");

$conn = sqlsrv_connect($serverName, $connection);

 

$sqlGet = "SELECT * FROM users";

function query($syntax){
    global $conn;
    $get = sqlsrv_query($conn, $syntax);
    $rows = [];
    while($row = sqlsrv_fetch_array($get, SQLSRV_FETCH_ASSOC) ){
        $rows[] = $row; 
    }

    return $rows;
}

$stmt = query($sqlGet);

$canLogin = false;

$username = $_POST['username'];
$password = $_POST['password'];
foreach($stmt as $data){
    if($data['password'] == $password && $data['username'] == $username){
        $canLogin = true;
        $_SESSION['username'] = $data['username'];
     
        header('Location: dashboard.php');
    }

    
}


if (!$canLogin) {
    $_SESSION['error'] = 'Username dan password salah!';
    header('Location: signup.php');
}






?>