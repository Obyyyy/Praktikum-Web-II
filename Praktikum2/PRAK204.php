<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="", method="post">
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai" required><br>

        <input type="submit" name="konversi" value="Konversi"><br>
    </form>
    <?php 
        if(isset($_POST['konversi']) && isset($_POST['nilai'])){
            $bilangan = intval($_POST["nilai"]);
            if($bilangan==0){
                echo "<h2>Hasil: Nol</h2>";
            }elseif(1<=$bilangan && $bilangan<10){
                echo "<h2>Hasil: Satuan</h2>";
            }elseif(10<$bilangan && $bilangan<20){
                echo "<h2>Hasil: Belasan</h2>";
            }elseif(20<=$bilangan && $bilangan<=99 || $bilangan==10){
                echo "<h2>Hasil: Puluhan</h2>";
            }elseif(100<=$bilangan && $bilangan<=999){
                echo "<h2>Hasil: Ratusan</h2>";
            }elseif($bilangan>=1000){
                echo "<h2>Anda Menginput Melebihi Limit Bilangan</h2>";
            }
        }
    ?>
</body>
</html>