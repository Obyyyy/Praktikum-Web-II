<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
    <style>
        .merah{
            color:red;
        }
        .hijau{
            color: green;
        }
    </style>
</head>
<body>
<form action="", method="get">
        <label for="peserta">Jumlah Peserta: </label>
        <input type="text", name="peserta" id="peserta"><br>
        <input type="submit", name="cetak", value="Cetak"><br>
    </form>
    <?php 
        if(isset($_GET['peserta']) && isset($_GET['cetak'])){
            $jmlPeserta = intval($_GET['peserta']);
            $i=1;
            while($i<=$jmlPeserta){
                if($i%2==0){
                    echo "<h2 style='color: green;'>Peserta ke-$i</h2>";
                }elseif($i%2==1){
                    echo "<h2 style='color: red'>Peserta ke-$i</h2>";
                }
                $i++;
            }
        }
    ?>
</body>
</html>