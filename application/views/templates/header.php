<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Ini google style font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400&display=swap" rel="stylesheet">

    <!-- Ini CSS-ku -->
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">

    <!-- font-awesome -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- fontku -->
    <style type="text/css">
        @font-face {
            font-family: spark;
            src: url('Spark.oft');
        }
    </style>
    <title><?= $judul ?></title>
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-ala">
        <div class="container">
            <a class="navnavan" href="<?= base_url('home') ?>">Jami Assalam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('artikel') ?>">Artikel</a>
                    <a class="nav-link" href="<?= base_url('kajian') ?>">Kajian</a>
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
                </div>
            </div>
        </div>
    </nav>