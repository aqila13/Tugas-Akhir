<?php
include '../aset/header.php';

?>

<div class="container">
    <div class="row mt-4">
    <div class="col-md">
    <div class="card">
    <div class="card-header">

<form action="check2.php"method="post">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
  </div>

  <div class="form-group">
    <label for="umur">Umur</label>
    <input type="number" class="form-control" name="umur" placeholder="Umur" required>
  </div>

  <div class="form-group">
    <label for="sb">Suhu Badan</label>
    <input type="number" class="form-control" name="sb" placeholder="Suhu Badan" required>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
  </div>

  <div class="form-group">
    <label for="Keadaan_Fisik">Keadaan Fisik</label>
    <input type="text" class="form-control" name="Keadaan_Fisik" placeholder="Baik/Pusing/Sesak nafas/Badan lemas?" required>
  </div>

  <center><button type="submit" class="btn-primary" name="simpan">Simpan</button>
</form>

</div>
</div>
</div>
</div>
</div>

<?php
include '../aset/footer.php';
?>

