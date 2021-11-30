    <?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>

        <div class="container">

            <img src="<?= base_url('assets/images/' . $aa->gambar) ?>" alt="">

        </div>

    <?php endforeach ?>