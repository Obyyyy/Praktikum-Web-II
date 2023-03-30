<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-danger{
            color: red;
        }
    </style>
</head>
<body>
    <form action="", method="get">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span class="text-danger">* 
            <?php if (isset($_GET['submit']) && $_GET['nama'] == "" ){
                echo "nama tidak boleh kosong";
            }
            ?>
        </span><br>
        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim"><span class="text-danger">*
        <?php if (isset($_GET['submit']) &&  $_GET['nim'] == ""){
                echo "nim tidak boleh kosong";
            }
            ?>
        </span><br>
        <label for="gender">Jenis Kelamin :<span class="text-danger">*
        <?php if (isset($_GET['submit']) && empty($_GET['gender'])){
                echo "Jenis kelamin tidak boleh kosong";
            }
            ?>
        </span></label><br>
        <input type="radio" name="gender" id="jkl" value="Laki-laki">
        <label for="jkl">Laki-laki</label><br>
        <input type="radio" name="gender" id="jkp" value="Perempuan">
        <label for="jkp">Perempuan</label><br>
        <input type="submit" name="submit" value="Submit"><br>

    </form>
    <?php 
        if(isset($_GET['submit']) && $_GET['nama'] != "" && isset($_GET['gender']) && $_GET['nim'] != ""){
            echo "<h2>Output: </h2>";
            echo $_GET["nama"]."<br>";
            echo $_GET["nim"]."<br>";
            echo $_GET["gender"]."<br>";
        }
    ?>
</body>
</html>