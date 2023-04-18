<?php 
    $data = [
        ['nama'=>'Andi', 'NIM'=>'2101001', 'UTS'=>87, 'UAS'=>65],
        ['nama' => 'Budi', 'NIM' => '2101002', 'UTS' => 76, 'UAS' => 79],
        ['nama' => 'Tono', 'NIM' => '2101003', 'UTS' => 50, 'UAS' => 41],
        ['nama' => 'Jessica', 'NIM' => '2101004', 'UTS' => 60, 'UAS' => 75]
    ];

    foreach($data as $key => $value){
        $data[$key]['akhir'] = $value['UTS'] * 0.4 + $value['UAS'] * 0.6;

        if($data[$key]['akhir'] >= 80){
            $data[$key]['huruf'] = 'A';
        }elseif($data[$key]['akhir'] >= 70){
            $data[$key]['huruf'] = 'B';
        }elseif($data[$key]['akhir'] >= 60){
            $data[$key]['huruf'] = 'C';
        }elseif($data[$key]['akhir'] >= 50){
            $data[$key]['huruf'] = 'D';
        }else{
            $data[$key]['huruf'] = 'E';
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
        table, tr, th, td {
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 15px;
            padding: 5px 30px 10px 5px;
        }
        th{
            background-color: #CCCDCC;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>NIlai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php 
            foreach($data as $value){
                echo "<tr>";
                echo "<td>".$value['nama']."</td>";
                echo "<td>".$value['NIM']."</td>";
                echo "<td>".$value['UTS']."</td>";
                echo "<td>".$value['UAS']."</td>";
                echo "<td>".$value['akhir']."</td>";
                echo "<td>".$value['huruf']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>