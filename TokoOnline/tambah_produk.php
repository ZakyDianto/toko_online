<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-body">
  <div class="row">
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h3>Tambah Produk</h3>
          <form class="requires-validation" novalidate action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">

            <div class="col-md-12">
              <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk" required>
              <div class="valid-feedback">Nama field is valid!</div>
              <div class="invalid-feedback">Nama field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" required>
              <div class="valid-feedback">Deskripsi field is valid!</div>
              <div class="invalid-feedback">Deskripsi field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="harga" placeholder="Harga" required>
              <div class="valid-feedback">Harga field is valid!</div>
              <div class="invalid-feedback">Harga field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="file" name="foto_produk" placeholder="Foto Produk" required>
              <div class="valid-feedback">Harga field is valid!</div>
              <div class="invalid-feedback">Harga field cannot be blank!</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">Tambah Produk</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
    </form>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>
