<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HKBP Kutajaya - <?= $data["judul"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>public/css/media-queries.css">
</head>


<body>
    <!-- header section starts  -->
    <header class="header">
        <a href="/" class="logo"> <img class="navbarlogo" src="<?= BASEURL; ?>public/img/gereja.png" alt=""></i></a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="/">Beranda</a>
            <a href="">Pelayanan</a>
            <a href="">Warta</a>
            <a href="">Organisasi</a>
            <a href="">Dokumentasi</a>
            <a href="">Tentang Kami</a>
            <a href="<?= BASEURL; ?>login">Login</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>
    <!-- header section ends -->

    <!-- search form  -->
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>