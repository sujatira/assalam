<!-- Carousel Slides -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/images/img1.jpg') ?>" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Sholat Berjamaah</h3>
        <p>Gerakan Sholat berjamaah lima waktu di Masjid</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/images/img2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/images/img3.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div> -->

<body style="background-image: url('https://www.sirclo.com/file/2019/01/Ayo-Meraup-Keuntungan-Besar-di-Bulan-Ramadhan-Dengan-5-Cara-Ampuh-Ini.jpg'); background-position: center; background-size: cover;">
  <div class="container container-fluid">
    <div class="row mt-2">
      <div class="col-md-5">
        <div class="card">
          <h5 class="card-header bg-dark text-white"><i class="fas fa-fw fa-calendar-check"></i> Jadwal kajian mingguan</h5>
          <div class="card-body bg-white">
            <div class="table-responsive">
              <h6>Jadwal kajian ibu-ibu</h6>
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Hari</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Tempat</th>
                  </tr>
                <tbody>
                  <tr>
                    <td>Senin</td>
                    <td>14:00 WIB</td>
                    <td>15:20 WIB</td>
                    <td>Masjid Jami Assalam</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
            <h6>Jadwal kajian bapak-bapak</h6>
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Tempat</th>
                </tr>
              <tbody>
                <tr>
                  <td>Sabtu</td>
                  <td>18:00 WIB</td>
                  <td>19:00 WIB</td>
                  <td>Masjid Jami Assalam</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <h5 class="card-header bg-dark text-white"><i class="fas fa-fw fa-info-circle"></i> Informasi kas</h5>
          <div class="card-body bg-white">
            <div class="table-responsive">
              <table class="table table-striped table-sm" id="dataTable">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Tanggal</th>
                  </tr>
                <tbody>
                  <?php $i = 1;
                  foreach ($infaq as $ifq) : ?>
                    <tr>
                      <td class="text-center"><?= $i++; ?></td>
                      <td><?= $ifq['nama']; ?></td>
                      <td class="text-center">Rp. <?= number_format($ifq['nominal']); ?></td>
                      <td class="text-center"><?= $ifq['tanggal']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>