<?php 
    require "Koneksi.php";
    require "Model.php";

    $peminjaman = new Model();
    $result = $peminjaman -> getPeminjaman();

    if(isset($_GET['id_peminjaman'])){
        $id = $_GET['id_peminjaman'];
        $peminjaman = new Model();
        $peminjaman -> deletePeminjaman($id);
        header("Location: Peminjaman.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:Georgia, Geneva, Tahoma, sans-serif
        }
        h1 {
            border-bottom: 2px solid #BFCCB5;
            padding-bottom: 10px;
            text-align: center;
        }
        .margin{
            margin: 50px 5%;
        }
        .table{
            text-align: center;
        }
    </style>
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="margin">
    <h1>Peminjaman Buku</h1>

    <div class="card">
    <div class="card-header bg-primary text-white"><center><h3>Daftar Peminjaman</h3></center></div>
    <div class="card-body">
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
    <?php 
        $no = 1;
        while($baris = mysqli_fetch_assoc($result))
        {
    ?>
        <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $baris['id_peminjaman']; ?></td>
            <td><?php echo $baris['id_member']; ?></td>
            <td><?php echo $baris['id_buku']; ?></td>
            <td><?php echo $baris['tgl_pinjam']; ?></td>
            <td><?php echo $baris['tgl_kembali']; ?></td>
            <td>
                <a href='FormPeminjaman.php?id_peminjaman=<?=$baris['id_peminjaman'];  ?>' class='btn btn-warning'><i class="fa-solid fa-pen"></i> Edit</a>&nbsp;
                <a href='javascript:confirmDelete("Peminjaman.php?id_peminjaman=<?=$baris['id_peminjaman'];  ?>")' class='btn btn-danger'><i class="fa-solid fa-trash-can"></i> Hapus</a>
            </td>
        </tr>
    <?php 
        }
    ?>
        </tbody>
    </table>
    <a class="btn btn-success" href="/phpdasar/Praktikum%20Web%20II/Praktikum5" role="button"><i class="fa-solid fa-house"></i> Beranda</a>
    <a class="btn btn-primary" href="FormPeminjaman.php" role="button"><i class="fa-solid fa-square-plus"></i> Tambah Data</a>
    </div>
    </div>
    </div>
    <script>
        function confirmDelete(url){
            if(confirm("Apakah Anda yakin ingin menghapus data ini?")){
                window.location.href = url;
            }
        }
    </script>
</body>
</html>