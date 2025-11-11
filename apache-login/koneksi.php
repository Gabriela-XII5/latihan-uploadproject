<?php

$koneksi = mysqli_connect("localhost", "root", "", "baru");

//if (!$koneksi) { 
   // die("koneksi gagal".mysqli_connect_error()); }

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>