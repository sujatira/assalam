<!-- Carousel Slides -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Sholat Berjamaah</h3>
        <p>Gerakan Sholat berjamaah lima waktu di Masjid</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- Laporan Data Infaq -->
<div class="container">
  <div>
    <table class="table table-info table-striped">
      <caption class="bi bi-list-check caption-top"> Daftar donatur Infaq Masjid Jami Assalam</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Nominal</th>
          <th>Tanggal</th>
        </tr>
      <tbody>
        <?php $i = 1;
        foreach ($infaq as $ifq) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $ifq['nama']; ?></td>
            <td>Rp. <?= number_format($ifq['nominal']); ?></td>
            <td><?= $ifq['tanggal']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      </thead>
    </table>
  </div>
</div>