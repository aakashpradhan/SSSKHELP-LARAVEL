<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

    <header>
        <div class="header-top">
            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>


            </div>

            <!-- Your Blade Template -->
            <div class="donor-login">
                <a href="/donors-login">Login</a>
                @auth
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="/my-account">My Account</a>
                @endauth
            </div>

            @auth
                <p>User is authenticated!</p>
            @endauth

            @if (session('success'))
                <div class="alert alert-success">
                    <a href="{{ route('my-account') }}">My Account</a>
                    <a href="{{ route('logout') }}">Logout</a>

                </div>
            @endif






        </div>
        <nav>
            <div class="logo">
                <a href="/">
                    <img src="images/sssk-help-logo.png" alt="sssk help logo">
                </a>
            </div>
            <div class="main-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/mission">Mission</a></li>
                    <li><a href="/humanity-social-service">Humanity & Social Service</a></li>
                    <li><a href="/wbds">World Blood Donation Society - WBDS</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="page-title">
        <div class="page-title">
            @yield('title')
        </div>
        <div class="breadcrumbs">
            <?php
            
            ?>
        </div>
    </section>

    <!-- content -->

    @yield('content')



    <!-- Site footer -->
    <footer id="site-footer">
        <div class="footer-top">
            <div class="footer-top-row">
                <div class="footer-about">
                    <h3>About</h3>
                    <p class="text-justify">SSSK Help<i>Social Service Brings Peace of Mind</i> Sheela Social Service
                        Kingdom (SSSK) is an International Public Charitable Trust run by human Society of the world. It
                        works for The Service to mankind. It provides a link between donors and acceptors. It is a ray,
                        of hope for humanity. </p>
                </div>

                <div class="footer-section">
                    <h3>Useful Links</h3>
                    <ul class="useful-links">
                        <li><a href="/about">About</a></li>
                        <li><a href="/mission">Mission</a></li>
                        <li><a href="/humanity-social-service">Humanity & Social Service</a></li>
                        <li><a href="/wbds">World Blood Donation Society - WBDS</a></li>
                        <li><a href="/donors-login">Donors Login</a></li>
                        <li><a href="/general-instructions">General Instructions</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Policies</h3>
                    <ul class="policies">
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/disclaimer">Disclaimer</a></li>
                        <li><a href="/terms">Terms & Conditions</a></li>
                        <li><a href="/sitemap">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; <?php echo date('Y'); ?> All Rights Reserved by
                        <a href="#">SSSK Help</a>.
                    </p>
                </div>

                <div class="social-links">
                    <ul class="footer-social-icons">
                        <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>


</body>

</html>
