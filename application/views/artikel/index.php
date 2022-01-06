<!-- Carousel Slides -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/images/img1.jpg') ?>" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Sholat Berjamaah</h3>
                <p>Gerakan Sholat berjamaah lima waktu di Masjid</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/images/img2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/images/img3.jpg') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
</div> -->
<div class="container shadow mt-3">
    <h1 class="text-center">Halaman Utama Artikel</h1>
    <div class="row row-cols-1 row-cols-md-3">
        <?php
        foreach ($approved as $ap) : ?>
            <div class="col mb-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <a href="<?= base_url('artikel/artikel_detail/' . $ap->id_artikel) ?>">
                        <img src=" <?= base_url('assets/images/thumbnails/' . $ap->tmb) ?>" class="card-img-top" width="340px" height="210px" alt="">
                    </a>
                    <a class="text-dark text-lg-center" href="<?= base_url('artikel/artikel_detail/' . $ap->id_artikel) ?>"><?= $ap->judul; ?></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>