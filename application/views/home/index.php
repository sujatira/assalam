<!-- Carousel Slides -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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

</div>
<!-- akhir karusel -->


<!-- ada dua card -->
<!-- <div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Program Tanah Wakaf</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- akhir dua card -->

<!-- isi  halaman home -->
<div class="container">
  <div class="row mb-3 mt-3">
    <div class="col-lg-2 mb-3">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Light card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 mb-3">
      <h2>COL-LG-10</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque eaque nulla, quisquam doloremque aut optio tenetur dicta voluptatum aliquam odit velit, provident, ex labore sequi. Tempora ducimus excepturi error?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque eaque nulla, quisquam doloremque aut optio tenetur dicta voluptatum aliquam odit velit, provident, ex labore sequi. Tempora ducimus excepturi error?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque eaque nulla, quisquam doloremque aut optio tenetur dicta voluptatum aliquam odit velit, provident, ex labore sequi. Tempora ducimus excepturi error?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque eaque nulla, quisquam doloremque aut optio tenetur dicta voluptatum aliquam odit velit, provident, ex labore sequi. Tempora ducimus excepturi error?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et atque eaque nulla, quisquam doloremque aut optio tenetur dicta voluptatum aliquam odit velit, provident, ex labore sequi. Tempora ducimus excepturi error?</p>
    </div>
    <div class="col-lg-2 mb-3">
      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Light card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir isi halaman home -->
  <div class="row mb-3 g-5">
    <div class="col-md-8">
      <div class="card m-2">
        <h6 class="card-header">Tabel Infak</h1>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm" id="dataTable">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <?php $i = 1;
                foreach ($infaq as $if) : ?>
                  <tbody>
                    <td class="text-center"><?= $i++; ?></td>
                    <td><?= ($if['nama']) ?></td>
                    <td class="text-center">Rp. <?= number_format($if['nominal']) ?></td>
                    <td class="text-center"><?= $if['tanggal'] ?></td>
                  </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-light mb-3" style="max-width: 100%;">
        <div class="card-header">Info infak Masjid Jami Assalam</div>
        <div class="card-body text-dark">
          <h5 class="card-title">Total kas Masjid</h5>
          <h2>Rp. 350.000.000</h2>
        </div>
      </div>
      <div class="card border-light mb-3" style="max-width: 100%;">
        <div class="card-header">Info Rekening Masjid Jami Assalam</div>
        <div class="card-body text-dark">
          <h5 class="card-title">AN. Yayasan Masjid Jami Assalam</h5>
          <h2>23242424-2424-2-24</h2>
        </div>
      </div>
    </div>
  </div>
</div>