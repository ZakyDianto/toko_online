<?php
    include "header.php";
?>

<h2>Histori Pembelian</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Tanggal Pembelian</th>
        <th>Nama Produk</th>
        <th>Harga</th>
    </thead>

    <tbody>

    <?php
        include "koneksi.php";
        
    $qry_histori=mysqli_query($conn,"SELECT * FROM transaksi ORDER BY id_transaksi DESC");
    $no=0;
    while($dt_histori=mysqli_fetch_array($qry_histori)){
        $no++;
    
    //Produk yang dibeli
    $produk_dibeli="<ol>";
    
    $qry_produk=mysqli_query($conn,"SELECT * FROM  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");
    
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
    }

    $produk_dibeli.="</ol>";

}
?>
</tbody>
</table>
<?php
    include "footer.php";
?>