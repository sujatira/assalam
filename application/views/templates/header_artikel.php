<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-success">
        <div class="container">
            <a class="navnavan btn bg-transparent btn-block" href="<?= base_url('Home') ?>">Jami Assalam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('Artikel') ?>">Artikel</a>
                    <a class="nav-link" href="<?= base_url('Kajian') ?>">Kajian</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-star-and-crescent"></i> Masjid Jami Assalam</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-code"></i> Developer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('User') ?>"><i class="fas fa-user"></i> Akun</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Auth') ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        </ul>
                    </li>
                    <!-- <a href="<?= base_url('Auth') ?>" class="btn btn-user btn-success"><i class="fas fa-sign-in-alt"></i> LOGIN</a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container">