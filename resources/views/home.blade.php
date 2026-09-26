@extends('layouts.app')

@section('title', 'Почетна')

@section('content')
<section class="hero">
    <div class="hero__media">
        <img src="{{ asset('images/hero-dusko.png') }}" alt="Душко Радовић – цитат" class="hero__image">
    </div>
</section>

<section class="intro-section" id="intro">
    <div class="container">
        <h1 class="intro-title">Свако дете заслужује<br><span>сигуран дом и будућност</span></h1>
        <p class="intro-text">
            Дом за децу и омладину „Душко Радовић“ пружа љубав, бригу и подршку деци без одговарајућег родитељског старања.
        </p>
        <div class="intro-actions">
            <a href="#o-nama" class="btn btn-primary">Ко смо ми</a>
            <button class="btn btn-outline-light" id="donateBtnIntro" style="border-color:rgba(255,255,255,.6);color:#fff;">Донирај</button>
        </div>
    </div>
</section>

<section class="section about-section" id="o-nama">
    <div class="container">
        <h2 class="section-title">Ко смо ми?</h2>
        <div class="section-content">
            <p>
                Дом за децу и омладину је облик институционалне заштите којим се обезбеђује збрињавање деце без одговарајућег родитељског старања, као и деце чији је развој ометен породичним приликама.
                Домским смештајем обезбеђује се нега, старање о здрављу, васпитање, помоћ у образовању и учење различитих социјалних вештина.
                Смештај у дому је привремен и траје све док то околности захтевају, односно до повратка детета у сопствену породицу, усвојења или оспособљења за самосталан живот.
            </p>
        </div>
    </div>
</section>

<section class="section cards-section">
    <div class="container">
        <div class="cards-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-hands-holding-child"></i></div>
                <h3 class="feature-title">Шта радимо</h3>
                <p class="feature-text">Пружамо свеобухватну бригу и подршку деци без родитељског старања, обезбеђујући им сигуран дом, квалитетно образовање и емотивну подршку за здрав развој.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bullseye"></i></div>
                <h3 class="feature-title">Наша мисија</h3>
                <p class="feature-text">Стварамо подстицајно окружење које омогућава деци да развију своје потенцијале, изграде самопоуздање и стекну вештине потребне за самосталан живот.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-heart"></i></div>
                <h3 class="feature-title">Наше вредности</h3>
                <p class="feature-text">Негујемо индивидуални приступ сваком детету, поштујемо различитости и подстичемо развој талената кроз љубав, разумевање и професионалну посвећеност.</p>
            </div>
        </div>
    </div>
</section>

<section class="section quotes-section">
    <div class="container">
        <h2 class="section-title">Цитати Душка Радовића</h2>
        <div class="swiper quotes-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="quote-card"><p class="quote-text">„Дете је недовршен човек, али је човек.“</p></div></div>
                <div class="swiper-slide"><div class="quote-card"><p class="quote-text">„Живот је леп, ако знаш како да га живиш. Ако не знаш како да живиш, питај дете. Оно зна.“</p></div></div>
                <div class="swiper-slide"><div class="quote-card"><p class="quote-text">„Ко не воли децу, није ни сам био дете.“</p></div></div>
                <div class="swiper-slide"><div class="quote-card"><p class="quote-text">„Деца су украс света.“</p></div></div>
                <div class="swiper-slide"><div class="quote-card"><p class="quote-text">„Будите добри према деци, она ће водити свет онда када ви то више не будете могли.“</p></div></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="section news-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Актуелности</h2>
            <a href="{{ route('news.index') }}" class="section-link">Све вести →</a>
        </div>
        <div class="swiper news-slider">
            <div class="swiper-wrapper">
                @foreach($news as $item)
                <div class="swiper-slide">
                    <article class="news-card">
                        <div class="news-card__image">
                            <img src="{{ asset('storage/' . $item->main_image) }}" alt="{{ $item->title }}" loading="lazy">
                        </div>
                        <div class="news-card__content">
                            <h3 class="news-card__title">{{ $item->title }}</h3>
                            <p class="news-card__excerpt">{{ $item->excerpt }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="news-card__button">Прочитај више</a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<section class="section impact-section">
    <div class="container">
        <div class="impact-grid">
            <div class="impact-content">
                <h2 class="impact-title">Заједно можемо више</h2>
                <p class="impact-subtitle">Свако дете заслужује прилику за срећно детињство</p>
                <div class="impact-stats">
                    <div class="stat-item" data-count="150">
                        <div class="stat-number">0</div>
                        <div class="stat-label">Деце којима смо помогли</div>
                    </div>
                    <div class="stat-item" data-count="40">
                        <div class="stat-number">0</div>
                        <div class="stat-label">Година постојања</div>
                    </div>
                    <div class="stat-item" data-count="95">
                        <div class="stat-number">0</div>
                        <div class="stat-label">% Успешних прича</div>
                    </div>
                </div>
                <div class="impact-text">
                    <p>Ваша подршка мења животе. Свака донација помаже да деца добију сигуран дом, образовање и љубав коју заслужују.</p>
                </div>
                <div class="impact-actions">
                    <button class="btn btn-primary btn-donate" id="donateBtn">
                        <i class="fas fa-heart"></i> Донирај
                    </button>
                </div>
            </div>
            <div class="impact-visual">
                <div class="impact-card">
                    <div class="card-icon"><i class="fas fa-gift"></i></div>
                    <h3>Донације</h3>
                    <p>Ваша донација обезбеђује:</p>
                    <ul>
                        <li>Школски прибор</li>
                        <li>Одећу и обућу</li>
                        <li>Образовне материјале</li>
                        <li>Спортску опрему</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="donationModal" role="dialog" aria-modal="true">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Направите промену данас</h2>
            <button class="modal-close" aria-label="Затвори">&times;</button>
        </div>
        <div class="modal-body">
            <div class="donation-intro">
                <p>Ваша донација помаже деци да остваре своје снове. Изаберите начин донације:</p>
            </div>
            <div class="donation-methods">
                <div class="donation-method">
                    <div class="method-icon"><i class="fas fa-university"></i></div>
                    <h3>Банковни трансфер</h3>
                    <div class="bank-details">
                        <p><strong>Прималац:</strong> Дом „Душко Радовић“</p>
                        <p><strong>Број рачуна:</strong> 840-XXXXXXXXX-XX</p>
                        <p><strong>Сврха уплате:</strong> Донација</p>
                    </div>
                </div>
                <div class="donation-method">
                    <div class="method-icon"><i class="fas fa-box-open"></i></div>
                    <h3>Материјалне донације</h3>
                    <p>Можете донирати:</p>
                    <ul>
                        <li>Школски прибор</li>
                        <li>Књиге</li>
                        <li>Одећу и обућу</li>
                        <li>Играчке</li>
                    </ul>
                </div>
            </div>
            <div class="donation-footer">
                <a href="{{ route('contact') }}" class="btn btn-outline"><i class="fas fa-envelope"></i> Контактирајте нас</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.quotes-slider', {
        slidesPerView: 1, loop: true,
        autoplay: { delay: 5500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        effect: 'fade', fadeEffect: { crossFade: true }
    });
    new Swiper('.news-slider', {
        slidesPerView: 1, spaceBetween: 24, loop: true,
        autoplay: { delay: 4500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
    });
    const stats = document.querySelectorAll('.stat-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.count);
                const numberEl = el.querySelector('.stat-number');
                let current = 0;
                const steps = 50, increment = target / steps;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) { numberEl.textContent = target; clearInterval(timer); }
                    else numberEl.textContent = Math.floor(current);
                }, 36);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    stats.forEach(s => observer.observe(s));
    const modal = document.getElementById('donationModal');
    function openModal() { modal.classList.add('modal-show'); document.body.style.overflow = 'hidden'; }
    function closeModal() { modal.classList.remove('modal-show'); document.body.style.overflow = ''; }
    document.getElementById('donateBtn').addEventListener('click', openModal);
    const introBtn = document.getElementById('donateBtnIntro');
    if (introBtn) introBtn.addEventListener('click', openModal);
    modal.querySelector('.modal-close').addEventListener('click', closeModal);
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
});
</script>
@endpush
