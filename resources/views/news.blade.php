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

    </head>

<body>

    <!-- Top News Start-->
    <div class="top-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="tn-img">
                        <img src="img/top-news-1.jpg" />
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                <a class="tn-title" href="">Lorem ipsum dolor sit amet adipiscing elit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/top-news-2.jpg" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="tn-title" href="">Integer faucibus pharetra odio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/top-news-3.jpg" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="tn-title" href="">Nulla vitae pharetra ligula</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/top-news-4.jpg" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="tn-title" href="">Ut ac euismod tellus a blandit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/top-news-5.jpg" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="tn-title" href="">Cras ac egestas sem nec euismod</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->


    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2><i class="fas fa-align-justify"></i>Sports</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-1.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Cras sed semper puru vitae lobortis velit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-2.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Vestibulum ante ipsum primis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-3.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Sed quis convallis lacus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2><i class="fas fa-align-justify"></i>Technology</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-4.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Vivamus vel felis nec magna</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-5.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Phasellus vitae fermentum est</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-6.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Aenean ut varius dui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->


    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2><i class="fas fa-align-justify"></i>Business</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-7.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Interdum et malesuada fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-8.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Mauris non ligula eget ante sagittis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-9.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Integer non nunc nec nulla aliquet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2><i class="fas fa-align-justify"></i>Entertainment</h2>
                    <div class="row cn-slider">
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-10.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Ut laoreet justo non ornare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-11.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Proin a nulla ut enim feugiat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="img/cat-news-12.jpg" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <a class="cn-title" href="">Sed mauris sem sollicitudin at neque</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->


    <!-- Main News Start-->
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="img/latest-news.jpg" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Cras commodo sem ut porta laoreet</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Pellentesque sit amet rutrum lacus</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Proin id pretium orci, quis rhoncus eros</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Curabitur viverra scelerisque tempor</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Integer nec lorem facilisis interdum lorem non</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Interdum et malesuada fames</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="img/popular-news.jpg" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Phasellus gravida metus vitae laoreet aliquam</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Nullam risus ante sempe</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Pellentesque ultrices quam id ipsum tempor</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Nam ex magna, commodo sed turpis rutrum</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Aliquam condimentum metus</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Ut ornare rutrum ligula erat volutpat</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Category</h2>
                            <div class="category">
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">National</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">International</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Economics</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Politics</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Lifestyle</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Technology</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Trades</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Tags</h2>
                            <div class="tags">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                            <div class="image">
                                <a href=""><img src="img/adds-1.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                            <div class="image">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href=""><img src="img/adds-2.jpg" alt="Image"></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href=""><img src="img/adds-2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->



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
