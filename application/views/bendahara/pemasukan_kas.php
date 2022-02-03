<div class="row">
  <div class="col-md-8">
    <div class="card-body card-shadow" style="max-width: 700px;">
      <div class="card bg-white">
        <h5 class="card-header bg-primary text-white">Form pemasukan kas Masjid Jami Assalam</h5>
        <div class="card-body">
          <form action="<?= base_url('bendahara/tambah_pemasukan') ?>" method="POST" class="user" enctype="multipart/form-data">
            <div class="input-group input-group-sm mb-3 form-group">
              <div class="input-group">
                <label class="input-group">Nama</label>
                <small class="text-left text-danger"><?= form_error('nama') ?></small>
              </div>
              <input id="nama" name="nama" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <small class="text-left text-danger"><?= form_error('keperluan') ?></small>
            <div class="input-group input-group-sm mb-3 form-group">
              <div class="input-group">
                <label class="input-group">Nominal (Rp)</label>
                <small class="text-left text-danger"><?= form_error('nominal') ?></small>
              </div>
              <input id="nominal" name="nominal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3 form-group">
              <div class="input-group">
                <label class="input-group">Kategori pemasukan</label>
                <small class="text-left text-danger"><?= form_error('kategori') ?></small>
              </div>
              <select class="custom-select" name="kategori" id="kategori">
                <option value="">Pilih</option>
                <option value="Dari kotak amal">Dari kotak amal</option>
                <option value="Dari kotak parkit">Dari kotak parkir</option>
                <option value="Dari jemaah">Dari jemaah</option>
              </select>
            </div>
            <div class="input-group input-group-sm mb-3  form-group">
              <div class="input-group">
                <label class="input-group">Keterangan</label>
                <small class="text-left text-danger"><?= form_error('keterangan') ?></small>
              </div>
              <textarea id="keterangan" name="keterangan" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <!-- <div class="input-group input-group-sm mb-3">
              <div class="input-group">
                <label class="input-group" id="inputGroupFileAddon01">Bukti</label>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
              </div>
            </div> -->
            <div class="input-group mb-3 form-group">
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
  </div>
  <div class="col-md-4">
    <img src="https://cdn-icons-png.flaticon.com/512/2329/2329083.png" class="img-fluid" width="400px" alt="">
  </div>
</div>