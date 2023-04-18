<?php 
    $data = [
        ["no" => 1, 
        "nama" => "Ridho", 
        "MK" => [
            ["namaMK" =>"Pemrograman I", "SKS" => 2], 
            ["namaMK" => "Praktikum Pemrograman I", "SKS" => 1],
            ["namaMK" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2], 
            ["namaMK" => "Arsitektur Komputer", "SKS" => 3]
        ]
        ],

        ["no" => 2,
        "nama" => "Ratna", 
        "MK" => [
            ["namaMK" =>"Basis Data I", "SKS" => 2], 
            ["namaMK" => "Praktikum Basis Data I", "SKS" => 1],
            ["namaMK" => "Kalkulus", "SKS" => 3]
        ]
        ],

        ["no" => 3,
        "nama" => "Tono", 
        "MK" => [
            ["namaMK" => "Rekayasa Perangkat Lunak", "SKS" => 3], 
            ["namaMK" => "Analisis dan Perancangan Sistem", "SKS" => 3],
            ["namaMK" => "Komputasi Awan", "SKS" => 3], 
            ["namaMK" => "Kecerdasan Bisnis", "SKS" => 3]
        ]
        ]
    ];

    foreach($data as $key => $value){
        $totalsks = 0;
        foreach($value['MK'] as $MK){
            $totalsks = $totalsks + $MK['SKS'];
        }
        $data[$key]['totalsks'] = $totalsks;
        
        if($data[$key]['totalsks'] < 7){
            $data[$key]['keterangan'] = "Revisi KRS";
        }else{
            $data[$key]['keterangan'] = "Tidak Revisi";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 15px;
            padding: 5px 15px 10px 5px;
        }
        th{
            background-color: #CCCDCC;
            text-align: left;
        }
        .revisi{
            background-color: red;
        }
        .tidakRevisi{
            background-color: green;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>keterangan</th>
        </tr>
        <?php 
            foreach($data as $key => $value){
                foreach($value["MK"] as $indeksMK => $MK){
                    echo "<tr>";
                    if($indeksMK === 0){
                        echo "<td>".$value['no']."</td>";
                        echo "<td>".$value['nama']."</td>";
                        echo "<td>".$MK['namaMK']."</td>";
                        echo "<td>".$MK['SKS']."</td>";
                        echo "<td>".$value['totalsks']."</td>";

                        if($value['keterangan'] == "Revisi KRS"){
                            echo "<td class=revisi>".$value['keterangan']."</td>";
                        }else{
                            echo "<td class=tidakRevisi>".$value['keterangan']."</td>";
                        }
                    }else{
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$MK['namaMK']."</td>";
                        echo "<td>".$MK['SKS']."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>