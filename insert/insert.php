<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="../product.php">Product</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../product.php">Home</a>
          <a class="nav-link" href="insert.php">Insert</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1>Halaman Insert Product</h1>
    <form action="aksi.php" method="POST">
        <label for="no_pesanan">No Pesanan:</label>
        <input type="text" name="no_pesanan" id="no_pesanan" required><br><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label for="nm_supplier">Nama Supplier:</label>
        <input type="text" name="nm_supplier" id="nm_supplier" required><br><br>

        <label for="nm_produk">Nama Produk:</label>
        <input type="text" name="nm_produk" id="nm_produk" required><br><br>

        <label for="total">Total:</label>
        <input type="float" name="total" id="total" required><br><br>

        <input type="submit" value="Simpan">
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>