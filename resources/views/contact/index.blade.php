@extends('layouts.app')

@section('title', 'Контакт')

@section('content')
<style>
    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 3rem;
        margin-bottom: 4rem;
        position: relative;
        z-index: 1;
    }
    
    @media (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
    }
</style>
<div class="contact-page">
    <div class="contact-header">
        <h1 class="section-title">Контактирајте нас</h1>
        <p class="lead-text">Стојимо вам на располагању за сва питања, сугестије или потребне информације.</p>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-header">
                        <h2>Контакт информације</h2>
                        <p>Дом за децу и омладину „Душко Радовић" Ниш</p>
                    </div>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="item-content">
                                <h3>Адреса</h3>
                                <p>Гутенбергова 4А, 18000 Ниш</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="item-content">
                                <h3>Телефон</h3>
                                <p><a href="tel:+381182161168">018 216168</a></p>
                                
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="item-content">
                                <h3>Емаил</h3>
                                <p><a href="mailto:info@domduskoradovic-nis.rs">info@domduskoradovic-nis.rs</a></p>
                                
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-clock"></i>
                            </div>
                            <div class="item-content">
                                <h3>Радно време</h3>
                                <p>Понедељак - Петак: 08:00 - 16:00</p>
                                <p><small>*Установа ради 24/7, али је администрација доступна у наведеном термину</small></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-id-card"></i>
                            </div>
                            <div class="item-content">
                                <h3>Додатне информације</h3>
                                <p>ПИБ: 101531745 </p>
                                <p>Матични број: 07333889</p>
                            </div>
                        </div>
                    </div>
                    
                  

            <div class="col-md-8">
                <div class="contact-form">
                    <div class="form-header">
                        <h2>Пошаљите нам поруку</h2>
                        <p>Попуните формулар испод и одговорићемо вам у најкраћем могућем року.</p>
                    </div>
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Име и презиме</label>
                                <input type="text" id="name" name="name" required class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Емаил адреса</label>
                                <input type="email" id="email" name="email" required class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Наслов</label>
                            <input type="text" id="subject" name="subject" required class="@error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Порука</label>
                            <textarea id="message" name="message" rows="5" required class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="privacy-policy-check">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <label for="privacy">Прочитао/ла сам и прихватам <a href="{{ route('legal.privacy') }}">политику приватности</a></label>
                            </div>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Пошаљи поруку</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-map-section">
        <div class="map-header">
            <h2>Како до нас</h2>
            <p>Налазимо се у мирном делу града, у близини центра Ниша</p>
        </div>
        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1466669.3133127156!2d19.973831525!3d44.112482169574044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0e62f4c6b83%3A0xf7f17fe078b51ecd!2z0JTQvtC8INC30LAg0LTQtdGG0YMg0Lgg0L7QvNC70LDQtNC40L3RgyDigJ7QlNGD0YjQutC-INCg0LDQtNC-0LLQuNGb4oCc!5e0!3m2!1sen!2srs!4v1740337047865!5m2!1sen!2srs"
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    
    <div class="faq-section">
        <div class="container">
            <h2 class="section-title">Често постављана питања</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Како могу да донирам средства Дому?</h3>
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Можете донирати средства директно на рачун установе: 840-XXXXX-XX. За више информација о донацијама, молимо вас да нас контактирате директно путем телефона или емаила.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Да ли је могуће волонтирати у Дому?</h3>
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Да, увек смо отворени за волонтере који желе да помогну нашим корисницима. Потребно је да попуните пријаву за волонтирање и прођете кратку обуку. Контактирајте нас за више детаља.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Како могу да посетим Дом?</h3>
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Посете Дому су могуће уз претходну најаву и договор са управом установе. Молимо вас да нас контактирате телефоном како бисмо договорили термин посете.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.contact-page {
    padding-bottom: 4rem;
}

.contact-header {
    text-align: center;
    padding: 3rem 0;
    background-color: #f8f9fa;
    margin-bottom: 3rem;
}

.contact-header .section-title {
    margin-bottom: 1rem;
    color: #007bff;
}

.contact-header .lead-text {
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.2rem;
    color: #555;
}

.contact-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto 4rem;
    padding: 0 1rem;
}

@media (max-width: 992px) {
    .contact-container {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

.info-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    padding: 2rem;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.info-header {
    margin-bottom: 2rem;
    border-bottom: 1px solid #eee;
    padding-bottom: 1rem;
}

.info-header h2 {
    color: #007bff;
    margin-bottom: 0.5rem;
}

.info-header p {
    color: #555;
    font-size: 1.1rem;
}

.info-items {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    transition: transform 0.3s ease;
}

.info-item:hover {
    transform: translateX(5px);
}

.icon-wrapper {
    width: 50px;
    height: 50px;
    background-color: #007bff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.item-content h3 {
    margin: 0 0 0.5rem;
    font-size: 1.1rem;
    color: #333;
}

.item-content p {
    margin: 0 0 0.3rem;
    color: #555;
}

.item-content a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.item-content a:hover {
    color: #0056b3;
    text-decoration: underline;
}

.social-links {
    margin-top: auto;
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
}

.social-links h3 {
    font-size: 1.1rem;
    margin-bottom: 1rem;
    color: #333;
}

.social-icons {
    display: flex;
    gap: 1rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #007bff;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background-color: #007bff;
    color: white;
    transform: translateY(-3px);
}

.contact-form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    padding: 2rem;
}

.form-header {
    margin-bottom: 2rem;
    text-align: center;
}

.form-header h2 {
    color: #007bff;
    margin-bottom: 0.5rem;
}

.form-header p {
    color: #555;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    margin-bottom: 1rem;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #333;
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
    outline: none;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.privacy-policy-check {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.privacy-policy-check input {
    width: auto;
}

.submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

.alert {
    padding: 1rem;
    border-radius: 5px;
    margin-bottom: 1.5rem;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.contact-map-section {
    max-width: 1200px;
    margin: 0 auto 4rem;
    padding: 0 1rem;
}

.map-header {
    text-align: center;
    margin-bottom: 2rem;
}

.map-header h2 {
    color: #007bff;
    margin-bottom: 0.5rem;
}

.map-header p {
    color: #555;
}

.contact-map {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.faq-section {
    background-color: #f8f9fa;
    padding: 4rem 0;
}

.faq-section .section-title {
    text-align: center;
    margin-bottom: 3rem;
    color: #007bff;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    margin-bottom: 1rem;
    overflow: hidden;
}

.faq-question {
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.faq-question h3 {
    margin: 0;
    font-size: 1.1rem;
    color: #333;
}

.faq-toggle {
    color: #007bff;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 1.5rem 1.5rem;
    display: none;
}

.faq-item.active .faq-answer {
    display: block;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ toggle functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>
@endpush
