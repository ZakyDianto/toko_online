<?php
session_start();
include "koneksi.php";

$cart = @$_SESSION['cart'];
if (count($cart) > 0) {
    // Insert into transaksi table (ensure the correct order of values)
    mysqli_query($conn, "INSERT INTO transaksi (id_pelanggan, tgl_transaksi) 
    VALUES ('".$_SESSION['id_pelanggan']."', '".date('Y-m-d')."')");

    // Get the last inserted transaction ID
    $id = mysqli_insert_id($conn);

    foreach ($cart as $key_produk => $val_produk) {
        // Calculate subtotal for each product (harga * qty)
        $subtotal = $val_produk['harga'] * $val_produk['qty'];

        // Insert into detail_peminjaman_buku (Ensure table and column names are correct)
        mysqli_query($conn, "INSERT INTO detail_peminjaman_buku (id_transaksi, id_produk, qty, subtotal)
        VALUES ('".$id."', '".$val_produk['id_produk']."', '".$val_produk['qty']."', '".$subtotal."')");
    }

    // Clear the cart session
    unset($_SESSION['cart']);
    echo '<script>alert("Terimakasih sudah membeli");location.href="histori.php"</script>';
}
?>
