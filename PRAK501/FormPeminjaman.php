<?php 
    ob_start();
    require "Koneksi.php";
    require "Model.php";

    $peminjaman = new Model();
    $buku = $peminjaman -> getBuku();
    $member = $peminjaman -> getMember();

    if (isset($_GET['id_peminjaman'])) 
    {     
        $id = $_GET['id_peminjaman'];     
        $result = $peminjaman -> getPeminjamanById($id);     
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
                if(isset($_GET['id_peminjaman'])){
                    echo "<b>Edit Data Peminjaman</b>";
                } else {
                    echo "<b>Tambah Data Peminjaman</b>";
                }
            ?>
        </div>
        <div class="card-body">
            <form action="" method="post" class="row g-3">
                <div class="input-group mb-3">
                    <label for="idMember" class="input-group-text">ID Member</label>
                    <select id="idMember" name="idMember" class="form-select" required>
                        <?php 
                            while($nama = mysqli_fetch_assoc($member))
                            {
                        ?>
                            <option value="<?php echo $nama['id_member'];?>" <?php if(isset($_GET['id_peminjaman'])) { if($nama['id_member']==$baris[0]['id_member']) echo "selected";  }?> > <?php echo $nama['id_member']; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="idBuku" class="input-group-text">ID Buku</label>
                    <select id="idBuku" name="idBuku" class="form-select" required">
                        <?php 
                            while($judul = mysqli_fetch_assoc($buku))
                            {
                        ?>
                            <option value="<?php echo $judul['id_buku']; ?>" <?php if (isset($_GET['id_peminjaman'])) { if($judul['id_buku']==$baris[0]['id_buku'])echo "selected"; }?> > <?php echo $judul['id_buku']; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="tglPinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tglPinjam" name="tglPinjam" <?php echo (isset($_GET['id_peminjaman'])) ? "value='".$baris[0]["tgl_pinjam"]."'" : "value = ''"; ?> required>
                </div>
                <div class="col-md-12">
                    <label for="tglKembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tglKembali" name="tglKembali" <?php echo (isset($_GET['id_peminjaman'])) ? "value='".$baris[0]["tgl_kembali"]."'" : "value = ''"; ?> required>
                </div>
            <div class="col-auto">
                <table>
                    <tr>
                <?php 
                    echo "<ul class='left'>";
                    echo '<td><a class="btn btn-danger" href="Peminjaman.php" role="button"><i class="fa-solid fa-arrow-left"></i> Kembali</a></td>';
                    echo "</ul>";
                    if(isset($_GET['id_peminjaman'])){
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
                $id_member = $_POST['idMember'];
                $id_buku = $_POST['idBuku'];
                $tgl_pinjam = $_POST['tglPinjam'];
                $tgl_kembali = $_POST['tglKembali'];

                $peminjaman -> setPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
                header("Location: Peminjaman.php");
            }

            if(isset($_POST['update'])){
                $id_member = $_POST['idMember'];
                $id_buku = $_POST['idBuku'];
                $tgl_pinjam = $_POST['tglPinjam'];
                $tgl_kembali = $_POST['tglKembali'];

                $peminjaman -> editPeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
                header("Location: Peminjaman.php");
            }
        ?>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>