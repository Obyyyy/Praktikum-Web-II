<?php 
    require "Koneksi.php";
    require "Model.php";

    $judul = $penulis = $penerbit = $tahunTerbit = "";
    if (isset($_GET['id_buku'])) 
    {     
        $id = $_GET['id_buku'];     
        $buku = new Model();     
        $result = $buku->getBukuById($id);     
        $baris = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku | Tambah Data</title>
    <style>
        *{
            font-family:Georgia, Geneva, Tahoma, sans-serif
        }
        h1 {
            border-bottom: 2px solid #BFCCB5;
            padding-bottom: 10px;
        }
        .margin{
            margin: 50px 200px;
        }
        .margin2{
            margin: 0px 500px 0px 0px;
        }
        table{
            width: 100%;
            margin: 0px;
        }
        .left{
            float: left;
            display: block;
        }
        .right{
            float: right;
            display: block;
        }
    </style>
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="margin">
    
    <h1>Peminjaman Buku</h1>

    <div class="margin2">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <?php 
                if(isset($_GET['id_buku'])){
                    echo "<b>Edit Data Buku</b>";
                } else {
                    echo "<b>Tambah Data Buku</b>";
                }
            ?>
        </div>
        <div class="card-body">
        <form action="" method="post" class="row g-3">
            <div class="col-md-12">
                <label for="jdlBuku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="jdlBuku" name="jdlBuku" <?php echo (isset($_GET['id_buku'])) ? "value='".$baris[0]["judul_buku"]."'" : "value = ''"; ?> placeholder="Masukkan Judul Buku" required>
            </div>
            <div class="col-md-12">
                <label for="penulis" class="form-label">Penulis Buku</label>
                <input type="text" class="form-control" id="penulis" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value='".$baris[0]["penulis"]."'" : "value = ''"; ?> placeholder="Masukkan Nama Penulis" required>
            </div>
            <div class="col-md-12">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" <?php echo (isset($_GET['id_buku'])) ? "value='".$baris[0]["penerbit"]."'" : "value = ''"; ?> placeholder="Masukkan Penerbit Buku" required>
            </div>
            <div class="col-md-12">
                <label for="thnTerbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" id="thnTerbit" name="thnTerbit" <?php echo (isset($_GET['id_buku'])) ? "value='".$baris[0]["tahun_terbit"]."'" : "value = ''"; ?> placeholder="Tahun Terbit Buku" required>
            </div>
            <div class="col-auto">
                <table>
                    <tr>
                <?php 
                    echo "<ul class='left'>";
                    echo '<td><a class="btn btn-danger" href="Buku.php" role="button"><i class="fa-solid fa-arrow-left"></i> Kembali</a></td>';
                    echo "</ul>";
                    if(isset($_GET['id_buku'])){
                        echo "<ul class='right'>";
                        echo '<td><button type="submit" class="btn btn-primary" name="update"><i class="fa-solid fa-pen"></i> Update</button></td>';
                        echo "</ul>";
                    } else {
                        echo "<ul class='right'>";
                        echo '<td><button type="submit" class="btn btn-primary" name="submit"><i class="fa-solid fa-square-plus"></i> Tambah</button></td>';
                        echo "</ul>";
                    }
                ?>
                    </tr>
                </table>
            </div>
        </form>

        <?php 
            if(isset($_POST['submit'])){
                $judul = $_POST['jdlBuku'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $thnTerbit = $_POST['thnTerbit'];

                $buku = new Model();
                $buku -> setBuku($judul, $penulis, $penerbit, $thnTerbit);
                header("Location: Buku.php");
            }

            if(isset($_POST['update'])){
                $judul = $_POST['jdlBuku'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $thnTerbit = $_POST['thnTerbit'];

                $buku = new Model();
                $buku -> editBuku($id, $judul, $penulis, $penerbit, $thnTerbit);
                header("Location: Buku.php");
            }
        ?>
        </div>
    </div>
    </div>
    </div>
</body>
</html>