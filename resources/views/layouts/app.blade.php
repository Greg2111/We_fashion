<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <!-- meta data -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

            <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/animate.css">

            <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
            <link rel="stylesheet" href="/assets/css/magnific-popup.css">

            <link rel="stylesheet" href="/assets/css/aos.css">

            <link rel="stylesheet" href="/assets/css/ionicons.min.css">

            <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
            <link rel="stylesheet" href="/assets/css/jquery.timepicker.css">


            <link rel="stylesheet" href="/assets/css/flaticon.css">
            <link rel="stylesheet" href="/assets/css/icomoon.css">
            <link rel="stylesheet" href="/assets/css/style.css">

        </head>

<body>
                <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                    <div class="container">
                      <a class="navbar-brand teal" href="{{ route('products.index') }}">WE FASHION</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                      </button>

                      <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">Home</a></li>
                          <li class="nav-item"><a href="{{ url('/hommes') }}" class="nav-link">Hommes</a></li>
                          <li class="nav-item"><a href="{{ url('/femmes') }}" class="nav-link">Femmes</a></li>
                          <li class="nav-item"><a href="{{ url('/soldes') }}" class="nav-link">Soldes</a>
                          <li class="nav-item dropdown">
                          @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a  href="{{ route('login') }}" class="nav-link">{{ __('Login') }} </a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a  href="{{ route('register') }}" class="nav-link"> {{ __('Register') }} </a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                                        <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
                                            Dashboard
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                            </li>
                            @endguest

                        </ul>
                      </div>
                    </div>
                  </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <br><br>
        <footer class="ftco-footer ftco-section">
            <div class="container">
                <div class="row">
                    <div class="mouse">
                              <a href="#" class="mouse-icon">
                                  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                              </a>
                          </div>
                </div>
              <div class="row mb-5">
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">WE FASHION</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    <h2 class="ftco-heading-2">Réeseau sociaux</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Informations</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                          <li><a href="#" class="py-2 d-block">Mentions légales</a></li>
                          <li><a href="#" class="py-2 d-block">Presse</a></li>
                          <li><a href="#" class="py-2 d-block">Fabrication</a></li>
                          <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                        <ul class="list-unstyled">
                          <li><a href="#" class="py-2 d-block">FAQs</a></li>
                          <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                      <h2 class="ftco-heading-2">Service Client</h2>
                      <div class="block-23 mb-3">
                        <ul>
                          <li><span class="icon icon-map-marker"></span><span class="text">i92 Bonoumin, Abidjan, Abidjan, Côte d'Ivoire</span></li>
                          <li><a href="#"><span class="icon icon-phone"></span><span class="text">Contactez nous au +225 392 3929 210</span></a></li>
                          <li><a href="#"><span class="icon icon-phone"></span><span class="text">Livraison & Retour</span></a></li>
                          <li><a href="#"><span class="icon icon-phone"></span><span class="text">Condition de vente</span></a></li>
                          <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">

                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ce site à été créé avec  <i class="icon-heart color-danger" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank">EHUI Grégory 3e année de dev</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              </p>
                </div>
              </div>
            </div>
          </footer>






        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.easing.1.3.js"></script>
        <script src="/assets/js/jquery.waypoints.min.js"></script>
        <script src="/assets/js/jquery.stellar.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/aos.js"></script>
        <script src="/assets/js/jquery.animateNumber.min.js"></script>
        <script src="/assets/js/bootstrap-datepicker.js"></script>
        <script src="/assets/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="/assets/js/google-map.js"></script>
        <script src="/assets/js/main.js"></script>
</body>
</html>
