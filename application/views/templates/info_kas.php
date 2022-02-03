<div class="row">
  <div class="col-sm-8">
    <div class="card">
      <h6 class="card-header text-white" style="background-color: darkslategrey;">Tabel Infak</h1>
        <div class="card-body">
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
  <div class="col">
    <div class="card">
      <h6 class="card-header text-white" style="background-color: darkslategray;">Jadwal Sholat</h6>
      <div class="card-body">
        <p style="text-align: center;"><iframe scrolling="no" src="//time.wf/widget.php" width="100px" height="40px"></iframe>
          <br>
          <iframe scrolling="no" src="//jadwalsholat.org/adzan/ajax.row.php" frameborder="0" width="200px" height="200px"></iframe>
        </p>
      </div>
    </div>
    <hr>
    <div class="card">
      <h6 class="card-header text-white" style="background-color: darkslategrey;">Lokasi</h6>
      <div class="card-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d494.99968770691095!2d107.7230722!3d-7.0095756!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c17c3a787c91%3A0xa0f1c4830120e482!2sMasjid%20Jami%20Assalam!5e0!3m2!1sid!2sid!4v1640882625753!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>