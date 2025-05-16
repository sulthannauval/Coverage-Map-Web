<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Custom CSS & JS -->
    @vite(['resources/css/tutorial.css', 'resources/js/tutorial.js'])
</head>

<body>
    <!-- Sidebar Navigation -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="ri-menu-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</Menu></a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/map" class="sidebar-link">
                        <i class="ri-home-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link-select">
                        <i class="ri-information-fill"></i>
                        <span>About</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/tutorial" class="sidebar-link">
                        <i class="ri-question-fill"></i>
                        <span>Help</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/contact" class="sidebar-link">
                        <i class="ri-phone-fill"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="ri-logout-box-line"></i>
                    <span>Exit</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="text-center">
                <h1>About</h1>
                <br />
            </div>
            <div class="row">
                <div class="col-sm-1 d-none d-xl-block"></div>
                <div class="ml-5 col-sm-5">
                    <h1 class="">Tentang Kami</h1>
                    <p class="" style="text-align: justify;">
                        Website ini dibuat untuk memberikan informasi prediktif
                        mengenai cakupan penyebaran sinyal TV Digital DVB-T2 dari
                        setiap pemancar resmi yang tersebar di seluruh wilayah Indonesia.
                        Dengan memanfaatkan metode pemodelan propagasi standar internasional,
                        sistem ini memungkinkan pengguna untuk mengetahui area jangkauan
                        siaran digital secara lebih akurat dan interaktif.
                    </p>
                </div>
                <!-- <div class="col-sm-2 d-none d-xl-block"></div> -->
                <div class="col-sm-5">
                    <h1>Tujuan</h1>
                    <dl style="text-align: justify;">
                        Memberikan visualisasi cakupan siaran TV Digital kepada publik,
                        penyiar, maupun instansi terkait.
                    </dl>
                    <dl style="text-align: justify;">
                        Mendukung proses transisi dari siaran TV analog ke digital di
                        Indonesia.
                    </dl>
                    <dl style="text-align: justify;">
                        Menyediakan alat bantu perencanaan bagi regulator dan penyedia
                        layanan penyiaran.
                    </dl>
                </div>
                <div class="col-sm-1 d-none d-xl-block"></div>
            </div>
            <div class="row">
                <div class="col-1 d-none d-xl-block"></div>
                <div class="col-10">
                    <h1>Model Propagasi</h1>
                    <p style="text-align: justify;">
                        Website ini menggunakan model <b>ITU-R P.1546</b>, yaitu
                        standar internasional yang digunakan untuk perhitungan
                        cakupan siaran berbasis medan terbuka, khususnya untuk
                        frekuensi VHF/UHF seperti yang digunakan dalam siaran
                        DVB-T2.
                    </p>
                </div>
                <div class="col-1 d-none d-xl-block"></div>
            </div>
            <div class="row">
                <div class="col-1 d-none d-xl-block"></div>
                <div class="col-10">
                    <h1>Software Prediksi</h1>
                    <p style="text-align: justify;">
                        Prediksi penyebaran sinyal dilakukan menggunakan Radio Planner,
                        sebuah perangkat lunak simulasi propagasi radio yang mendukung
                        berbagai parameter teknis siaran seperti daya pancar, ketinggian
                        antena, kontur geografis, serta jenis modulasi.
                    </p>
                </div>
                <div class="col-1 d-none d-xl-block"></div>
            </div>
            <div class="row">
                <div class="col-1 d-none d-xl-block"></div>
                <div class="col-10">
                    <h1>Fitur Utama</h1>
                    <dl style="text-align: justify;">
                        <b>
                        Peta Interaktif:
                        </b>
                        Menampilkan sebaran sinyal dalam bentuk peta dengan warna berbeda berdasarkan kekuatan sinyal.
                    </dl>
                    <dl style="text-align: justify;">
                        <b>
                            Fieldstrength Detector: 
                        </b>
                        Pengguna dapat memilih wilayah atau pemancar tertentu untuk melihat Kekuatan sinyal pada titik tersebut.
                    </dl>
                    <dl style="text-align: justify;">
                        <b>
                        Informasi Teknis Pemancar: 
                        </b>
                        Menyediakan detail teknis seperti frekuensi, ERP, ketinggian antena, dan koordinat geografis.
                    </dl>
                </div>
                <div class="col-1 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>