<?php
if ($_POST) {
    $nama_pelanggan = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username)) {
        echo "<script>alert('Semua data harus diisi');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO pelanggan (nama, alamat, telp, username, password) VALUES ('".$nama_pelanggan."', '".$alamat."', '".$telepon."',  '".$username."', '".md5($password)."')") or die(mysqli_error($conn));
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
