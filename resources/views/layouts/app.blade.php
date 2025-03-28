<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Дом за децу и омладину 'Душко Радовић' Ниш - Званична веб презентација">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Dom Duško Radović Niš</title>
    
    <!-- Preconnect za eksterne resurse -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">
    
    <!-- Učitavanje kritičnih stilova -->
    <style>
        /* Osnovni stilovi koji su potrebni za inicijalni prikaz stranice */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Mobilna navigacija */
        .mobile-menu-button {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1001;
        }
        
        .mobile-menu-button span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px 0;
            transition: 0.4s;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-button {
                display: block;
            }
            
            .navbar__menu {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: #2c3e50;
                flex-direction: column;
                padding: 20px 0;
                z-index: 1000;
            }
            
            .navbar__menu.show {
                display: flex;
            }
            
            .navbar__menu li {
                margin: 10px 0;
            }
            
            .navbar__menu .dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                padding: 0;
            }
            
            .navbar__menu li:hover .dropdown {
                max-height: 500px;
                padding: 10px 0;
            }
        }
    </style>
    
    <!-- Odloženo učitavanje fontova -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    </noscript>
    
    <!-- Font Awesome sa atributom defer -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    </noscript>
    
    <!-- AOS animacije sa atributom defer -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </noscript>
    
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="{{ route('home') }}" class="navbar__logo">ДОМ ДУШКО РАДОВИЋ НИШ</a>
            
            <button class="mobile-menu-button" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="navbar__menu" id="navMenu">
                <li><a href="{{ route('home') }}">ПОЧЕТНА</a></li>
                <li>
                    <a href="{{ route('about.index') }}">О НАМА</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('about.index') }}#ko-smo-mi">КО СМО МИ</a></li>
                        <li><a href="{{ route('about.index') }}#zaposleni">ЗАПОСЛЕНИ</a></li>
                        <li><a href="{{ route('about.index') }}#istorijat">ИСТОРИЈАТ ЦЕНТРА</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">ДОКУМЕНТА</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('documents.reports') }}">ГОДИШЊИ ИЗВЕШТАЈИ</a></li>
                        <li><a href="{{ route('documents.procurement') }}">ЈАВНЕ НАБАВКЕ</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('news.index') }}">ВЕСТИ</a></li>
                <li><a href="{{ route('contact') }}">КОНТАКТ</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-gradient"></div>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    
                    <p class="footer-description">
                        Дом за децу и омладину „Душко Радовић“ је место где свако дете може да пронађе свој пут ка срећном детињству и светлој будућности.
        
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-links">
                    <h3>Брзи линкови    </h3>
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
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Гутенбергова 4a, Niš</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+381 216 168</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@domduskoradovic-nis.rs</span>
                        </li>
                    </ul>
                </div>

                <div class="footer-newsletter">
                    <h3>Будите у току </h3>
                    <p>Пријавите се на наш newsletter и будите први који ће сазнати наше новости.</p>
                    <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Vaša email adresa" required>
                            <button type="submit" class="btn-subscribe">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; {{ date('Y') }} Дом за децу и омладину „Душко Радовић“ Ниш. Сва права задржана.</p>
                </div>
                <div class="footer-legal">
                    <a href="{{ route('legal.privacy') }}">Правила приватности</a>
                    <a href="{{ route('legal.terms') }}"> Услови коришћења</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script>
        // Odloženo učitavanje AOS inicijalizacije
        document.addEventListener('DOMContentLoaded', function() {
            // Mobilna navigacija
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function() {
                    navMenu.classList.toggle('show');
                });
            }
            
            // Lazy učitavanje AOS-a
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    offset: 50
                });
            } else {
                // Ako AOS nije učitan, učitaj ga
                const aosScript = document.createElement('script');
                aosScript.src = 'https://unpkg.com/aos@2.3.1/dist/aos.js';
                aosScript.onload = function() {
                    AOS.init({
                        duration: 800,
                        easing: 'ease-in-out',
                        once: true,
                        offset: 50
                    });
                };
                document.body.appendChild(aosScript);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
