  <!-- Begin Page Content -->
  <!-- Page Heading -->
  <div class="card-body card-shadow">
    <h2 class="h3 mb-3 text-gray-800"><?= $judul; ?></h2>
    <div class="card">
      <h5 class="card-header bg-primary text-white">Tabel artikel Masjid Jami Assalam</h5>
      <div class="card-body">
        <div class="table-responsive">
          <?= $this->session->flashdata('hapus');  ?>
          <?= $this->session->flashdata('pesan');  ?>
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
                  <td class="col-4 text-truncate"><?= $a['judul']; ?>
                  <td class="text-center"> <?php if ($a['status'] == 1) { ?>
                      <span class="badge badge-primary">Di Izinkan</span>
                    <?php } else if ($a['status'] == 2) { ?>
                      <span class="badge badge-danger">Di Tolak</span>
                    <?php } else { ?>
                      <span class="badge badge-warning text-dark">Menunggu</span>
                    <?php } ?>
                  </td>
                  <td class="text-center"><?= date('d F Y', $a['tanggal']); ?></td>
                  <td><?= $this->User_model->getUserId($a['id_user'])->nama; ?></td>
                  <td class="text-center">
                    <?php if ($tbl_user['role_id'] == 1) { ?>
                      <a data-target="#modalHapus" data-toggle="modal" type="button" href="<?= base_url('menu/hapus_artikel/' . $a['id_artikel']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                      <a href="#" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <?php } else if ($this->User_model->getUserId($a['id_user'])->id_user) { ?>
                      <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                    <?php } ?>
                    <a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
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
          <a type="button" class="btn btn-danger" href="<?= base_url('menu/hapus_artikel/' . $a['id_artikel']) ?>">Ya hapus</a>
        </div>
      </div>
    </div>
  </div>