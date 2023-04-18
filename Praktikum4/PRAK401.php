<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="panjang"><b>Panjang: </b></label>
        <input type="text" name="panjang" id="panjang"><br>
        <label for="lebar"><b>Lebar: </b></label>
        <input type="text" name="lebar" id="lebar"><br>
        <label for="nilai"><b>Nilai: </b></label>
        <input type="text" name="nilai" id="nilai"><br>
        <input type="submit" name="cetak" value="Cetak"><br><br>
    </form>
    <?php 
        if(isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['cetak'])){
            $panjang = intval($_POST['panjang']);
            $lebar = intval($_POST['lebar']);
            $nilai = $_POST['nilai'];
            $nilaiArr = explode(" ", $nilai);

            if($panjang == $lebar){
                $indeks = 0;
                for ($i = 0; $i < $panjang; $i++) { 
                    for ($j = 0; $j < $lebar; $j++) { 
                        $matrik[$i][$j] = $nilaiArr[$indeks];
                        $indeks++;
                    }
                }
    ?>
    <table>
        <?php 
            for($i = 0; $i < $panjang; $i++) { 
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) { 
                    echo "<td>".$matrik[$i][$j]."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <?php 
        }else{
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>