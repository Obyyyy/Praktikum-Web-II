<?php
    $jari = 4.2;
    $tinggi = 5.4;

    //luas alas lingkaran = jari^2 phi
    // volume tabung = luas alas x tinggi
    $luas_alas = pi() * ($jari ** 2);
    $volume_tabung = $luas_alas * $tinggi;
    echo round($volume_tabung, 3). " m3";
?>