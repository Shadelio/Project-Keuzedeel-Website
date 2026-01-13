@extends('layouts.app')

@section('title', 'Opleidingen')
@section('meta_description', 'Bekijk alle technische MBO-opleidingen van Techniek College Rotterdam')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
/* Opleidingen Page Styles */
.opleidingen-hero {
    background: var(--gradient-dark);
    padding: 120px 0 60px;
    position: relative;
}

.opleidingen-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(ellipse 800px 600px at 30% 20%, rgba(242, 183, 5, 0.15), transparent),
        radial-gradient(ellipse 600px 400px at 70% 80%, rgba(232, 93, 4, 0.1), transparent);
    pointer-events: none;
}

.opleidingen-hero__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}

.opleidingen-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(242, 183, 5, 0.15);
    color: var(--primary);
    font-size: 13px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 9999px;
    margin-bottom: 24px;
    border: 1px solid rgba(242, 183, 5, 0.3);
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.opleidingen-hero__badge svg {
    width: 16px;
    height: 16px;
}

.opleidingen-hero__title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    color: white;
    margin: 0 0 20px;
    line-height: 1.1;
}

.opleidingen-hero__title span {
    color: var(--primary);
}

.opleidingen-hero__text {
    font-size: 1.15rem;
    color: rgba(255,255,255,0.8);
    max-width: 600px;
    line-height: 1.7;
    margin: 0;
}

.opleidingen-hero__stats {
    display: flex;
    gap: 48px;
    margin-top: 40px;
}

.opleidingen-hero__stat {
    text-align: left;
}

.opleidingen-hero__stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    display: block;
}

.opleidingen-hero__stat-label {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
}

/* Opleidingen Grid */
.opleidingen-section {
    padding: 80px 0;
    background: var(--light-gray);
}

.opleidingen-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.opleidingen-section__header {
    text-align: center;
    margin-bottom: 48px;
}

.opleidingen-section__title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 12px;
}

.opleidingen-section__subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    margin: 0;
}

.opleidingen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 24px;
}

.opleiding-card {
    background: white;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    text-decoration: none;
    display: block;
    border: 1px solid rgba(0,0,0,0.05);
}

.opleiding-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.15);
}

.opleiding-card__header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}

.opleiding-card__icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.opleiding-card__icon svg {
    width: 28px;
    height: 28px;
    stroke: white;
}

.opleiding-card__info {
    flex: 1;
}

.opleiding-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 4px;
}

.opleiding-card__niveau {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(242, 183, 5, 0.1);
    color: #b8860b;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.opleiding-card__description {
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0 0 20px;
}

.opleiding-card__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}

.opleiding-card__tag {
    background: var(--light-gray);
    color: var(--text-muted);
    font-size: 0.8rem;
    padding: 6px 12px;
    border-radius: 6px;
}

.opleiding-card__link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary);
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.opleiding-card__link:hover {
    gap: 12px;
}

.opleiding-card__link svg {
    width: 18px;
    height: 18px;
}

/* CTA Section */
.opleidingen-cta {
    background: var(--gradient-dark);
    padding: 80px 0;
    text-align: center;
}

.opleidingen-cta__container {
    max-width: 700px;
    margin: 0 auto;
    padding: 0 24px;
}

.opleidingen-cta__title {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    margin: 0 0 16px;
}

.opleidingen-cta__title span {
    color: var(--primary);
}

.opleidingen-cta__text {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.8);
    margin: 0 0 32px;
}

.opleidingen-cta__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--gradient-primary);
    color: black;
    font-weight: 600;
    font-size: 1rem;
    padding: 16px 32px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 40px -10px rgba(242, 183, 5, 0.3);
}

.opleidingen-cta__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(242, 183, 5, 0.5);
}

.opleidingen-cta__btn svg {
    width: 20px;
    height: 20px;
}

@media (max-width: 768px) {
    .opleidingen-hero__stats {
        flex-direction: column;
        gap: 24px;
    }
    
    .opleidingen-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="opleidingen-hero">
    <div class="opleidingen-hero__container">
        <span class="opleidingen-hero__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path d="M12 14v7"/>
            </svg>
            MBO Opleidingen
        </span>
        <h1 class="opleidingen-hero__title">
            Alle TCR <span>Opleidingen</span>
        </h1>
        <p class="opleidingen-hero__text">
            Ontdek ons complete aanbod van technische MBO-opleidingen. Van Software Development tot Autotechniek - wij leiden je op voor een succesvolle carrière in de techniek.
        </p>
        <div class="opleidingen-hero__stats">
            <div class="opleidingen-hero__stat">
                <span class="opleidingen-hero__stat-number">140+</span>
                <span class="opleidingen-hero__stat-label">Technische opleidingen</span>
            </div>
            <div class="opleidingen-hero__stat">
                <span class="opleidingen-hero__stat-number">10.000+</span>
                <span class="opleidingen-hero__stat-label">Studenten</span>
            </div>
            <div class="opleidingen-hero__stat">
                <span class="opleidingen-hero__stat-number">95%</span>
                <span class="opleidingen-hero__stat-label">Baangarantie</span>
            </div>
        </div>
    </div>
</section>

<!-- Opleidingen Grid -->
<section class="opleidingen-section">
    <div class="opleidingen-container">
        <div class="opleidingen-section__header">
            <h2 class="opleidingen-section__title">Kies jouw richting</h2>
            <p class="opleidingen-section__subtitle">Selecteer een opleiding om meer te ontdekken over de mogelijkheden</p>
        </div>

        <div class="opleidingen-grid">
            <!-- Software & Online -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Software & Online</h3>
                        <span class="opleiding-card__niveau">Niveau 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Leer programmeren, websites bouwen en applicaties ontwikkelen. Word software developer, web developer of IT-specialist.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Programmeren</span>
                    <span class="opleiding-card__tag">Webdevelopment</span>
                    <span class="opleiding-card__tag">Apps</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Logistiek -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Logistiek</h3>
                        <span class="opleiding-card__niveau">Niveau 2, 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Word expert in transport, magazijnbeheer en supply chain management. De Rotterdamse haven biedt eindeloze mogelijkheden.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Transport</span>
                    <span class="opleiding-card__tag">Magazijn</span>
                    <span class="opleiding-card__tag">Supply Chain</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Autotechniek -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Autotechniek</h3>
                        <span class="opleiding-card__niveau">Niveau 2, 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Leer alles over auto's, van onderhoud tot elektrische voertuigen. Word autotechnicus of diagnosetechnicus.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Onderhoud</span>
                    <span class="opleiding-card__tag">Elektrisch</span>
                    <span class="opleiding-card__tag">Diagnose</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Elektrotechniek -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Elektrotechniek</h3>
                        <span class="opleiding-card__niveau">Niveau 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Word specialist in elektrische installaties, automatisering en energietechniek. Een toekomstbestendige keuze.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Installaties</span>
                    <span class="opleiding-card__tag">Automatisering</span>
                    <span class="opleiding-card__tag">Energie</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Werktuigbouwkunde -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z"/>
                            <path d="M4.867 19.125h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Werktuigbouwkunde</h3>
                        <span class="opleiding-card__niveau">Niveau 2, 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Leer machines ontwerpen, bouwen en onderhouden. Word constructeur, monteur of CNC-operator.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Constructie</span>
                    <span class="opleiding-card__tag">CNC</span>
                    <span class="opleiding-card__tag">Metaal</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Installatietechniek -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Installatietechniek</h3>
                        <span class="opleiding-card__niveau">Niveau 2 & 3</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Word specialist in verwarmings-, ventilatie- en koelinstallaties. Duurzame energie is de toekomst.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Verwarming</span>
                    <span class="opleiding-card__tag">Ventilatie</span>
                    <span class="opleiding-card__tag">Duurzaam</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Bouwkunde -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Bouwkunde</h3>
                        <span class="opleiding-card__niveau">Niveau 2, 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Leer bouwen, verbouwen en renoveren. Van timmerman tot projectleider - bouw aan je toekomst.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Timmeren</span>
                    <span class="opleiding-card__tag">Bouwkunde</span>
                    <span class="opleiding-card__tag">Projecten</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Procestechniek -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 15.5m14.8-.2l-.893 2.977a2.008 2.008 0 01-1.872 1.425H6.965a2.008 2.008 0 01-1.872-1.425L4.2 15.3"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Procestechniek</h3>
                        <span class="opleiding-card__niveau">Niveau 3 & 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Werk in de chemische industrie, raffinaderijen of voedingsmiddelenindustrie. Rotterdam is dé procestechniek-hub.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Chemie</span>
                    <span class="opleiding-card__tag">Productie</span>
                    <span class="opleiding-card__tag">Veiligheid</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mechatronica -->
            <div class="opleiding-card">
                <div class="opleiding-card__header">
                    <div class="opleiding-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                        </svg>
                    </div>
                    <div class="opleiding-card__info">
                        <h3 class="opleiding-card__title">Mechatronica</h3>
                        <span class="opleiding-card__niveau">Niveau 4</span>
                    </div>
                </div>
                <p class="opleiding-card__description">
                    Combineer mechanica, elektronica en ICT. Word specialist in robotica, automatisering en smart industry.
                </p>
                <div class="opleiding-card__tags">
                    <span class="opleiding-card__tag">Robotica</span>
                    <span class="opleiding-card__tag">Automatisering</span>
                    <span class="opleiding-card__tag">Smart Industry</span>
                </div>
                <a href="#" class="opleiding-card__link">
                    Bekijk opleiding
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="opleidingen-cta">
    <div class="opleidingen-cta__container">
        <h2 class="opleidingen-cta__title">Klaar om te <span>starten</span>?</h2>
        <p class="opleidingen-cta__text">
            Neem contact met ons op voor meer informatie over onze opleidingen of meld je direct aan.
        </p>
        <a href="/register" class="opleidingen-cta__btn">
            Aanmelden
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
