<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Homespot | Kelompok 3</title>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="mini-logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="mini-logo.ico" type="image/x-icon" />
</head>

<body>
    <nav class="navbar">
        <div class="nav-wrapper">
            <div class="midnavbar">
                <div class="logo">
                    <img src="./img/logo.svg" alt="" />
                </div>

                <ul class="navbar-item">


                    <div class="dropdown ">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px; color: var(--blue);">
                  Kota Pilihan
              </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="#">Jakarta</a>
                            <a class="dropdown-item" href="#">Yogyakarta</a>
                            <a class="dropdown-item" href="#">Bekasi</a>
                        </div>
                    </div>

                    <li><a href="#beli" class="navigation">Beli</a></li>
                    <li><a href="#home" class="navigation">Home</a></li>
                    <li><a href="#about" class="navigation">Tentang Kami</a></li>
                    <li><a href="#asuransi" class="navigation">Asuransi</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button class="rounded">
            <a href="register.php">Daftar</a>
          </button>
                <button>
            <a href="halaman_login.php">Login</a>
          </button>
            </div>
        </div>
    </nav>

    <section class="home box" id="home">
        <div class="hero-wrapper">
            <div class="content-left">
                <div class="title">
                    <h1>
                        Dengan Homespot, Anda dapat membeli <br />
                        <span>Rumah Impianmu</span>
                    </h1>
                    <div class="search-field">
                        <div class="form-search d-flex">
                            <input class="form-control form-control-lg" type="text" placeholder="Cari lokasi, nama properti atau nama developer" aria-label=".form-control-lg example" />
                            <button class="filter"><img src="./img/Filter.svg" alt="" /></button>
                        </div>
                        <button style="width: 100%" type="button" class="btn">Mulai Mencari</button>
                    </div>
                </div>
            </div>
            <div class="content-right"></div>
        </div>
    </section>

    <section class="ads box" id="about">
        <div class="title">
            <h1 class="text-center" style="color: var(--main-color)">Dengan asuransi terpecaya dari Bank BRI, pembelian Anda dapat kami terlindungi</h1>
        </div>
        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="0" coverflow-effect-stretch="0" coverflow-effect-depth="150" coverflow-effect-modifier="1"
            coverflow-effect-slide-shadows="false">
            <swiper-slide style="background-image: url(./img/konten-1.png)"> </swiper-slide>
            <swiper-slide style="background-image: url(./img/frames-for-your-heart-2d4lAQAlbDA-unsplash.jpg)"> </swiper-slide>
            <swiper-slide style="background-image: url(./img/vu-anh-TiVPTYCG_3E-unsplash.jpg)"> </swiper-slide>
            <swiper-slide style="background-image: url(./img/frames-for-your-heart-mR1CIDduGLc-unsplash.jpg)"> </swiper-slide>
            <swiper-slide style="background-image: url(./img/francesca-tosolini-XcVm8mn7NUM-unsplash.jpg)"> </swiper-slide>
        </swiper-container>
    </section>

    <section class="property box d-flex h-100 mt-5" style="gap: 24px; height: 2200px;">
        <div class="content-left">
            <div class="tab">
                <div class="rekomendasi d-flex justify-content-center  align-items-center" style="color: #fff;">
                    <img src="./img/Star.svg" alt="">
                    <p class="text-center mb-0">Rekomendasi</p>
                </div>
                <div class="virtual d-flex justify-content-center align-items-center" style="gap: 8px;">
                    <img src="./img/Box 2.svg" alt="">
                    <p class="text-center mb-0">Virtual 360</p>
                </div>
            </div>
            <div class="konten-1">

                <div class="main d-flex flex-column gap-4">
                    <div class="title d-flex text-center flex-column" style="color: #fff;">
                        <h1>Carilah Properti Baru <br>Disekitarmu </h1>
                        <p style="font-size: 20px;">Rekomendasikan properti pilihan kami kepada Anda dari rumah minimalis, ruko strategis, samapai apartemen modern, dll</p>
                    </div>
                    <button style="width: 100%; background-color: var(--orange); color: #fff; font-size: 24px;" type="button" class="btn">Mulai Mencari</button>
                </div>
            </div>
            <div class="konten-2">

                <div class="main d-flex flex-column">
                    <div class="title d-flex text-center flex-column" style="color: #fff;">
                        <h1>Jelajahi Properti dengan Fitur <span>Virtual 360</span> </h1>
                        <p style="font-size: 20px;">Rekomendasikan properti pilihan kami kepada Anda dari rumah minimalis, ruko strategis, samapai apartemen modern, dll</p>
                    </div>

                </div>
            </div>
            <div class="konten-3 container">
                <div class="row ">
                    <div class="col">
                        <h1>Jakarta</h1>
                        <p>120 properti</p>
                    </div>
                    <div class="col">
                        <h1>Surabaya</h1>
                        <p>120 properti</p>
                    </div>
                    <div class="col">
                        <h1>Medan</h1>
                        <p>120 properti</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <h1>Bandung</h1>
                        <p>120 properti</p>
                    </div>
                    <div class="col">
                        <h1>Makasar</h1>
                        <p>120 properti</p>
                    </div>
                    <div class="col kotalain">
                        <h1>Kota Lain</h1>
                    </div>
                </div>
            </div>
            <div class="kpr d-flex gap-4 flex-column">
                <h1 class="text-center py-5 text-white">Kalkulator KPR</h1>
                <div class="wrapper d-flex w-100 justify-content-center gap-5">
                    <div class="form-wrapper">
                        <h5>Harga Properti</h5>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="IDR" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <h5>Jumlah Pinjaman</h5>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="IDR" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>

                <div class="wrapper d-flex w-100 justify-content-center gap-5">
                    <div class="form-wrapper">
                        <h5>Uang Muka</h5>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="IDR" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <h5>Masa Kredit Fix</h5>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                  <option selected ><p >0 Tahun</p></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>

                    </div>
                </div>
                <div class="wrapper d-flex w-100 justify-content-center gap-5">
                    <div class="form-wrapper">
                        <h5>Suku Bunga</h5>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect02" aria-label="Example select with button addon">
                  <option selected ><p >Pilih program Suku Bunga</p></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>

                    </div>
                </div>
                <div class="wrapper d-flex w-100 justify-content-center gap-5">
                    <div class="form-wrapper">
                        <h5>Nominal Suku Bunga</h5>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="IDR" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <h5>Lama Pinjaman</h5>
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                  <option selected ><p >0 Tahun</p></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                        </div>

                    </div>
                </div>
                <div class="wrapper mx-auto">
                    <button style="width: 100%; background-color: var(--main-color); color: #fff; font-size: 24px; width: 550px;" type="button" class="btn">Lihat Hasil Perhitungan</button>

                </div>
                <div class="wrapper mx-auto">
                    <p style="width: 550px;">*Catatan: Perhitungan ini adalah hasil perkiraaan aplikasi KPR secara umum dengan menggunakan jangka waktu suku bunga 3 tahun. Data perhitungan di atas dapat berbeda dengan perhitungan bank. Untuk perhitungan yang akurat, silahkan
                        hubungi kantor cabang kami.</p>
                </div>
            </div>
        </div>
        <div class="content-right d-flex flex-column gap-4" style="width: 60%;">
            <div class="card" style="width: 100%;">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/vu-anh-TiVPTYCG_3E-unsplash.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="./img/jumbotron.b17e974c94f2a4a7d1b7.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev my-auto ms-3" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                    <button class="carousel-control-next my-auto me-3" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                </div>
                <div class="card-body">
                    <h2 class="card-title">Perumahan Pondok Indah</h2>
                    <h5 class="card-text " style="color: var(--red);">Medan, Sumatera Utara</h5>
                    <div class="fasilitas d-flex gap-5 mb-5">
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/material-symbols_bed-outline.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/solar_bath-linear.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/lucide_land-plot.svg" alt="">
                            <h5>88 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/tabler_building.svg" alt="">
                            <h5>72 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/ph_certificate.svg" alt="">
                            <h5>SHM</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h1 style="font-size: 32px; color: var(--red);">Rp750JT - Rp 850JT</h1>
                        <a href="#" class="btn d-flex justify-content-center px-1 gap-3 align-items-center " style="width: 180px; background-color: var(--main-color); color: #fff;"><img src="./img/Box 2-white.svg" alt="">
                            <h5 class="mt-1">Virtual 360</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div id="carouselExample2" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/konten-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/jumbotron.b17e974c94f2a4a7d1b7.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev my-auto ms-3" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                    <button class="carousel-control-next my-auto me-3" type="button" data-bs-target="#carouselExample2" data-bs-slide="next" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                </div>
                <div class="card-body">
                    <h2 class="card-title">Perumahan Pondok Indah</h2>
                    <h5 class="card-text " style="color: var(--red);">Medan, Sumatera Utara</h5>
                    <div class="fasilitas d-flex gap-5 mb-5">
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/material-symbols_bed-outline.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/solar_bath-linear.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/lucide_land-plot.svg" alt="">
                            <h5>88 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/tabler_building.svg" alt="">
                            <h5>72 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/ph_certificate.svg" alt="">
                            <h5>SHM</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h1 style="font-size: 32px; color: var(--red);">Rp750JT - Rp 850JT</h1>
                        <a href="#" class="btn d-flex justify-content-center px-1 gap-3 align-items-center " style="width: 180px; background-color: var(--main-color); color: #fff;"><img src="./img/Box 2-white.svg" alt="">
                            <h5 class="mt-1">Virtual 360</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div id="carouselExample3" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/konten-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/jumbotron.b17e974c94f2a4a7d1b7.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev my-auto ms-3" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                    <button class="carousel-control-next my-auto me-3" type="button" data-bs-target="#carouselExample3" data-bs-slide="next" style="background-color: rgba(255, 255, 255,0.5); height: 200px; width: 50px; color: #fff;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                </div>
                <div class="card-body">
                    <h2 class="card-title">Perumahan Pondok Indah</h2>
                    <h5 class="card-text " style="color: var(--red);">Medan, Sumatera Utara</h5>
                    <div class="fasilitas d-flex gap-5 mb-5">
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/material-symbols_bed-outline.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/solar_bath-linear.svg" alt="">
                            <h5>2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/lucide_land-plot.svg" alt="">
                            <h5>88 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/tabler_building.svg" alt="">
                            <h5>72 m2</h5>
                        </div>
                        <div class="image-wrapper d-flex align-items-center gap-2 ">
                            <img src="./img/ph_certificate.svg" alt="">
                            <h5>SHM</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h1 style="font-size: 32px; color: var(--red);">Rp750JT - Rp 850JT</h1>
                        <a href="#" class="btn d-flex justify-content-center px-1 gap-3 align-items-center " style="width: 180px; background-color: var(--main-color); color: #fff;"><img src="./img/Box 2-white.svg" alt="">
                            <h5 class="mt-1">Virtual 360</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer box">
        <div class="footer-wrapper">
            <div class="satu">
                <h2>Dukungan Pusat</h2>
                <p>PT. Bringin Inti Teknologi (BIT) Intiland Tower Lt. 12A Jalan Jenderal Sudirman No. 32 Jakarta Pusat 10220 Indonesia
                </p>
            </div>
            <div class="dua">
                <h2>Dukungan</h2>
                <p>Kebijakan Privasi Syarat dan Ketentuan</p>
            </div>
            <div class="tiga">
                <h2>Hubungi Kami</h2>
                <p>+62 813-8900-1162</p>
                <p>support@homespot.id</p>
            </div>
            <div class="empat">
                <h2>Homespot by :</h2>
                <h2>Powered by :</h2>
            </div>
        </div>
    </section>


    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>

</html>