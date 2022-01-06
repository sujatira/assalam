  <div class="container">
    <h2>Pemasukan Kas</h2>
    <div class="row">
      <div class="col-md-8">
        <div class="card card-body bg-white">
          <!-- <h5 class="card-header bg-primary text-white">Form pengajuan pengeluaran kas Masjid Jami Assalam</h5> -->
          <div class="card-body">
            <form action="<?= base_url('bendahara/pemasukan_kas') ?>" method="POST" class="user" enctype="multipart/form-data">
              <div class="input-group input-group-sm mb-3 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nama </span>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <small class="text-left text-danger"><?= form_error('keperluan') ?></small>
              <div class="input-group input-group-sm mb-3 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nominal (Rp)</span>
                </div>
                <input id="jumlah" name="jumlah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <small class="text-left text-danger"><?= form_error('jumlah') ?></small>

              <div class="input-group input-group-sm mb-3  form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Keterangan</span>
                </div>
                <textarea id="keterangan" name="keterangan" class="form-control" aria-label="With textarea"></textarea>
              </div>
              <small class="text-left text-danger"><?= form_error('keterangan') ?></small>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Bukti</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                </div>
              </div>

              <div class="input-group input-group-sm mb-3 form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Tanggal</span>
                </div>
                <input id="tanggal" name="tanggal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly value="<?= date('d F Y') ?>">
              </div>
              <button href="<?= base_url('Bendahara') ?>" class="btn btn-primary btn-sm" type="submit"> <i class="fas fa-check"></i> Simpan</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="https://cdn-icons-png.flaticon.com/512/3163/3163238.png" class="img-fluid" width="400px" alt="">
      </div>
    </div>
  </div>