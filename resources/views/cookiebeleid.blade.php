@extends('layouts.app')

@section('title', 'Cookiebeleid')
@section('meta_description', 'Cookiebeleid van Techniek College Keuzedeel Portaal')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cookiebeleid.css') }}">
@endsection

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge">Juridisch</span>
            <h1 class="page-hero__title">Cookiebeleid</h1>
            <p class="page-hero__description">Hoe wij cookies gebruiken om uw ervaring te verbeteren</p>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-card">
            <h2 class="content-card__title">Cookie Informatie</h2>
            <p class="content-card__subtitle">Laatst bijgewerkt: december 2025</p>
            
            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                    1. Wat zijn cookies?
                </h3>
                <p class="content-block__text">Cookies zijn kleine tekstbestanden die door websites op uw apparaat worden geplaatst. Ze worden veel gebruikt om websites efficiënter te laten werken en om informatie te verstrekken aan de eigenaren van de website.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11H3v2h6v-2zm0-4H3v2h6V7zm0 8H3v2h6v-2zm12-4h-6v2h6v-2zm0-4h-6v2h6V7zm0 8h-6v2h6v-2z"/>
                    </svg>
                    2. Hoe gebruiken wij cookies?
                </h3>
                <p class="content-block__text">Wij gebruiken cookies om:</p>
                <ul class="content-block__list">
                    <li>De functionaliteit van onze website te garanderen</li>
                    <li>Gebruikersvoorkeuren te onthouden</li>
                    <li>Statistieken te verzamelen over het gebruik van onze website</li>
                    <li>De gebruikerservaring te verbeteren</li>
                    <li>Inloggegevens veilig te bewaren tijdens uw sessie</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                    3. Soorten cookies
                </h3>
                <p class="content-block__text">Wij gebruiken de volgende soorten cookies:</p>
                <ul class="content-block__list">
                    <li><strong>Noodzakelijke cookies:</strong> Essentieel voor de werking van de website</li>
                    <li><strong>Functionele cookies:</strong> Helpen bij het onthouden van uw voorkeuren</li>
                    <li><strong>Analytische cookies:</strong> Helpen ons te begrijpen hoe bezoekers onze website gebruiken</li>
                    <li><strong>Sessie cookies:</strong> Tijdelijke cookies die verdwijnen na het sluiten van de browser</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    4. Uw privacy
                </h3>
                <p class="content-block__text">Wij respecteren uw privacy. De cookies die wij gebruiken bevatten geen persoonlijke informatie die direct tot u herleidbaar is. Voor meer informatie over hoe wij omgaan met uw gegevens, zie ons <a href="/privacy" class="content-block__link">privacybeleid</a>.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                        <polyline points="15 3 21 3 21 9"/>
                        <line x1="10" y1="14" x2="21" y2="3"/>
                    </svg>
                    5. Uw rechten en controle
                </h3>
                <p class="content-block__text">U heeft volledige controle over cookies. U kunt:</p>
                <ul class="content-block__list">
                    <li>Cookies weigeren via uw browserinstellingen</li>
                    <li>Reeds geplaatste cookies verwijderen</li>
                    <li>Uw toestemming op elk moment intrekken</li>
                    <li>Instellen dat u gewaarschuwd wordt voordat cookies worden geplaatst</li>
                </ul>
                <p class="content-block__text">Let op: het uitschakelen van bepaalde cookies kan de functionaliteit van onze website beperken.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    6. Contact
                </h3>
                <p class="content-block__text">Als u vragen heeft over ons cookiebeleid, neem dan contact met ons op via <a href="mailto:privacy@techniekcollege.nl" class="content-block__link">privacy@techniekcollege.nl</a> of bezoek onze <a href="/veelgestelde-vragen" class="content-block__link">veelgestelde vragen</a> pagina.</p>
            </div>
        </div>
    </div>
</section>
@endsection
