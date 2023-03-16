<?php 
// memulai session
 session_start();
 
 
 if($_SESSION['username'] == "" ){
    header('Location: login.php');
  }
  if($_SESSION['password'] == "" ){
    header('Location: login.php');
  }
 
 $_SESSION['sukses'] = 'Anda berhasil Keluar!!!';
 header('Location: login.php');
 unset($_SESSION['username']);
 unset($_SESSION['password']);
 unset($_SESSION['nama']);
 ?>

