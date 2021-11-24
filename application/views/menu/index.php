<div id="wrapper">
  <!-- Begin Page Content -->
  <!-- Page Heading -->
  <div class="col-md-12">
    <div class="row">
      <div class="card-body card-shadow">
        <h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>

        <?= $this->session->flashdata('pesan');  ?>

        <a href="<?= base_url('menu/tambah') ?>" class="btn btn-primary mb-3"><i class="fas fa-file-medical mr-1"></i>Tambah Artikel</a>
        <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
          <thead>
            <tr>

              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Status</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Oleh</th>
              <!-- <?php if ($this->session->userdata('role_id' == 1)) { ?>
                <th scope="col">#</th>
              <?php } else { ?> -->
              <th scope="col">Aksi</th>
              <!-- <?php } ?> -->


            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($artikel as $a) : ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $a['judul']; ?></th>
                <td> <?php if ($a['status'] == 1) { ?>
                    <span class="badge badge-success">Di Izinkan</span>
                  <?php } else if ($a['status'] == 2) { ?>
                    <span class="badge badge-danger">Di Tolak</span>
                  <?php } else { ?>
                    <span class="badge badge-warning text-dark"> Pending </span>
                  <?php } ?>
                </td>
                <td><?= $a['tanggal']; ?></td>
                <td><?= $this->User_model->getUserId($a['id_user'])->nama; ?></td>
                <td>
                  <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <a href="#" class="badge badge-danger">hapus</a>
                    <a href="#" class="badge badge-warning text-dark">edit</a>
                  <?php } else if ($this->Artikel_model->getSawareh($a['id_user'])) { ?>
                    <a href="#" class="badge badge-danger">haapus</a>

                  <?php } ?>
                  <a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="badge badge-success text-white">details</a>





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

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Tambah Artikel Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/posartikel') ?>" method="POST" class="user">
        <div class="modal-body">
          <div class="form-group">
            <label for="formGroupExampleInput">Judul Artikel</label>
            <input type="text" class="form-control mb-3" id="judul" name="judul" placeholder="Masukan judul artikel">
            <label for="exampleFormControlTextarea3">Isi Artikel</label>
            <textarea class="form-control mb-3" id="isi" name="isi" rows="7"></textarea>
            <div class="mb-3">
              <label for="exampleFormControlTextarea3">Tambahkan Gambar</label>
              <input class="form-control mb-1" type="file" id="file1" name="file1">
              <input class="form-control mb-1" type="file" id="file2" name="file2">
              <input class="form-control mb-1" type="file" id="file3" name="file3">
              <input class="form-control mb-1" type="file" id="file4" name="file4">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>