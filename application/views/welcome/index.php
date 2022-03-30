<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Assalamu'alaikum, Selamat Datang di..</h1>
        <h2>Sistem Informasi Masjid Jami Assalam</h2>
        <span class="text-light">Punya informasi menarik seputar Masjid Jami Assalam? Ayo bagikan sekarang dan bergabung bersama kami.</span>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="<?= base_url('auth') ?>" class="btn-get-started scrollto">Gabung Sekarang</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://www.pngall.com/wp-content/uploads/4/Mosque-PNG-Download-Image.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>


</section><!-- End Hero -->

<main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <marquee behavior="" direction="" class="font-italic">
          <h4 class="font-italic">Pengurus Masjid Jami Assalam, memperbolehkan sholat tarawih berjamaah di bulan Ramadan 2022, dengan tetap menerapkan dan meperhatikan protokol kesehatan! Terimakasih.</h4>
        </marquee>
        <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div> -->

      </div>

    </div>
  </section><!-- End Cliens Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kajian dan Info Kas</h2>
      </div>

      <div class="row content shadow-lg">
        <div class="col-lg-6">
          <h4>
            Berikut adalah jadwal kajian
          </h4>
          <div class="card p-2 mb-2">
            <div class="table-responsive">
              <h6>Jadwal kajian ibu-ibu</h6>
              <table class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>Hari</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Tempat</th>
                  </tr>
                <tbody>
                  <tr>
                    <td>Senin</td>
                    <td>14:00 WIB</td>
                    <td>15:20 WIB</td>
                    <td>Masjid Jami Assalam</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <br>
            <h6>Jadwal kajian bapak-bapak</h6>
            <table class="table table-bordered table-striped table-sm">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Tempat</th>
                </tr>
              <tbody>
                <tr>
                  <td>Sabtu</td>
                  <td>18:20 WIB</td>
                  <td>19:00 WIB</td>
                  <td>Masjid Jami Assalam</td>
                </tr>
              </tbody>
            </table>
            <br>
            <h6>Jadwal kajian pemuda</h6>
            <table class="table table-bordered table-striped table-sm">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Tempat</th>
                </tr>
              <tbody>
                <tr>
                  <td>Ahad</td>
                  <td>18:20 WIB</td>
                  <td>19:00 WIB</td>
                  <td>Masjid Jami Assalam</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0">
          <h4>
            Laporan Pemasukan Kas </h4>

          <div class="card p-2">
            <table class="table table-striped table-bordered table-sm" id="dataTable">
              <thead class="text-center">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nominal</th>
                  <th>Tanggal</th>
                </tr>
              <tbody>
                <?php $i = 1;
                foreach ($infaq as $ifq) : ?>
                  <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td><?= $ifq['nama']; ?></td>
                    <td class="text-center">Rp. <?= number_format($ifq['nominal']); ?></td>
                    <td class="text-center"><?= $ifq['tanggal']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              </thead>
            </table>
          </div>
        </div>
        <div class="p-3">
          <a href="<?= base_url('welcome/informasi') ?>" class="btn-learn-more">Informasi Selengkapnya</a>
        </div>
      </div>
    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="row">

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Artikel</h2>
        <p>Berikut adalah beberapa artikel dan informasi kegiatan mengenai masjid jami assalam</p>
      </div>

      <div class="row">

        <?php

        foreach ($approved as $ar) :

        ?>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-1" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h6><a href="<?= base_url('welcome/artikel_detail/' . $ar->id_artikel) ?>"><?= $ar->judul ?></a></h6>
              <img class="img-fluid img-thumbnail" src="<?= base_url('assets/images/thumbnails/' . $ar->tmb) ?>" alt="ini gambar thumbainls artikel">
              <!-- <p>Duis aute irure dolor in reprehenderaboutit in voluptate velit esse cillum dolore</p> -->
            </div>
          </div>

        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Cta Section ======= -->
  <!-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section> -->
  <!-- End Cta Section -->


  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="https://scontent-sin6-2.xx.fbcdn.net/v/t31.18172-8/14249752_509708805901271_6224481714142834192_o.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeHHG4G9mneNSxUaMa_M38KdfgEfy3Em9gh-AR_LcSb2CD81x-7fjVOmp2Dp46spEC_F02Z3WVrdTkZqLwnqiE-M&_nc_ohc=QztUjxjiEt0AX_AVx9B&_nc_ht=scontent-sin6-2.xx&oh=00_AT96jBoOuQrbE6VFJSIYkxq4X_w2fCXhnFQOKc6OaDB82Q&oe=6268248E" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Andi Sujati Rahman</h4>
              <span>Web Programmer</span>
              <p>Ke istimewaan secangkir kopi pahit bisa membuat jari-jemari mengeluarkan magic kodingan :v</p>
              <div class="social">
                <a href="https://www.twitter.com/sujatira/"><i class="ri-twitter-fill"></i></a>
                <a href="https://www.facebook.com/sujatira/"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/sujatira/"><i class="ri-instagram-fill"></i></a>
                <a href="https://www.github.com/sujatira/"><i class="ri-github-fill"></i></a>

                <!-- <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="<?= base_url('assets/images/profile/default.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>H. Odang Masdar</h4>
              <span>Ketua DKM Jami Assalam. 2020 - <?= date('Y'); ?></span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <!-- <a href=""><i class="ri-twitter-fill"></i></a> -->
                <a href="https://www.facebook.com/odang.masdar"><i class="ri-facebook-fill"></i></a>
                <!-- <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Bojongrangkas, Rancakasumba</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>masjid-jami-assalam@42web.io</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 8572 0589 526</p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div class="info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1979.999021062174!2d107.72203765872192!3d-7.009512000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0f1c4830120e482!2sMasjid%20Jami%20Assalam!5e0!3m2!1sid!2sid!4v1648626578937!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->