@extends('layouts.app')

@section('title', 'Toegankelijkheid')
@section('meta_description', 'Toegankelijkheidsverklaring van Techniek College Keuzedeel Portaal')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/toegankelijkheid.css') }}">
@endsection

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge">Toegankelijkheid</span>
            <h1 class="page-hero__title">Toegankelijkheidsverklaring</h1>
            <p class="page-hero__description">Onze website toegankelijk voor iedereen</p>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-card">
            <h2 class="content-card__title">Onze Toegankelijkheidsbelofte</h2>
            <p class="content-card__subtitle">Laatst bijgewerkt: december 2025</p>
            
            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    1. Onze missie
                </h3>
                <p class="content-block__text">Wij streven ernaar om onze website zo toegankelijk mogelijk te maken voor alle gebruikers, ongeacht hun beperkingen of de technologie die zij gebruiken. Iedereen moet gelijke toegang hebben tot onze diensten en informatie.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                    2. Wat doen wij aan toegankelijkheid?
                </h3>
                <p class="content-block__text">Om de toegankelijkheid van onze website te waarborgen, hebben wij de volgende maatregelen genomen:</p>
                <ul class="content-block__list">
                    <li>Semantische HTML5 markup voor duidelijke structuur</li>
                    <li>Contrasterende kleuren voor goede leesbaarheid</li>
                    <li>Alternatieve tekst voor alle afbeeldingen</li>
                    <li>Volledige toetsenbordnavigatie mogelijk</li>
                    <li>Responsief design voor alle schermgroottes</li>
                    <li>Duidelijke linkteksten en formulierlabels</li>
                    <li>Skiplinks voor snelle navigatie</li>
                    <li>Consistente navigatie en lay-out</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11l3 3L22 4"/>
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                    </svg>
                    3. WCAG Richtlijnen
                </h3>
                <p class="content-block__text">Wij voldoen aan de Web Content Accessibility Guidelines (WCAG) 2.1 niveau AA. Dit betekent:</p>
                <ul class="content-block__list">
                    <li><strong>Waarneembaar:</strong> Informatie en interface componenten zijn presenteerbaar op manieren die gebruikers kunnen waarnemen</li>
                    <li><strong>Bedienbaar:</strong> Interface componenten en navigatie zijn bedienbaar</li>
                    <li><strong>Begrijpelijk:</strong> Informatie en bediening van de interface zijn begrijpelijk</li>
                    <li><strong>Robuust:</strong> Content is robuust genoeg om betrouwbaar geïnterpreteerd te worden door diverse gebruikersagenten, waaronder hulptechnologieën</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                    4. Technische specificaties
                </h3>
                <p class="content-block__text">Deze website is gebouwd met moderne, toegankelijke technologieën:</p>
                <ul class="content-block__list">
                    <li>HTML5 voor semantische structuur</li>
                    <li>CSS3 voor visuele presentatie</li>
                    <li>JavaScript voor interactieve elementen</li>
                    <li>ARIA-attributen voor verbeterde toegankelijkheid</li>
                    <li>Laravel framework voor robuuste functionaliteit</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3"/>
                    </svg>
                    5. Bekende beperkingen
                </h3>
                <p class="content-block__text">Hoewel wij ons best doen, zijn er enkele onderdelen waar we nog aan werken:</p>
                <ul class="content-block__list">
                    <li>Sommige PDF-documenten zijn nog niet volledig toegankelijk</li>
                    <li>Oudere video's missen mogelijk ondertiteling</li>
                    <li>Complexe tabellen kunnen verbeterd worden voor screenreaders</li>
                </ul>
                <p class="content-block__text">Wij werken actief aan het oplossen van deze problemen.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                        <polyline points="17 8 12 3 7 8"/>
                        <line x1="12" y1="3" x2="12" y2="15"/>
                    </svg>
                    6. Feedback en hulp
                </h3>
                <p class="content-block__text">Ervaart u toegankelijkheidsproblemen? Laat het ons weten! Wij staan open voor feedback en helpen u graag.</p>
                <ul class="content-block__list">
                    <li><strong>E-mail:</strong> <a href="mailto:toegankelijkheid@techniekcollege.nl" class="content-block__link">toegankelijkheid@techniekcollege.nl</a></li>
                    <li><strong>Telefoon:</strong> 010 - 123 4567 (optie 3 voor toegankelijkheid)</li>
                    <li><strong>Adres:</strong> Schieweg 91, 3038 AJ Rotterdam</li>
                </ul>
                <p class="content-block__text">Wij streven ernaar binnen 5 werkdagen te reageren op uw feedback.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    7. Doorlopende verbetering
                </h3>
                <p class="content-block__text">Toegankelijkheid is een doorlopend proces. Wij blijven werken aan het verbeteren van onze website door:</p>
                <ul class="content-block__list">
                    <li>Regelmatige toegankelijkheidsaudits</li>
                    <li>Training van onze ontwikkelaars en content makers</li>
                    <li>Feedback van gebruikers serieus te nemen</li>
                    <li>Nieuwe technologieën en richtlijnen te volgen</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
