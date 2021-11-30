<div id="wrapper">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bergabung</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $date = ['date_create'];
                foreach ($user as $u) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <th><?= $u['nama']; ?></th>
                        <th><?= $u['email']; ?></th>
                        <th><?= date('d F Y', $u['date_create']); ?></th>
                        <th><?= $u['sebagai']; ?></th>
                        <th>
                            <a href="" class="badge badge-danger">Hapus</a>
                            <a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="badge badge-success">Detail</a>
                        </th>
                        <th> <img src="<?= base_url('assets/images/profile/') . $u['image'] ?> " width="75px" height="75px"> </th>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



        <!-- <table class="tbl tbl-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bergabung</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $i = 1;
                    foreach ($user as $u) : ?>
                        <th><?= $i++ ?></th>
                        <th><?= $u['nama']; ?></th>
                        <th><?= $u['email']; ?></th>
                        <th>x</th>
                        <th>x</th>
                        <th>x</th>
                        <th>x</th>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table> -->
    </div>
</div>
<!-- End of Main Content -->
</div>