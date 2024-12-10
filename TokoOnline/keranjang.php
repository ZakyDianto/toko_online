<?php 
    include "header.php";
?>
<h2>Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Produk</th><th>Jumlah</th><th>Harga Satuan</th><th>Total Harga</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total_bayar = 0; // Initialize total cost
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk):
            $total_harga = $val_produk['harga'] * $val_produk['qty']; // Calculate total for each product
            $total_bayar += $total_harga; // Accumulate total for all products  
        ?>
        <tr>
            <td><?=($key_produk + 1)?></td>
            <td><?=$val_produk['nama_produk']?></td>
            <td><?=$val_produk['qty']?></td>
            <td>Rp<?=number_format($val_produk['harga'], 2)?></td> <!-- Display unit price -->
            <td>Rp<?=number_format($total_harga, 2)?></td> <!-- Display total price per product -->
            <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3 align="right">Total Bayar: Rp<?=number_format($total_bayar, 2)?></h3> <!-- Display total for all products -->

<a href="checkout.php" class="btn btn-primary">Check Out</a>

<?php 
    include "footer.php";
?>
