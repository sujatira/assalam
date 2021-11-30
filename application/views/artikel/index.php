<div class="container">
    <h1 class="text-center">Halaman Utama Artikel</h1>
    <div class="row row-cols-1 row-cols-md-3">
        <?php
        foreach ($approved as $ap) : ?>
            <div class="col mb-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src=" <?= base_url('assets/images/thumbnails/' . $ap->tmb) ?>" class="card-img-top" width="340px" height="210px" alt="">
                    <a class="text-dark text-lg-center" href="<?= base_url('artikel/artikel_detail/' . $ap->id_artikel) ?>"><?= $ap->judul; ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>