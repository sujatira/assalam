<div class="container mt-3 shadow">
  <div class="row border-bottom mb-2">
    <div class="col-sm-3">
      <div class="bg-light p-3 mb-1">
        <h4 class="fst-italic">Artikel lainnya</h4>
        <p class="mb-1">Berikut beberapa artikel yang mungkin anda cari.</p>
        <?php
        foreach ($artikel as $ar) : ?>
          <div class="">
            <?php if ($ar['status'] == 1) {  ?>
              <a href="<?= base_url('artikel/artikel_detail/' . $ar['id_artikel']) ?>"><img src="<?= base_url('assets/images/thumbnails/' . $ar['tmb']) ?>" class="img-thumbnail mb-3" alt="" title="<?= $ar['judul'] ?>" class="img-fluid"></a>
            <?php } ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>