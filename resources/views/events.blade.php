<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menggunakan Bootstrap 5.3.2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Font Family - Menggunakan font Poppins dan Rufina dari Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
    <title>Teknologi Informasi</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">
</head>

<body>
    <header>
        <div class="container-fluid " style="background-color:#204B05 ;">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-12">
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



    <!--event page-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jadwal Acara</title>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
    
            .header {
                margin: 0;
                padding: 0;
                position: relative;
            }
    
            .header img {
                height: 100vh;
                width: 100%;
            }
    
            .header .img-overlay {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background: #000;
                z-index: 1;
                opacity: 0.5;
            }
    
            .header .img-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                color: #fff !important;
                text-align: center;
                justify-content: center !important;
            }
    
            .header .img-content h1 {
                font-weight: bold;
                font-style: italic;
                font-size: 60px;
                margin-bottom: 20px !important;
            }
    
            .header .img-content span {
                font-weight: bold;
                font-style: italic;
                font-size: 20px;
                letter-spacing: 0.2px;
            }
        </style>
    </head>
    
    <body>
        <div class="header">
            <div class="img-parent">
                <div class="img">
                    <img src="{{ asset('assets/images/Event/Eventsbanner.jpg') }}" alt="">
                </div>
                <div class="img-overlay"></div>
            </div>
            <div class="img-content">
                <h1>EVENTS</h1>
                <span>Selamat datang di halaman Event Teknologi Informasi! Kami di HMIT dengan bangga mempersembahkan rangkaian acara yang menggembirakan dan informatif, menjembatani Anda dengan perkembangan terbaru di jurusan
                     Teknologi Informasi Telkom University.</span>
            </div>
        </div>
    </body>
    
    </html>

    
<!-- Event Main -->    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .main-header {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            color: #6ab04c;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .container-event {
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }

        .event {
            margin-bottom: 100px;
        }

        .event-content {
            box-shadow: 10px 10px 10px -10px rgba(0, 0, 0, 0.3),
                inset 10px 10px 10px -10px rgba(0, 0, 0, 0.5);
            padding: 10px;
            cursor: pointer;
            background: #fff !important;
            margin-top: -70px !important;
            margin-left: 0px !important;
            position: absolute;
            word-wrap: break-word;
        }

        .event-content h4 {
            font-weight: bold;
            font-style: italic;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .event-content span {
            font-style: italic;
            font-size: 15px;
            white-space: pre-wrap;
            max-width: 550px;
            display: block;
            margin: 0 auto;
        }

        .event img {
            transition: 0.6s;
            margin-left: -40px;
        }

        .event img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .event .col-sm-5 {
            margin-bottom: 200px !important;
        }
    </style>
</head>

<body>
    <div class="main-header">Main Event</div>

    <div class="container-event">

    <div class="row justify-content-center text-center">
        <div class="offset-sm-1 col-sm-5 event">
            <img src="{{ asset('assets/images/Event/EVEREST.JPG') }}" class="img-fluid" alt="">
            <div class="event-content">
                <h4>EVEREST</h4>
                    <span>Kompetisi olahraga, e-Sports, dan keterampilan lainnya untuk warga Himpunan Mahasiswa Teknologi Informasi (HMIT). Meningkatkan keterampilan, bakat, dan semangat kompetitif dalam bidang pendidikan.</span><br>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5 event">
                <img src="{{ asset('assets/images/Event/MEGABIT.JPG') }}" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>MEGABIT</h4>
                    <span>Kegiatan pengenalan jurusan Teknologi Informasi untuk mahasiswa baru. Memberikan pemahaman komprehensif, memperkenalkan potensi dan peluang di bidang Teknologi Informasi.</span><br>
                </div>
            </div>

        </div>

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5 event">
                <img src="{{ asset('assets/images/Event/PROXI.JPG') }}" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>PROXIMITI</h4>
                    <span>Kegiatan kaderisasi untuk mahasiswa baru S1 Teknologi Informasi. Membentuk karakter calon pemimpin, menciptakan rasa kekeluargaan, dan memberikan media pembelajaran di luar bidang akademik.</span><br>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5 event">
                <img src="{{ asset('assets/images/Event/VISCOM.jpg') }}" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>VISIT COMPANY</h4>
                    <span>Kunjungan ke perusahaan sebagai bagian dari kegiatan HMIT untuk membantu mahasiswa memperoleh pemahaman dan pengetahuan yang lebih baik tentang dunia industri IT.</span><br>
                </div>
            </div>

        </div>

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5 event">
                <img src="{{ asset('assets/images/Event/PENJAHIMAN.JPG') }}" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>PENJAHIMAN</h4>
                    <span>Proyek fokus pada persiapan upacara penjahitan dalam HMIT (bagian dari rangkaian acara PROXIMITI). Melibatkan perencanaan dan pelaksanaan upacara dengan tujuan menghormati tradisi dan memperkuat ikatan di antara anggota HMIT.</span><br>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5 event">
                <img src="{{ asset('assets/images/Event/PARADE.jpg') }}" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>PARADE</h4>
                    <span>Kegiatan kaderisasi untuk mahasiswa baru S1 Teknologi Informasi. Membentuk karakter calon pemimpin, menciptakan rasa kekeluargaan, dan memberikan media pembelajaran di luar bidang akademik.</span><br>
                </div>
            </div>

        </div>

    </div>
</body>

<!-- Event other -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing Slider</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            width: 80%;
            margin: 0 auto;
            background-color: #f0f0f0; /* Warna abu-abu */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px; /* Jarak dengan footer */
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider {
            flex: 0 0 22%; /* 22% width for each slider in a row */
            margin-right: 2%; /* Right margin to create spacing */
            position: relative;
        }

        .slider img {
            width: 100%;
            height: auto;
        }

        .caption {
            text-align: center;
            margin-top: 10px;
            font-size: 16px;
            color: #777;
        }

        .slider-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .slider-button {
            font-size: 24px;
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .prev {
            left: 10px;
            transform: translateY(-50%);
        }

        .next {
            right: 10px;
            transform: translateY(-50%);
        }

        .mini-event {
            text-align: center;
            font-size: 36px;
            color: #000;
            font-weight: bold;
            margin-top: 20px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <div class="slider-container">
        <div class="mini-event">Mini Event</div>

        <div class="slider-wrapper">
            <div class="slider">
                <img src="https://placekitten.com/800/400" alt="Kucing 1">
                <div class="caption">Keterangan Slider 1</div>
            </div>
            <div class="slider">
                <img src="https://placekitten.com/801/400" alt="Kucing 2">
                <div class="caption">Keterangan Slider 2</div>
            </div>
          <div class="slider">
            <img src="https://placekitten.com/802/400" alt="Kucing 3">
            <div class="caption">Keterangan Slider 3</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/803/400" alt="Kucing 4">
            <div class="caption">Keterangan Slider 4</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/804/400" alt="Kucing 5">
            <div class="caption">Keterangan Slider 5</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/805/400" alt="Kucing 6">
            <div class="caption">Keterangan Slider 6</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/806/400" alt="Kucing 7">
            <div class="caption">Keterangan Slider 7</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/807/400" alt="Kucing 8">
            <div class="caption">Keterangan Slider 8</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/808/400" alt="Kucing 9">
            <div class="caption">Keterangan Slider 9</div>
          </div>
          <div class="slider">
            <img src="https://placekitten.com/809/400" alt="Kucing 10">
            <div class="caption">Keterangan Slider 10</div>
          </div>
        </div>
        <div class="slider-buttons">
          <button class="slider-button prev" onclick="prevSlide()">&#10094;</button>
          <button class="slider-button next" onclick="nextSlide()">&#10095;</button>
        </div>
      </div>
      
      <script>
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const slides = document.querySelectorAll('.slider');
        let currentSlide = 0;
        let intervalId; // ID interval untuk berhenti ketika diperlukan
      
        function nextSlide() {
          if (currentSlide < slides.length - 1) {
            currentSlide++;
          } else {
            currentSlide = 0; // Kembali ke awal jika sudah di akhir
          }
          updateSlider();
        }
      
        function prevSlide() {
          if (currentSlide > 0) {
            currentSlide--;
          } else {
            currentSlide = slides.length - 1; // Pindah ke akhir jika sudah di awal
          }
          updateSlider();
        }
      
        function updateSlider() {
          const translateValue = -currentSlide * (22 + 2) + '%'; // Ubah nilai margin-right
          sliderWrapper.style.transform = 'translateX(' + translateValue + ')';
        }
      
        // Fungsi untuk memulai otomatis slider setiap 3 detik
        function startAutoSlide() {
          intervalId = setInterval(() => {
            nextSlide();
          }, 3000); // Interval setiap 3 detik
        }
      
        // Fungsi untuk menghentikan otomatis slider
        function stopAutoSlide() {
          clearInterval(intervalId);
        }
      
        // Mulai otomatis slider saat halaman dimuat
        startAutoSlide();
      
        // Hentikan otomatis slider ketika slider container dihover
        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.addEventListener('mouseenter', stopAutoSlide);
        sliderContainer.addEventListener('mouseleave', startAutoSlide);
      </script>
      
      </body>
    
    <!--footer-->
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
    <script src="assets/js/custom.js"></script>
</body>

</html>
