<?php 
    require "Koneksi.php";

    Class Model {
        // Fungsi Untuk Member

        //Menampilkan data member
        public function getMember()
        {
            $query = "SELECT * from member";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //menghapus data member
        public function deleteMember($id)
        {
            $query = "DELETE FROM member WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);         
            return $result;
        }
        //menambah data member
        public function setMember($nama, $nomor, $alamat, $tgl_terakhir_bayar){
            $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_terakhir_bayar) 
                        VALUES ('$nama', '$nomor', '$alamat', '$tgl_terakhir_bayar')";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //edit data member
        public function editMember($id, $nama, $nomor, $alamat, $tgl_terakhir_bayar){
            $query = "UPDATE member SET nama_member = '$nama', nomor_member = '$nomor', alamat = '$alamat', tgl_terakhir_bayar = '$tgl_terakhir_bayar'
                        WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //mendaptkan data member untuk diedit
        public function getMemberByID($id){
            $query = "SELECT * FROM member WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }

        //Fungsi - fungsi Untuk Buku

        //Menampilkan data buku
        public function getBuku()
        {
            $query = "SELECT * FROM buku";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //menambah data dari input di Form Buku
        public  function  setBuku($judul,  $penulis,  $penerbit, $tahunTerbit) 
        {         
            $query  =  "INSERT  INTO  buku  (judul_buku,  penulis, penerbit,  tahun_terbit)  VALUES  ('$judul',  '$penulis', '$penerbit', '$tahunTerbit')";         
            $result = mysqli_query($GLOBALS['koneksi'], $query);         
            return $result;
        }
        //menghapus data buku
        public function deleteBuku($id)     
        {         
            $query = "DELETE FROM buku WHERE id_buku = '$id'";  
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;     
        }
        //mengedit data buku
        public function editBuku($id, $judul,  $penulis,  $penerbit, $tahunTerbit)
        {
            $query = "UPDATE buku SET judul_buku = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahunTerbit' 
                        WHERE id_buku = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //mendapatkan data buku untuk diedit
        public function getBukuByID($id)
        {
            $query = "SELECT * FROM buku WHERE id_buku = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }

        //Fungsi - fungsi Untuk Peminjaman

        //Menampilkan data buku
        public function getPeminjaman()
        {
            $query = "SELECT * FROM peminjaman";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //menambah data dari input di Form Buku
        public  function  setPeminjaman($id_member,  $id_buku,  $tgl_peminjaman, $tgl_pengembalian) 
        {         
            $query  =  "INSERT  INTO  peminjaman  (id_member,  id_buku, tgl_pinjam,  tgl_kembali)  VALUES  ('$id_member',  '$id_buku', '$tgl_peminjaman', '$tgl_pengembalian')";         
            $result = mysqli_query($GLOBALS['koneksi'], $query);         
            return $result;
        }
        //menghapus data buku
        public function deletePeminjaman($id)     
        {         
            $query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id'";  
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;     
        }
        //mengedit data buku
        public function editPeminjaman($id ,$id_member,  $id_buku,  $tgl_peminjaman, $tgl_pengembalian)
        {
            $query = "UPDATE peminjaman SET id_member = '$id_member', id_buku = '$id_buku', tgl_pinjam = '$tgl_peminjaman', tgl_kembali = '$tgl_pengembalian' 
                        WHERE id_peminjaman = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
        //mendapatkan data buku untuk diedit
        public function getPeminjamanByID($id)
        {
            $query = "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $query);
            return $result;
        }
    }
?>