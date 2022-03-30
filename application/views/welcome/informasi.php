<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masjid Jami Assalam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/images/icon.png') ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?= base_url('style.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.12/dist/fancybox.css" rel="stylesheet" ?>


  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/arsha/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/vendor/arsha/assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <style type="text/css">
    @font-face {
      font-family: spark;
      src: url('Spark.oft');
    }
  </style>

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: #37517E;">
    <div class="container d-flex align-items-center">

      <h1 class="navnavan mt-2"><a class="text-white" href="<?= base_url('welcome') ?>">Jami Assalam</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?= base_url('welcome') ?>" class="logo me-auto"><img src="<?= base_url('assets/vendor/arsha/assets/img/logo.png') ?> " alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Kajian</a></li>
          <li><a class="nav-link scrollto" href="#services">Artikel</a></li>
          <!-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>

          <li class="dropdown "><a class="nav-link scrollto"><span>Tentang</span></a>
            <ul>
              <li><a href="#"><i class="fas fa-fw fa-mosque"></i> Masjid Jami Assalam</a></li>
              <li><a href=""><i class="fas fa-fw fa-code"></i> Web Programmer</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto"><span>Menu</span></i></a>
            <ul>
              <?php if ($this->session->userdata('email')) { ?>
                <li><a href="<?= base_url('user') ?>"><i class="fas fa-fw fa-user-alt"></i> <?= $tbl_user['nama'] ?></a></li>
              <?php } else { ?>
                <li><a href="<?= base_url('auth') ?>"><i class="fas fa-fw fa-sign-in-alt"></i> Login</a></li>
              <?php } ?>
              <li><a href="<?= base_url('auth/logout') ?>"><i class="fas fa-fw fa-sign-out-alt"></i> Logout</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?= base_url('welcome') ?>">Home</a></li>
        <li>Informasi</li>
      </ol>
      <h2>Informasi Masjid Jami Assalam</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Informasi kajian</h4>
          <!-- <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kajian</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="colFormLabelSm" readonly>
            </div>
          </div> -->
          <table class="table">
            <tbody>
              <tr>
                <td>Kajian</td>
                <td>:</td>
                <td>Ibu - ibu</td>
              </tr>
              <tr>
                <td>Hari</td>
                <td>:</td>
                <td>Senin</td>
              </tr>
              <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>14:00 s/d 15:20</td>
              </tr>
            </tbody>
          </table>
          <br>
          <table class="table">
            <tbody>
              <tr>
                <td>Kajian</td>
                <td>:</td>
                <td>Bapak - bapak</td>
              </tr>
              <tr>
                <td>Hari</td>
                <td>:</td>
                <td>Sabtu</td>
              </tr>
              <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>18:20 s/d 19:00</td>
              </tr>
            </tbody>
          </table>
          <br>
          <table class="table">
            <tbody>
              <tr>
                <td>Kajian</td>
                <td>:</td>
                <td>Pemuda</td>
              </tr>
              <tr>
                <td>Hari</td>
                <td>:</td>
                <td>Ahad</td>
              </tr>
              <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>18:20 s/d 19:00</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-md-4">
          <h4>
            Khotib Jumat bulan <?= date('F - Y') ?>
          </h4>
          <table class="table">
            <tbody>
              <tr>
                <td><?= date('F') ?> Pekan 1</td>
                <td>:</td>
                <td>Ust. Dandi</td>
              </tr>
              <tr>
                <td><?= date('F') ?> Pekan 2</td>
                <td>:</td>
                <td>Ust. Irham</td>
              </tr>
              <tr>
                <td><?= date('F') ?> Pekan 3</td>
                <td>:</td>
                <td>Ust. Asep</td>
              </tr>
              <tr>
                <td><?= date('F') ?> Pekan 4</td>
                <td>:</td>
                <td>Ust. H. Rohman</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-md-4">
          <h4>
            Pengumuman
          </h4>
          <div class="card">

            <marquee>
              <h6>Belum ada pengumuman !</h6>
            </marquee>
          </div>

        </div>
      </div>
    </div>

  </section>