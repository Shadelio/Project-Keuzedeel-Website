@extends('layouts.app')

@section('title', 'Keuzedelen')
@section('meta_description', 'Bekijk alle keuzedelen van Techniek College Rotterdam - Verdiep je kennis met aanvullende modules')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
/* Keuzedelen Page Styles */
.keuzedelen-hero {
    background: var(--gradient-dark);
    padding: 120px 0 60px;
    position: relative;
}

.keuzedelen-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(ellipse 800px 600px at 30% 20%, rgba(200, 212, 0, 0.15), transparent),
        radial-gradient(ellipse 600px 400px at 70% 80%, rgba(200, 212, 0, 0.1), transparent);
    pointer-events: none;
}

.keuzedelen-hero__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}

.keuzedelen-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(200, 212, 0, 0.15);
    color: var(--primary);
    font-size: 13px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 9999px;
    margin-bottom: 24px;
    border: 1px solid rgba(200, 212, 0, 0.3);
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.keuzedelen-hero__badge svg {
    width: 16px;
    height: 16px;
}

.keuzedelen-hero__title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    color: white;
    margin: 0 0 20px;
    line-height: 1.1;
}

.keuzedelen-hero__title span {
    color: var(--primary);
}

.keuzedelen-hero__text {
    font-size: 1.15rem;
    color: rgba(255,255,255,0.8);
    max-width: 600px;
    line-height: 1.7;
    margin: 0 0 24px;
}

.keuzedelen-hero__stats {
    display: flex;
    gap: 48px;
    margin-top: 40px;
}

.keuzedelen-hero__stat {
    text-align: left;
}

.keuzedelen-hero__stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    display: block;
}

.keuzedelen-hero__stat-label {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
}

/* Keuzedelen Grid */
.keuzedelen-section {
    padding: 80px 0;
    background: var(--light-gray);
}

.keuzedelen-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.keuzedelen-section__header {
    text-align: center;
    margin-bottom: 48px;
}

.keuzedelen-section__title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 12px;
}

.keuzedelen-section__subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    margin: 0;
}

.keuzedelen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 24px;
}

.keuzedeel-card {
    background: white;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 6px -1px rgba(200, 212, 0, 0.1);
    transition: all 0.3s ease;
    text-decoration: none;
    display: block;
    border: 1px solid rgba(0,0,0,0.05);
}

.keuzedeel-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px -15px rgba(200, 212, 0, 0.15);
}

.keuzedeel-card__header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}

.keuzedeel-card__icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.keuzedeel-card__icon svg {
    width: 28px;
    height: 28px;
    stroke: white;
}

.keuzedeel-card__info {
    flex: 1;
}

.keuzedeel-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 4px;
}

.keuzedeel-card__meta {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.keuzedeel-card__niveau {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(200, 212, 0, 0.1);
    color: #1C3A3A;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.keuzedeel-card__sbu {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(200, 212, 0, 0.05);
    color: var(--text-muted);
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.keuzedeel-card__description {
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0 0 20px;
}

.keuzedeel-card__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}

.keuzedeel-card__tag {
    background: var(--light-gray);
    color: var(--text-muted);
    font-size: 0.8rem;
    padding: 6px 12px;
    border-radius: 6px;
}

.keuzedeel-card__link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary);
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.keuzedeel-card__link:hover {
    gap: 12px;
}

.keuzedeel-card__link svg {
    width: 18px;
    height: 18px;
}

/* Info Section */
.keuzedelen-info {
    padding: 80px 0;
    background: white;
}

.keuzedelen-info__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.keuzedelen-info__content h2 {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 20px;
}

.keuzedelen-info__content h2 span {
    color: var(--primary);
}

.keuzedelen-info__content p {
    font-size: 1.1rem;
    color: var(--text-muted);
    line-height: 1.7;
    margin: 0 0 24px;
}

.keuzedelen-info__list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.keuzedelen-info__list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid var(--light-gray);
}

.keuzedelen-info__list li:last-child {
    border-bottom: none;
}

.keuzedelen-info__list svg {
    width: 24px;
    height: 24px;
    color: var(--primary);
    flex-shrink: 0;
    margin-top: 2px;
}

.keuzedelen-info__list span {
    font-size: 1rem;
    color: var(--text);
}

.keuzedelen-info__visual {
    background: var(--gradient-dark);
    border-radius: 24px;
    padding: 48px;
    text-align: center;
}

.keuzedelen-info__visual-icon {
    width: 120px;
    height: 120px;
    background: rgba(200, 212, 0, 0.15);
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    border: 1px solid rgba(200, 212, 0, 0.3);
}

.keuzedelen-info__visual-icon svg {
    width: 60px;
    height: 60px;
    color: var(--primary);
}

.keuzedelen-info__visual h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin: 0 0 12px;
}

.keuzedelen-info__visual p {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    margin: 0;
}

/* CTA Section */
.keuzedelen-cta {
    background: var(--gradient-dark);
    padding: 80px 0;
    text-align: center;
}

.keuzedelen-cta__container {
    max-width: 700px;
    margin: 0 auto;
    padding: 0 24px;
}

.keuzedelen-cta__title {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    margin: 0 0 16px;
}

.keuzedelen-cta__title span {
    color: var(--primary);
}

.keuzedelen-cta__text {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.8);
    margin: 0 0 32px;
}

.keuzedelen-cta__btn {
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
    box-shadow: 0 10px 40px -10px rgba(200, 212, 0, 0.3);
}

.keuzedelen-cta__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(200, 212, 0, 0.5);
}

.keuzedelen-cta__btn svg {
    width: 20px;
    height: 20px;
}

@media (max-width: 768px) {
    .keuzedelen-hero__stats {
        flex-direction: column;
        gap: 24px;
    }
    
    .keuzedelen-grid {
        grid-template-columns: 1fr;
    }
    
    .keuzedelen-info__container {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="keuzedelen-hero">
    <div class="keuzedelen-hero__container">
        <span class="keuzedelen-hero__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
            </svg>
            Keuzedelen
        </span>
        <h1 class="keuzedelen-hero__title">
            Verdiep je met <span>Keuzedelen</span>
        </h1>
        <p class="keuzedelen-hero__text">
            Keuzedelen zijn aanvullende modules waarmee je je opleiding persoonlijker maakt. Kies onderwerpen die aansluiten bij jouw interesses en carrièredoelen.
        </p>
        <div class="keuzedelen-hero__stats">
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">50+</span>
                <span class="keuzedelen-hero__stat-label">Keuzedelen beschikbaar</span>
            </div>
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">240</span>
                <span class="keuzedelen-hero__stat-label">SBU gemiddeld</span>
            </div>
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">100%</span>
                <span class="keuzedelen-hero__stat-label">Praktijkgericht</span>
            </div>
        </div>
    </div>
</section>

<!-- Keuzedelen Grid -->
<section class="keuzedelen-section">
    <div class="keuzedelen-container">
        <div class="keuzedelen-section__header">
            <h2 class="keuzedelen-section__title">Populaire Keuzedelen</h2>
            <p class="keuzedelen-section__subtitle">Ontdek welke keuzedelen het beste bij jouw opleiding passen</p>
        </div>

        <div class="keuzedelen-grid">
            <!-- Programmeren -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Programmeren</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Leer de basis van programmeren met Python, JavaScript of C#. Ontwikkel eigen applicaties en scripts.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">Python</span>
                    <span class="keuzedeel-card__tag">JavaScript</span>
                    <span class="keuzedeel-card__tag">Logica</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Duurzaamheid -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V12zm-12 0h.008v.008H6V12z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Duurzaamheid in de Techniek</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Leer over duurzame technologieën, energiebesparing en circulaire economie in de technische sector.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">Energie</span>
                    <span class="keuzedeel-card__tag">Circulair</span>
                    <span class="keuzedeel-card__tag">Milieu</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- 3D Printen -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                            <path d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">3D Printen & Modelleren</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Ontwerp 3D-modellen en print ze uit. Leer werken met CAD-software en verschillende printtechnieken.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">CAD</span>
                    <span class="keuzedeel-card__tag">3D Printen</span>
                    <span class="keuzedeel-card__tag">Ontwerp</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Robotica -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Basis Robotica</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Bouw en programmeer robots. Leer over sensoren, actuatoren en automatisering.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">Robots</span>
                    <span class="keuzedeel-card__tag">Arduino</span>
                    <span class="keuzedeel-card__tag">Sensoren</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Ondernemerschap -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Ondernemerschap</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Start je eigen bedrijf. Leer over businessplannen, marketing en financieel beheer.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">Business</span>
                    <span class="keuzedeel-card__tag">Marketing</span>
                    <span class="keuzedeel-card__tag">ZZP</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Veiligheid -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Arbo & Veiligheid</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Leer over veilig werken, risico-inventarisatie en preventiemaatregelen in de techniek.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">VCA</span>
                    <span class="keuzedeel-card__tag">RI&E</span>
                    <span class="keuzedeel-card__tag">Preventie</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Smart Technology -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Smart Technology</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Ontdek IoT, smart home systemen en connected devices. Bouw slimme oplossingen.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">IoT</span>
                    <span class="keuzedeel-card__tag">Smart Home</span>
                    <span class="keuzedeel-card__tag">Netwerken</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- Lassen -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/>
                            <path d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">Lassen & Verbindingen</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-3</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Beheers diverse lastechnieken zoals MIG, MAG en TIG. Werk met staal en aluminium.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">MIG/MAG</span>
                    <span class="keuzedeel-card__tag">TIG</span>
                    <span class="keuzedeel-card__tag">Metaal</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            <!-- EHBO -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__header">
                    <div class="keuzedeel-card__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                    </div>
                    <div class="keuzedeel-card__info">
                        <h3 class="keuzedeel-card__title">EHBO & BHV</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">120 SBU</span>
                        </div>
                    </div>
                </div>
                <p class="keuzedeel-card__description">
                    Behaal je EHBO- en BHV-diploma. Leer eerste hulp verlenen en noodsituaties beheersen.
                </p>
                <div class="keuzedeel-card__tags">
                    <span class="keuzedeel-card__tag">EHBO</span>
                    <span class="keuzedeel-card__tag">BHV</span>
                    <span class="keuzedeel-card__tag">Reanimatie</span>
                </div>
                <a href="#" class="keuzedeel-card__link">
                    Meer informatie
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="keuzedelen-info">
    <div class="keuzedelen-info__container">
        <div class="keuzedelen-info__content">
            <h2>Wat zijn <span>Keuzedelen</span>?</h2>
            <p>
                Keuzedelen zijn aanvullende onderdelen van je MBO-opleiding waarmee je je diploma persoonlijker maakt. Ze bieden verdieping, verbreding of voorbereiding op een vervolgopleiding.
            </p>
            <ul class="keuzedelen-info__list">
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Verplicht onderdeel van je MBO-diploma</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Keuze uit verschillende onderwerpen</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Extra vaardigheden voor de arbeidsmarkt</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Erkende certificaten en diploma's</span>
                </li>
            </ul>
        </div>
        <div class="keuzedelen-info__visual">
            <div class="keuzedelen-info__visual-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                </svg>
            </div>
            <h3>Maak je diploma uniek</h3>
            <p>Kies keuzedelen die passen bij jouw ambities en interesses</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="keuzedelen-cta">
    <div class="keuzedelen-cta__container">
        <h2 class="keuzedelen-cta__title">Bekijk jouw <span>keuzedelen</span></h2>
        <p class="keuzedelen-cta__text">
            Log in op je account om te zien welke keuzedelen bij jouw opleiding beschikbaar zijn.
        </p>
        <a href="/login" class="keuzedelen-cta__btn">
            Inloggen
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
