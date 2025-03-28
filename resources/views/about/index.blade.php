@extends('layouts.app')

@section('content')
<!-- Ko smo mi sekcija -->
<section id="ko-smo-mi" class="about-section">
    <div class="container">
        <h2 class="section-title">Ко смо ми</h2>
        <div class="about-content">
            <p class="lead-text">Дом за децу и омладину „Душко Радовић" Ниш је установа социјалне заштите за смештај деце и младих, основана 1984. године од стране Самоуправне интересне заједнице социјалне заштите- Ниш, као „Дом породица".    </p>
            <p>Кроз индивидуални приступ и посвећеност сваком детету, стварамо простор где се таленти развијају, а снови остварују. Наш тим стручњака свакодневно ради на унапређењу квалитета живота наших штићеника.</p>
        </div>
    </div>
</section>

<!-- Zaposleni sekcija -->
<section id="zaposleni" class="team-section">
    <div class="container">
        <h2 class="section-title">Наш тим</h2>
        <div class="team-grid">
            @foreach($employees as $employee)
            <div class="team-card">
                <div class="team-card-image">
                    @if($employee->image)
                        <img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}">
                    @else
                        <img src="{{ asset('images/team/placeholder.jpg') }}" alt="{{ $employee->name }}">
                    @endif
                    <div class="team-card-overlay">
                        <div class="contact-info">
                            @if($employee->email)
                            <a href="mailto:{{ $employee->email }}" class="contact-link" data-tooltip="Пошаљи email">
                                <i class="fa fa-envelope"></i>
                            </a>
                            @endif
                            @if($employee->phone)
                            <a href="tel:{{ $employee->phone }}" class="contact-link" data-tooltip="Позови">
                                <i class="fa fa-phone"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="team-card-content">
                    <h3>{{ $employee->name }}</h3>
                    <p class="position">{{ $employee->position }}</p>
                    @if($employee->bio)
                        <div class="bio">{!! $employee->bio !!}</div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Istorijat sekcija -->
<section id="istorijat" class="history-section">
    <div class="container">
        <h2 class="section-title">Наш историјат</h2>
        <div class="history-content">
            <p>Првобитни концепт функционисања установе био је такав да су васпитачи са својим породицама живели у Дому, у двособним становима, који су се налазили при свакој васпитној групи, те водили целодневну бригу о деци без родитељског старања (24/7).</p>
            
            <p>Почев од 1991. године, на основу Закона о социјалној заштити и обезбеђивању социјалне сигурности грађана ("Сл. гласник РС", бр. 36/91, 79/91, 33/93, 53/93, 67/93, 46/94, 48/94, 52/96, 29/2001, 84/2004,101/2005 - др. закон и 115/2005), оснивачка права над домовима за децу преузела је Влада Републике Србије у складу са одлуком о мрежи установа социјалне заштите. Оснивач Дома, као установе социјалне заштите, је од 1991. године Република Србија, од када се мења и концепт функционисања установе, која са модела „Дом породица" прелази на класично, сменско функционисање.</p>
            
            <p>Дом је током свог развојног пута од оснивања до данас прошао многе трансформације, које су биле у тесној вези са укупним друштвеним променама.</p>
            
            <p>Данас, Дом за децу и омладину „Душко Радовић" је установа социјалне заштите која, према Уредби о мрежи установа социјалне заштите („Сл. гласник РС" бр. 16/12 и 12/13 ), врши збрињавање деце и младих без родитељског старања и деце и младих са сметњама у развоју, са укупним смештајним капацитетом за обе корисничке групе од 36 корисника (24+12), и са капацитетом од 48 корисника за додатне услуге.</p>
            
            <p>Дом у актуелном тренутку пружа следеће услуге:</p>
            <ul>
                <li>Услугу домског смештаја за децу и младе без родитељског старања (Домски смештај);</li>
                <li>Услугу домског смештаја за децу и младе са сметњама у развоју (Мала домска заједница);</li>
                <li>Услугу ургентног збрињавања деце и младих- оба пола, која су изненада остала без смештаја или из других разлога морају бити збринута ван своје породице, која се нађу у скитњи и у другим случајевима када им је неопходно организовано збрињавање, до изналажења најадекватнијег облика заштите (Прихватилиште);</li>
            </ul>
            
            <p>Услуга смештаја у прихватилиште за децу и младе предвиђена Одлуком о правима из области социјалне заштите на територији Града Ниша („Сл.лист Града Ниша", бр. 101/12, 96/2013, 44/2014, 118/18, 18/19, 63/19 и 92/20, 131/22, 116/2023 и 151/24) организује се у Дому за децу и омладину „Душко Радовић" Ниш. Уговором о прихватању учешћа и финансирању Пројекта „Прихватилиште за децу и младе" дефинисана су сва права, обавезе и одговорности партнера на реализацији пројекта, као и број запослених за рад са корисницима – 7 васпитача(5 стручних радника и 2 стручна сарадника). Према решењу надлежног министарства одобрени број запослених је 38. Тренутно је у установи запослено 29 радника.</p>
        </div>
    </div>
</section>

<!-- Organizaciona struktura sekcija -->
<section id="organizaciona-struktura" class="org-structure-section">
    <div class="container">
        <h2 class="section-title">Организациона структура</h2>
        
        <div class="org-chart">
            <div class="org-level level-1">
                <div class="org-box">
                    <h3>Управни одбор</h3>
                </div>
            </div>
            
            <div class="org-level level-1">
                <div class="org-box">
                    <h3>Надзорни одбор</h3>
                </div>
            </div>
            
            <div class="org-level level-2">
                <div class="org-box">
                    <h3>Директор</h3>
                </div>
            </div>
            
            <div class="org-level level-3">
                <div class="org-box">
                    <h3>Васпитна служба</h3>
                </div>
                <div class="org-box">
                    <h3>Служба општих, правних и техничких послова</h3>
                </div>
                <div class="org-box">
                    <h3>Рачуноводствена служба</h3>
                </div>
            </div>
        </div>
        
        <div class="org-description">
            <p>Запослени у установи су организовани у три основне службе:</p>
            <ul>
                <li>Васпитна служба;</li>
                <li>Служба општих, правних и техничких послова и</li>
                <li>Рачуноводствена служба.</li>
            </ul>
            
            <p>Рад свих служби обједињује директор.</p>
            
            <p>Васпитна служба која актуелно броји 16 запослених и то: 8 васпитача и 2 стручна радника у стручном тиму (социјални радник и психолог), и 6 неговатеља у посебним условима.</p>
            
            <p>Служба општих, правних и техничких послова, и то: правник-секретар, 3 кувара, 1 кројач, 2 домара/мајстора одржавања, 2 спремачице, 1 пословни секретар.</p>
            
            <p>Рачуноводствену службу чини руководилац финансијско-рачуноводствених послова и 1 референт за финансијско-рачуноводствене послове.</p>
        </div>
    </div>
</section>

<!-- Misija, vizija i vrednosti sekcija -->
<section id="misija-vizija" class="mission-section">
    <div class="container">
        <div class="mission-card">
            <h2 class="section-title">Мисија Дома за децу и омладину „Душко Радовић" Ниш</h2>
            <p>Мисија установе је квалитетна брига о сваком детету, обезбеђивање психо-социјалне подршке, учење животних вештина, задовољење свих његових потреба, развијање и неговање његових способности и талената, социјална инклузија корисника који излазе из система и безболна транзиција ка независном животу.</p>
        </div>
        
        <div class="mission-card">
            <h2 class="section-title">Основна визија Дома за децу и омладину „Душко Радовић" Ниш</h2>
            <p>Основна визија је да установа буде намењена смештају малог броја деце и организована око потреба и права детета. Организација установе треба да буде што сличнија породици, мора да гарантује индивидуализовану пажњу и персонализован, стабилан и трајан однос корисника и професионалаца запослених у установи.</p>
            
            <p>Установа развија индивидуализовани приступ и персонализовану бригу корисницима - корисник се посматра као индивидуа, перманентно се подстичу његови таленти и интересовања, негују се и подстичу везе са биолошком породицом.</p>
        </div>
        
        <div class="mission-card">
            <h2 class="section-title">Вредности Дома за децу и омладину „Душко Радовић" Ниш</h2>
            <ul>
                <li>Поштовање људских права, права детета и инклузивности;</li>
                <li>Уважавање и прихватање различитости личности и потреба, интересовања и права на избор;</li>
                <li>Одговорност (савесност, примењивање договорених правила, оптимално управљање ресурсима установе и корисника);</li>
                <li>Професионалност (стручност, самосвест / саморефлексивност).</li>
            </ul>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.team-section {
    padding: 4rem 0;
    background-color: #f8f9fa;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
    max-width: 1400px;
    margin-left: auto;
    margin-right: auto;
}

@media (max-width: 1400px) {
    .team-grid {
        grid-template-columns: repeat(3, minmax(250px, 1fr));
        max-width: 1200px;
    }
}

@media (max-width: 1200px) {
    .team-grid {
        grid-template-columns: repeat(2, minmax(250px, 1fr));
        max-width: 800px;
    }
}

@media (max-width: 768px) {
    .team-grid {
        grid-template-columns: minmax(250px, 1fr);
        max-width: 400px;
    }
}

.team-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
}

.team-card-image {
    position: relative;
    padding-top: 100%; /* 1:1 Aspect Ratio */
    overflow: hidden;
}

.team-card-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.team-card:hover .team-card-overlay {
    opacity: 1;
}

.contact-info {
    display: flex;
    gap: 1rem;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 0 1rem;
}

.contact-link {
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
}

.contact-link:hover {
    background: #007bff;
    color: white;
    transform: translateY(-3px);
}

.contact-link[data-tooltip]:before {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    margin-bottom: 5px;
    background: #333;
    color: white;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.contact-link[data-tooltip]:hover:before {
    opacity: 1;
    visibility: visible;
}

.team-card-content {
    padding: 1.5rem;
}

.team-card-content h3 {
    margin: 0;
    font-size: 1.2rem;
    color: #333;
}

.position {
    color: #666;
    font-size: 0.9rem;
    margin-top: 0.3rem;
    margin-bottom: 0.8rem;
}

.bio {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.5;
}

/* Istorijat sekcija */
.history-section {
    padding: 4rem 0;
    background-color: #fff;
}

.history-content {
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.8;
}

.history-content p {
    margin-bottom: 1.5rem;
    text-align: justify;
}

.history-content ul {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.history-content li {
    margin-bottom: 0.5rem;
}

/* Organizaciona struktura */
.org-structure-section {
    padding: 4rem 0;
    background-color: #f8f9fa;
}

.org-chart {
    max-width: 1200px;
    margin: 0 auto 3rem;
}

.org-level {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 2rem;
    position: relative;
}

.org-level:not(:last-child):after {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #007bff;
    top: 100%;
    left: 50%;
    height: 2rem;
    transform: translateX(-50%);
}

.org-box {
    background-color: #fff;
    border: 2px solid #007bff;
    border-radius: 10px;
    padding: 1.5rem;
    min-width: 200px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.org-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.org-box h3 {
    margin: 0;
    color: #007bff;
}

.org-description {
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.8;
}

.org-description p {
    margin-bottom: 1.5rem;
}

.org-description ul {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.org-description li {
    margin-bottom: 0.5rem;
}

/* Misija, vizija i vrednosti */
.mission-section {
    padding: 4rem 0;
    background-color: #fff;
}

.mission-card {
    background-color: #f8f9fa;
    border-radius: 10px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.mission-card h2 {
    color: #007bff;
    margin-top: 0;
    margin-bottom: 1.5rem;
}

.mission-card p {
    margin-bottom: 1rem;
    line-height: 1.8;
    text-align: justify;
}

.mission-card ul {
    padding-left: 2rem;
    line-height: 1.8;
}

.mission-card li {
    margin-bottom: 0.5rem;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .org-level.level-3 {
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    
    .org-level:not(:last-child):after {
        height: 1rem;
    }
}

@media (max-width: 768px) {
    .org-box {
        min-width: 180px;
        padding: 1rem;
    }
    
    .org-box h3 {
        font-size: 1rem;
    }
}
</style>
@endpush
