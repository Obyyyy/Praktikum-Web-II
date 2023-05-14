<?php 
    require "Koneksi.php";
    require "Model.php";

    $member = new Model();
    $result = $member -> getMember();

    if(isset($_GET['id_member'])){
        $id = $_GET['id_member'];
        $member = new Model();
        $member -> deleteMember($id);
        header("Location: Member.php");
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
            margin: 50px 2%;
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
    <div class="card-header bg-primary text-white"><center><h3>Daftar Member</h3></center></div>
    <div class="card-body">
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Terakhir Bayar</th>
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
            <td><?php echo $baris['id_member']; ?></td>
            <td><?php echo $baris['nama_member']; ?></td>
            <td><?php echo $baris['nomor_member']; ?></td>
            <td><?php echo $baris['alamat']; ?></td>
            <td><?php echo $baris['tgl_mendaftar']; ?></td>
            <td><?php echo $baris['tgl_terakhir_bayar']; ?></td>
            <td>
                <a href='FormMember.php?id_member=<?=$baris['id_member'];  ?>' class='btn btn-warning'><i class="fa-solid fa-pen"></i> Edit</a>&nbsp;
                <a href='javascript:confirmDelete("Member.php?id_member=<?=$baris['id_member'];  ?>")' class='btn btn-danger'><i class="fa-solid fa-trash-can"></i> Hapus</a>
            </td>
        </tr>
    <?php 
        }
    ?>
        </tbody>
    </table>
    <a class="btn btn-success" href="/phpdasar/Praktikum%20Web%20II/Praktikum5" role="button"><i class="fa-solid fa-house"></i> Beranda</a>
    <a class="btn btn-primary" href="FormMember.php" role="button"><i class="fa-solid fa-square-plus"></i> Tambah Data</a>
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