  <!-- Begin Page Content -->
  <div class="card-bodyz">
    <div class="card">
      <h5 class="card-header bg-primary text-white">Tabel artikel Masjid Jami Assalam</h5>
      <div class="card-body">
        <div class="table-responsive">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
          <a href="<?= base_url('menu/tambah') ?>" class="btn btn-primary mb-3 btn-sm"><i class="fas fa-file-medical mr-1"></i>Tambah artikel baru</a>
          <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Oleh</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($artikel as $a) : ?>
                <tr>
                  <td class="text-center"><?= $i++ ?></td>
                  <td>
                    <span class="d-inline-block text-truncate" style="max-width: 170px;">
                      <?= $a['judul']; ?>
                    </span>
                  </td>
                  <td class="text-center"> <?php if ($a['status'] == 1) { ?>
                      <span class="badge badge-primary">Di Izinkan</span>
                    <?php } else if ($a['status'] == 2) { ?>
                      <span class="badge badge-danger">Di Tolak</span>
                    <?php } else { ?>
                      <span class="badge badge-warning text-dark">Menunggu</span>
                    <?php } ?>
                  </td>
                  <td class="text-center"><?= date('d M Y', $a['tanggal']); ?></td>
                  <td class="text-center"><?= $this->User_model->getUserId($a['id_user'])->nama; ?></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="<?= base_url('menu/hapus_artikel/' . $a['id_artikel']); ?>" id="btn-hapus" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
  <!-- Modal hapus artikel -->
  <div class="modal fade" tabindex="-1" id="modalHapus" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Artikel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Yakin ingin menghapus artikel ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-danger"><a href="<?= base_url('menu/hapus_artikel/' . $a['id_artikel']); ?>">Hapus</a></button>
        </div>
      </div>
    </div>
  </div>