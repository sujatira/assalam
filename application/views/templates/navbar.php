<nav class="navbar navbar-expand-lg navbar-light bg-ala">
  <div class="container">
    <a class="navbar-brand navnavan" href="<?= base_url('home') ?>">Jami Assalam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="<?= base_url('artikel') ?>">Artikel</a>
        <a class="nav-link" href="<?= base_url('kajian') ?>">Kajian</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            About
          </a>
          <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('home/about') ?>"><i class="fas fa-fw fa-star-and-crescent"></i> Masjid Jami Assalam</a></li>
            <li><a class="dropdown-item" href="<?= base_url('home/developer') ?>"><i class="fas fa-fw fa-code"></i> Developer</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Menu
          </a>
          <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
            <?php if ($this->session->userdata('email')) {  ?>
              <li><a class="dropdown-item" href="<?= base_url('user') ?>"><i class="fas fa-user"></i> <?= ($tbl_user['nama']) ?></a></li>
              <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
            <?php } else { ?>
              <li><a class="dropdown-item" href="<?= base_url('auth') ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <?php } ?>
          </ul>
        </li>
      </div>
    </div>
  </div>
</nav>