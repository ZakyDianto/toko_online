<?php 
    include "header.php";
?>
<h6>Selamat datang <?=$_SESSION['nama']?></h6>

<h4 align="center">PRODUK KAMI</h4>
    <div class="row">
        <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn, "SELECT * FROM produk");
    while ($dt_produk=mysqli_fetch_array($qry_buku)) {
        ?>
        <div class="col-md-3">
            <div class="card">
                <img src="foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top ">
                <div class="card-body">
                    <h5 class="card_title"><?=$dt_produk['nama_produk']?></h5>
                    <h6 class="card_title">Rp<?=number_format($dt_produk['harga'], 2)?></h6>
                    <p class="card_text"><?=substr($dt_produk['deskripsi'],0,500)?></p>
                    <a href="detail_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-dark">Tambah</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
<?php
    include "footer.php";
?>
