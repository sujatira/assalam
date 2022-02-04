  <!-- Begin Page Content -->
  <div class="container-fluid bg-light">
    <div class="card">
      <h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel artikel Masjid Jami Assalam</h5>
      <div class="card-body bg-white">
        <div class="table-responsive">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
          <a href="<?= base_url('menu/tambah') ?>" class="btn btn-primary mb-3 btn-sm"><i class="fas fa-fw fa-file-medical mr-1"></i>Tambah artikel baru</a>
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
                      <span class="badge badge-primary">Diizinkan</span>
                    <?php } else if ($a['status'] == 2) { ?>
                      <span class="badge badge-danger">Ditolak</span>
                    <?php } else { ?>
                      <span class="badge badge-warning text-dark">Menunggu</span>
                    <?php } ?>
                  </td>
                  <td class="text-center"><?= date('d M Y', $a['tanggal']); ?></td>
                  <td class="text-center"><?= $this->User_model->getUserId($a['id_user'])->nama; ?></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-success btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-eye"></i></a>
                    <a href="<?= base_url('menu/hapus_artikel/' . $a['id_artikel']); ?>" id="btn-hapus" class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-fw fa-trash"></i></a>
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