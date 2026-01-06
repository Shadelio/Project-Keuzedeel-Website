@extends('layouts.app')

@section('title', 'Privacybeleid')
@section('meta_description', 'Privacybeleid van Techniek College Keuzedeel Portaal')

@section('content')
<section class="page-hero">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge">Juridisch</span>
            <h1 class="page-hero__title">Privacybeleid</h1>
            <p class="page-hero__description">Hoe wij omgaan met jouw persoonsgegevens</p>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-card">
            <h2 class="content-card__title">Privacyverklaring</h2>
            <p class="content-card__subtitle">Laatst bijgewerkt: december 2025</p>
            
            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    1. Inleiding
                </h3>
                <p class="content-block__text">Techniek College respecteert de privacy van alle gebruikers van onze website en draagt er zorg voor dat de persoonlijke informatie die je ons verschaft vertrouwelijk wordt behandeld. Wij gebruiken je gegevens om het gebruik van onze diensten zo makkelijk mogelijk te maken.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    2. Welke gegevens verzamelen wij?
                </h3>
                <p class="content-block__text">Wij verzamelen de volgende persoonsgegevens:</p>
                <ul class="content-block__list">
                    <li>Naam en achternaam</li>
                    <li>E-mailadres (schoolaccount)</li>
                    <li>Studentnummer</li>
                    <li>Opleiding en studiejaar</li>
                    <li>Voortgangsgegevens van keuzedelen</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    3. Waarvoor gebruiken wij je gegevens?
                </h3>
                <p class="content-block__text">Wij gebruiken je gegevens voor:</p>
                <ul class="content-block__list">
                    <li>Het aanmaken en beheren van je account</li>
                    <li>Het bijhouden van je studievoortgang</li>
                    <li>Communicatie over je keuzedelen en opdrachten</li>
                    <li>Het verbeteren van onze dienstverlening</li>
                </ul>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    4. Bewaartermijn
                </h3>
                <p class="content-block__text">Wij bewaren je gegevens niet langer dan strikt noodzakelijk is om de doelen te realiseren waarvoor je gegevens worden verzameld. Na beëindiging van je studie worden je gegevens binnen 2 jaar verwijderd.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    5. Jouw rechten
                </h3>
                <p class="content-block__text">Je hebt het recht om je persoonsgegevens in te zien, te corrigeren of te verwijderen. Neem hiervoor contact op met de schooladministratie.</p>
            </div>

            <div class="content-block">
                <h3 class="content-block__title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    6. Contact
                </h3>
                <p class="content-block__text">Voor vragen over ons privacybeleid kun je contact opnemen via <a href="mailto:privacy@techniekcollege.nl" class="content-block__link">privacy@techniekcollege.nl</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
