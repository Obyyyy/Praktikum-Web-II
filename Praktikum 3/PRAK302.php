<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
<form action="", method="get">
    <label for="tinggi">Tinggi: </label>
        <input type="text", name="tinggi" id="tinggi"><br>
        <label for="alamat">Alamat Gambar: </label>
        <input type="url", name="alamat" id="alamat"><br>
        <input type="submit", name="cetak", value="Cetak"><br>
    </form>
        <?php 
            if(isset($_GET['tinggi']) && isset($_GET['alamat']) && isset($_GET['cetak'])){
                $tinggi = intval($_GET['tinggi']);
                $gambar = $_GET['alamat'];
                echo '<p style="float: left; text-align: right;">';
                $i = $tinggi;
                while($i>=1){
                    $x = $i;
                    while($x>=1){
                        echo "<img src='$gambar' style='width:20px;height:20px;'/>";
                        $x--;
                    }
                    echo "<br />";
                    $i--;
                }
                echo '</p>';
            }
        ?>
</body>
</html>