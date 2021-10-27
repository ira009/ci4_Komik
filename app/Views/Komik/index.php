<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
          <h2 class="mt-2">Daftar Komik</h2>
          <a href="/komik/create" class="btn btn-primary mb-3">Tambah Data Komik</a>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?= $i = 1; ?>
      <?php foreach ($komik as $k) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
      
      <td><?= $k['judul']; ?></td>
      <td>
          <a href="/komik/<?= $k['slug']; ?>" class="btn btn-info">Detail</a>
      </td>
    </tr>
        <?php endforeach; ?>
  </tbody>
</table>

        </div>
    </div>
</div>
<?= $this->endsection(); ?>
