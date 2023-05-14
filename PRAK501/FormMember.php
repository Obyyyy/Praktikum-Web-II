<?php 
    require "Koneksi.php";
    require "Model.php";

    if (isset($_GET['id_member'])) 
    {     
        $id = $_GET['id_member'];     
        $member = new Model();     
        $result = $member->getMemberById($id);     
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
                if(isset($_GET['id_member'])){
                    echo "<b>Edit Data Member</b>";
                } else {
                    echo "<b>Tambah Data Member</b>";
                }
            ?>
        </div>
        <div class="card-body">
        <form action="" method="post" class="row g-3">
            <div class="col-md-12">
                <label for="nama_member" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_member" name="nama_member" <?php echo (isset($_GET['id_member'])) ? "value='".$baris[0]["nama_member"]."'" : "value = ''"; ?> placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="col-md-12">
                <label for="nomor_member" class="form-label">Nomor Member</label>
                <input type="text" class="form-control" id="nomor_member" name="nomor_member" <?php echo (isset($_GET['id_member'])) ? "value='".$baris[0]["nomor_member"]."'" : "value = ''"; ?> placeholder="Masukkan Nomor Member" required>
            </div>
            <div class="col-md-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" <?php echo (isset($_GET['id_member'])) ? "value='".$baris[0]["alamat"]."'" : "value = ''"; ?> placeholder="Masukkan Alamat" required>
            </div>
            
            <div class="col-md-12">
                <label for="tgl_terakhir_bayar" class="form-label">Tanggal Terakhir Bayar</label>
                <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ? "value='".$baris[0]["tgl_terakhir_bayar"]."'" : "value = ''"; ?> placeholder="Tanggal Akhir Pembayaran">
            </div>
            <div class="col-auto">
                <table>
                    <tr>
                <?php 
                    echo "<ul class='left'>";
                    echo '<td><a class="btn btn-danger" href="Member.php" role="button"><i class="fa-solid fa-arrow-left"></i> Kembali</a></td>';
                    echo "</ul>";
                    if(isset($_GET['id_member'])){
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
                $nama = $_POST['nama_member'];
                $nomor = $_POST['nomor_member'];
                $alamat = $_POST['alamat'];
                $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

                $member = new Model();
                $member -> setMember($nama, $nomor, $alamat, $tgl_terakhir_bayar);
                header("Location: Member.php");
            }

            if(isset($_POST['update'])){
                $nama = $_POST['nama_member'];
                $nomor = $_POST['nomor_member'];
                $alamat = $_POST['alamat'];
                $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

                $member = new Model();
                $member -> editMember($id, $nama, $nomor, $alamat, $tgl_terakhir_bayar);
                header("Location: Member.php");
            }
        ?>
        </div>
    </div>
    </div>
    </div>
</body>
</html>