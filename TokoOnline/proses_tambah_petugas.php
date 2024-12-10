<?php
if ($_POST) {
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    if(empty($nama_petugas)){
        echo "<script>alert('Username petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    }
    else{
        include "koneksi.php";
        $insert=mysqli_query($conn, "INSERT INTO petugas (nama_petugas, username, password, level) VALUE ('".$nama_petugas."', '".$username."', '".md5($password)."', '".$level."')") or die(mysqli_error($conn));
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='home.php';</script>";
        }
        else{
            echo "<script>alert('Gagal menambahkan pegawai');location.href='home.php';</script>";
        }

        }
    }
?>