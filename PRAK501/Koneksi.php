<?php
    $DBHOST = "localhost";
    $DBNAME = "crud";
    $USERNAME = "root";
    $PASSWORD = "";

    $koneksi = mysqli_connect($DBHOST, $USERNAME, $PASSWORD, $DBNAME);
    if(!$koneksi){
        die("Koneksi gagal: " . mysqli_connect_error());
    }    
?>