<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum201</title>
</head>
<body>
    <form action="", method="get">
        <label for="nama1">Nama: 1</label>
        <input type="text", name="nama1" id="nama1"><br>
        <label for="nama2">Nama: 2</label>
        <input type="text", name="nama2" id="nama2"><br>
        <label for="nama3">Nama: 3</label>
        <input type="text", name="nama3" id="nama3"><br>
        <input type="submit", name="submit", value="Urutkan"><br><br>
    </form>
    <?php 
        $nama1 = $_GET['nama1'];
        $nama2 = $_GET['nama2'];
        $nama3 = $_GET['nama3'];

        if($nama1<$nama2 && $nama1<$nama3){
            echo $nama1."<br>";
            if($nama2<$nama3){
                echo $nama2."<br>";
                echo $nama3."<br>";
            }else{
                echo $nama3."<br>";
                echo $nama2."<br>";
            }
        } elseif($nama2<$nama1 && $nama2<$nama3){
            echo $nama2."<br>";
            if($nama1<$nama3){
                echo $nama1."<br>";
                echo $nama3."<br>";
            }else{
                echo $nama3."<br>";
                echo $nama1."<br>";
            }
        }elseif($nama3<$nama2 && $nama3<$nama1){
            echo $nama3."<br>";
            if($nama1<$nama2){
                echo $nama1."<br>";
                echo $nama2."<br>";
            }else{
                echo $nama2."<br>";
                echo $nama1."<br>";
            }
        }
    ?>
</body>
</html>
