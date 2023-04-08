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
    <label for="b_bawah">Batas Bawah: </label>
        <input type="text", name="b_bawah" id="b_bawah"><br>
        <label for="b_atas">Batas Atas: </label>
        <input type="text", name="b_atas" id="b_atas"><br>
        <input type="submit", name="cetak", value="Cetak"><br><br>
    </form>
        <?php
            if(isset($_GET['b_bawah']) && isset($_GET['b_atas']) && isset($_GET['cetak'])){
                $b_bawah = intval($_GET['b_bawah']);
                $b_atas = intval($_GET['b_atas']);
                $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
                $i = $b_bawah;
                do{
                    if(($i+7)%5==0){
                        echo "<img src='$gambar' style='width:20px;height:20px;'/> ";
                    }else{
                        echo "$i ";
                    }
                    $i++;
                }while($i<=$b_atas);
            }
        ?>
</body>
</html>