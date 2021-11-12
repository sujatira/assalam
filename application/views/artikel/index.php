<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($approved as $ap) : ?>
            <div class="col mb-4 mt-4">
                <div class="card">
                    <img src="./assets/images/img1.jpg" alt="">
                    <a href=""><?= $ap->judul; ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>