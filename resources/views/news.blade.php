<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menggunakan Bootstrap 5.3.2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Font Family - Menggunakan font Poppins dan Rufina dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
    <title>Teknologi Informasi</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/logo.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">
</head>


<body>
    <header>
        <div class="container-fluid " style="background-color:#204B05 ;">
            <div class="row align-items-center ">
                <div class="col-md-9 col-sm-12 ">
                    <nav class="navbar">
                        <a class="navbar-brand px-5 text-white" href="{{ url('/home') }}">
                            <img src="{{ asset('assets/logo/logo.png') }}" alt="Logo" width="50" height="50">
                            Teknologi Informasi
                        </a>
                    </nav>
                </div>
                <div class="navbar col-md-3 col-sm-12 d-flex justify-content-end justify-content-sm-center ">
                    <div class="search">
                        <button class="search-button text-white bg-black" type="button" id="searchButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                            Search
                        </button>
                        <input type="text" id="searchInput" class="search-input text-white bg-black text-start"
                            placeholder="Cari...">
                    </div>
                    <button id="closeSearchButton" class="close-search-button">
                        <i class="fa fa-times"></i>
                        x
                    </button>

                    <button class="menu-button text-white bg-black" type="button" id="menuButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        Menu
                    </button>
                </div>
            </div>
        </div>


    <!-- Overlay -->
    <div id="myNav" class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overlay-content">
                        <a href="{{ url('/home') }}">Home</a><br>
                        <a href="{{ url('/news') }}">News</a><br>
                        <a href="{{ url('/events') }}">Events</a><br>
                        <a href="{{ url('/academics') }}">Academics</a><br>
                        <a href="{{ url('/about') }}">About</a><br>
                        <a id="closeButton" href="javascript:void(0)" class="closebtn">×</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- Konten Utama -->
    <main id="News" class="news">
        <section class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-3 bg-primary">
                    BERITA TERKINI

                    <p class="text-dark">Telah dilaksanakan program kerja megabit dari himpunan
                        Teknologi informasi dari bidang kemahasiswaan, tujuan dilaksanakan
                        program kerja ini adalah untuk mengenalkan jurusan dan organisasi Teknologi
                        infromasi, terdapat acara fungames dan bincang bincang bersama alumni
                    </p>

                </div>
                <div class="col-6 bg-primary">
                    <div class="gambar-alvie">
                        <img src="./assets/images/megabit.jpeg" alt="">
                    </div>

                </div>
            </div>
        </section>
    </main>



    <!--Footer-->
    <footer id="contact" class="contact">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>about Teknologi Informasi</h2>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">career</a></li>
                                <li><a href="#">terms <span> of service</span></a></li>
                                <li><a href="#">privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo  ">
                                <a href="index.html">
                                    <img src="assets/logo/logo.png" width="50" height="50" alt="Logo">
                                    Teknologi Informasi
                                </a>
                            </div>
                            <div class="center-footer">
                                <p>We are the one, We are the best</p>
                                <div class="footer-contact">
                                    <p>info@themesine.com</p>
                                    <p>+1 (885) 2563154554</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>news letter</h2>
                            <div class="footer-newsletter">
                                <p>
                                    Subscribe to get latest news update and informations
                                </p>
                            </div>
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Add Email">
                                </div>
                                <div class="foot-email-subscribe">
                                    <span><i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            &copy; copyright.designed and developed by Kabans Club
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Script JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5.3.2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS - Skrip JavaScript kustom untuk situs web -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
