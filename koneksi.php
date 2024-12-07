<?php
    $host ="localhost";
    $user= "root";
    $pass="";
    $db="akademik";


  //membari alamat koneksi
  $koneksi = mysqli_connect($host,$user,$pass,$db);

  // koneksi = mysqli_connect("localhost","root","","akademik")

  if(mysqli_connect_errno()){
  echo "Koneksi ke data base gagal : ".  mysqli_connect_error();   
  }

  
?>