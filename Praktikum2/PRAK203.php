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

        <label for="suhuAwal">Dari :</label><br>
        <input type="radio" name="suhuAwal" id="celcius" value="Celcius" required>
        <label for="celcius">Celcius</label><br>
        <input type="radio" name="suhuAwal" id="fahrenheit" value="Fahrenheit" required>
        <label for="fahrenheit">Fahrenheit</label><br>
        <input type="radio" name="suhuAwal" id="rheamur" value="Rheamur" required>
        <label for="rheamur">Rheamur</label><br>
        <input type="radio" name="suhuAwal" id="kelvin" value="Kelvin" required>
        <label for="kelvin">Kelvin</label><br>

        <label for="suhuAwal">Ke :</label><br>
        <input type="radio" name="suhuAkhir" id="celcius" value="Celcius" required>
        <label for="celcius">Celcius</label><br>
        <input type="radio" name="suhuAkhir" id="fahrenheit" value="Fahrenheit" required>
        <label for="fahrenheit">Fahrenheit</label><br>
        <input type="radio" name="suhuAkhir" id="rheamur" value="Rheamur" required>
        <label for="rheamur">Rheamur</label><br>
        <input type="radio" name="suhuAkhir" id="kelvin" value="Kelvin" required>
        <label for="kelvin">Kelvin</label><br>

        <input type="submit" name="submit" value="Konversi"><br>
    </form>
    <?php 
        if(isset($_POST['submit']) && isset($_POST['nilai']) && isset($_POST['suhuAwal']) && isset($_POST['suhuAkhir'])){
            $suhu = $_POST["nilai"];
            $suhuAwal = $_POST['suhuAwal'];
            $suhuAkhir = $_POST['suhuAkhir'];
            
            switch($suhuAwal){
                // konversi dari celcius
                case "Celcius":
                    if($suhuAkhir=="Fahrenheit") {
                        $fFromCelcius = ($suhu*9/5) + 32;
                        echo "<h1>Hasil Konversi: $fFromCelcius &deg;F</h1>";
                    } elseif($suhuAkhir=="Rheamur"){
                        $rFromCelcius = 4/5 * $suhu;
                        echo "<h1>Hasil Konversi: $rFromCelcius &deg;R</h1>";
                    }elseif($suhuAkhir=="Kelvin"){
                        $kFromCelcius = $suhu + 273;
                        echo "<h1>Hasil Konversi: $kFromCelcius K</h1>";
                    }else{
                        echo "<h1>Hasil Konversi: $suhu &deg;C</h1>";
                    }
                    break;

                // konversi dari Fahrenheit
                case "Fahrenheit":
                    if($suhuAkhir=="Celcius") {
                        $cFromFahrenheit = 5/9 * ($suhu-32);
                        echo "<h1>Hasil Konversi: $cFromFahrenheit &deg;C</h1>";
                    } elseif($suhuAkhir=="Rheamur"){
                        $rFromFahrenheit = 4/9 * ($suhu-32);
                        echo "<h1>Hasil Konversi: $rFromFahrenheit &deg;R</h1>";
                    }elseif($suhuAkhir=="Kelvin"){
                        $kFromFahrenheit = 5/9 * ($suhu-32) + 273;
                        echo "<h1>Hasil Konversi: $kFromFahrenheit K</h1>";
                    }else{
                        echo "<h1>Hasil Konversi: $suhu &deg;F</h1>";
                    }
                    break;

                // konversi dari Rheamur
                case "Rheamur":
                    if($suhuAkhir=="Celcius") {
                        $cFromRheamur = 5/4 * $suhu;
                        echo "<h1>Hasil Konversi: $cFromRheamur &deg;C</h1>";
                    } elseif($suhuAkhir=="Fahrenheit"){
                        $fFromRheamur = ($suhu*9/4) + 32;
                        echo "<h1>Hasil Konversi: $fFromRheamur &deg;F</h1>";
                    }elseif($suhuAkhir=="Kelvin"){
                        $kFromRheamur = 5/4 * $suhu + 273;
                        echo "<h1>Hasil Konversi: $kFromRheamur K</h1>";
                    }else{
                        echo "<h1>Hasil Konversi: $suhu &deg;R</h1>";
                    }
                    break;
                // konversi dari Kelvin
                case "Kelvin":
                    if($suhuAkhir=="Celcius") {
                        $cFromKelvin = $suhu - 273;
                        echo "<h1>Hasil Konversi: $cFromKelvin &deg;C</h1>";
                    } elseif($suhuAkhir=="Fahrenheit"){
                        $fFromKelvin = 9/5 * ($suhu-273) + 32;
                        echo "<h1>Hasil Konversi: $fFromKelvin &deg;F</h1>";
                    }elseif($suhuAkhir=="Rheamur"){
                        $rFromKelvin = 4/5 * ($suhu-273);
                        echo "<h1>Hasil Konversi: $rFromKelvin &deg;R</h1>";
                    }else{
                        echo "<h1>Hasil Konversi: $suhu K</h1>";
                    }
                    break;
            }
        }
    ?>
</body>
</html>