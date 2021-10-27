<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Komik</h2>
            <form action="/komik/save" method="post">
            <?= csrf_field(); ?>
  <div class="row mb-3">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('judul')) ?
      'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
      
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('judul'); ?>
        </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('penulis')) ?
      'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('penulis'); ?>
        </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ?
      'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('penerbit'); ?>
        </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('sampul')) ?
      'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?= $validation->getError('sampul'); ?>
        </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</Datag></button>
</form>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>