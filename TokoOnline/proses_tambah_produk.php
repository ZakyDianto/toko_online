<?php
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$foto_produk = basename($_FILES["foto"]["name"]);
$target_dir = "foto_produk/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));        
if(empty($nama_produk)){
    echo "<script>alert('Nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
}
elseif(empty($deskripsi)){
    echo "<script>alert('Deskripsi produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
}  
elseif(empty($foto_produk)){
    echo "<script>alert('Foto produk tidak boleh kosong');location.href='tambah_produk.php';</script>";     
}

?>