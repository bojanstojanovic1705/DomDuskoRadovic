<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Дом за децу и омладину „Душко Радовић“ Ниш – званична веб презентација. Пружамо сигуран дом, образовање и подршку деци без родитељског старања.">
    <meta name="keywords" content="Дом Душко Радовић, Ниш, деца, омладина, социјална заштита, донације">
    <meta name="author" content="Дом за децу и омладину Душко Радовић Ниш">
    <meta property="og:title" content="@yield('title') – Дом Душко Радовић Ниш">
    <meta property="og:description" content="Пружамо свеобухватну бригу и подршку деци без родитељског старања.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="sr_RS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') – Дом Душко Радовић Ниш</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', system-ui, sans-serif; line-height: 1.6; color: #1a1a1a; }
        .mobile-menu-button { display: none; background: none; border: none; cursor: pointer; padding: 10px; z-index: 1001; }
        .mobile-menu-button span { display: block; width: 24px; height: 2.5px; background: #fff; margin: 5px 0; transition: .3s; border-radius: 2px; }
        @media (max-width: 900px) {
            .mobile-menu-button { display: block; }
            .navbar__menu { display: none; position: absolute; top: 72px; left: 0; width: 100%; background: #1e3a5f; flex-direction: column; padding: 1rem 0; z-index: 1000; box-shadow: 0 8px 24px rgba(0,0,0,.15); }
            .navbar__menu.show { display: flex; }
            .navbar__menu li { margin: 0; }
            .navbar__menu .dropdown { position: static; opacity: 1; visibility: visible; transform: none; max-height: 0; overflow: hidden; transition: max-height .3s ease; padding: 0; background: rgba(0,0,0,.15); }
            .navbar__menu li.open .dropdown { max-height: 400px; padding: .5rem 0; }
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <nav class="navbar" id="mainNav">
        <div class="navbar__container">
            <a href="{{ route('home') }}" class="navbar__logo">
                <span class="logo-text">ДОМ ДУШКО РАДОВИЋ</span>
            </a>
            <button class="mobile-menu-button" id="mobileMenuBtn" aria-label="Мени" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
            <ul class="navbar__menu" id="navMenu">
                <li><a href="{{ route('home') }}">ПОЧЕТНА</a></li>
                <li class="has-dropdown">
                    <a href="{{ route('about.index') }}">О НАМА <i class="fas fa-chevron-down dropdown-icon"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('about.index') }}#ko-smo-mi">КО СМО МИ</a></li>
                        <li><a href="{{ route('about.index') }}#zaposleni">ЗАПОСЛЕНИ</a></li>
                        <li><a href="{{ route('about.index') }}#istorijat">ИСТОРИЈАТ ЦЕНТРА</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="{{ route('documents.index') }}">ДОКУМЕНТА <i class="fas fa-chevron-down dropdown-icon"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ route('documents.reports') }}">ГОДИШЊИ ИЗВЕШТАЈИ</a></li>
                        <li><a href="{{ route('documents.procurement') }}">ЈАВНЕ НАБАВКЕ</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('news.index') }}">ВЕСТИ</a></li>
                <li><a href="{{ route('contact') }}" class="nav-cta">КОНТАКТ</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-top-line"></div>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <div class="footer-brand">ДОМ ДУШКО РАДОВИЋ</div>
                    <p class="footer-description">
                        Дом за децу и омладину „Душко Радовић“ пружа сигуран дом, образовање и подршку деци без одговарајућег родитељског старања.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Брзи линкови</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Почетна</a></li>
                        <li><a href="{{ route('about.index') }}">О нама</a></li>
                        <li><a href="{{ route('news.index') }}">Вести</a></li>
                        <li><a href="{{ route('contact') }}">Контакт</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Контакт информације</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Гутенбергова 4А, 18000 Ниш</li>
                        <li><i class="fas fa-phone"></i> <a href="tel:+381182161168">018 216 168</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@domduskoradovic-nis.rs">info@domduskoradovic-nis.rs</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h3>Билтен</h3>
                    <p>Пријавите се за новости из Дома.</p>
                    <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Ваша е-пошта" required aria-label="Е-пошта">
                            <button type="submit" class="btn-subscribe" aria-label="Пријави се"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copyright">
                    &copy; {{ date('Y') }} Дом за децу и омладину „Душко Радовић“. Сва права задржана.
                </div>
                <div class="footer-legal">
                    <a href="{{ route('legal.privacy') }}">Правила приватности</a>
                    <a href="{{ route('legal.terms') }}">Услови коришћења</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobileMenuBtn');
            const menu = document.getElementById('navMenu');
            if (btn && menu) {
                btn.addEventListener('click', function () {
                    const open = menu.classList.toggle('show');
                    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            }
            document.querySelectorAll('.navbar__menu .has-dropdown > a').forEach(link => {
                link.addEventListener('click', function (e) {
                    if (window.innerWidth <= 900) {
                        e.preventDefault();
                        this.parentElement.classList.toggle('open');
                    }
                });
            });
            const nav = document.getElementById('mainNav');
            window.addEventListener('scroll', function () {
                if (window.scrollY > 40) nav.classList.add('navbar--scrolled');
                else nav.classList.remove('navbar--scrolled');
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
