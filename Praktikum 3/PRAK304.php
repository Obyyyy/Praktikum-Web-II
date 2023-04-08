<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <?php 
        if(empty($_POST['jml']) || $_POST['jml']=="1"){
    ?>
        <form action="", method="post">
            <label for="jml">Jumlah Bintang</label>
            <input type="text", name="jml" id="jml"><br>
            <input type="submit", name="submit", value="Submit"><br><br>
        </form>
    <?php 
        }
        if(isset($_POST['jml']) && $_POST['jml']!="1"){
            $jml = intval($_POST['jml']);
            $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
            if(isset($_POST['button'])){
                if($_POST['button']=="Kurang"){
                    $jml=($jml==0)? $jml:$jml-1;
                }else{
                    $jml+=1;
                }
            }
            echo "Jumlah Bintang $jml<br><br>";
            for($i=0; $i<$jml; $i++){
                echo "<img src='$gambar' style='width:70px;height:70px;'/> ";
            }
    ?>
    <form action="", method="post">
        <input type="text" name="jml" value="<?= $jml ?>" hidden>
        <input type="submit", name="button", value="Kurang"></input>
        <input type="submit",  name="button", value="Tambah"></input>
    </form>
    <?php 
        }
    ?>
</body>
</html>