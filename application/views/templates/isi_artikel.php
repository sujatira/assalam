<div class="row g-5">
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Dari Masjid Jami Assalam untuk jemaah
        </h3>

        <article class="blog-post">
            <h2 class="blog-post-title"> <?= $userartikel->judul; ?></h2>
            <caption class="blog-post-meta caption-top"> Di post pada tanggal <?= $userartikel->tanggal ?></caption>
            <p><?= $userartikel->isi ?></p>
            <?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>
                <img src="<?= base_url('assets/images/' . $aa->gambar) ?>" alt="" width="330px" height="200px" class="mb-1">
            <?php endforeach ?>
            <h3>Tabel infak</h3>
            <div>
                <table class="table table-info table-striped">
                    <caption class="bi bi-list-check caption-top"> Daftar donatur Infak Masjid Jami Assalam</caption>
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
        </article>
    </div>
    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2021</a></li>
                    <li><a href="#">February 2021</a></li>
                    <li><a href="#">January 2021</a></li>
                    <li><a href="#">December 2020</a></li>
                    <li><a href="#">November 2020</a></li>
                    <li><a href="#">October 2020</a></li>
                    <li><a href="#">September 2020</a></li>
                    <li><a href="#">August 2020</a></li>
                    <li><a href="#">July 2020</a></li>
                    <li><a href="#">June 2020</a></li>
                    <li><a href="#">May 2020</a></li>
                    <li><a href="#">April 2020</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>