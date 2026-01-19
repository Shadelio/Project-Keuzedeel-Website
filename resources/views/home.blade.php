@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Techniek College Rotterdam - Keuzedeel Portaal voor MBO-studenten. Ontdek onze technische opleidingen en keuzedelen.')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
/* Hero Section */
.home-hero {
    min-height: 100vh;
    background: var(--gradient-dark);
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding-top: 80px;
}

.home-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(ellipse 1000px 800px at 20% 30%, rgba(200, 212, 0, 0.2), transparent),
        radial-gradient(ellipse 800px 600px at 80% 70%, rgba(200, 212, 0, 0.15), transparent);
    pointer-events: none;
}

.home-hero__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    position: relative;
    z-index: 1;
}

.home-hero__content {
    max-width: 560px;
}

.home-hero__badge {
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

.home-hero__badge svg {
    width: 16px;
    height: 16px;
}

.home-hero__title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: white;
    margin: 0 0 24px;
    line-height: 1.1;
}

.home-hero__title span {
    background: linear-gradient(135deg, #16A34A 0%, #22C55E 50%, #15803D 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: inline-block;
    font-weight: 900;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.home-hero__text {
    font-size: 1.2rem;
    color: rgba(255,255,255,0.8);
    line-height: 1.7;
    margin: 0 0 40px;
}

.home-hero__buttons {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.home-hero__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    font-size: 1rem;
    padding: 16px 32px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.home-hero__btn--primary {
    background: var(--gradient-primary);
    color: black;
    box-shadow: 0 10px 40px -10px rgba(200, 212, 0, 0.4);
}

.home-hero__btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(200, 212, 0, 0.6);
}

.home-hero__btn--secondary {
    background: rgba(255,255,255,0.1);
    color: white;
    border: 1px solid rgba(255,255,255,0.2);
}

.home-hero__btn--secondary:hover {
    background: rgba(255,255,255,0.15);
}

.home-hero__btn svg {
    width: 20px;
    height: 20px;
}

.home-hero__visual {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 32px;
}

.home-hero__image {
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px -20px rgba(0,0,0,0.5);
    border: 1px solid rgba(255,255,255,0.1);
}

.home-hero__image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.home-hero__card {
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 24px;
    padding: 40px;
}

.home-hero__stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
}

.home-hero__stat {
    text-align: center;
    padding: 24px;
    background: rgba(200, 212, 0, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(200, 212, 0, 0.2);
}

.home-hero__stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    display: block;
    margin-bottom: 4px;
}

.home-hero__stat-label {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
}

/* Features Section */
.home-features {
    padding: 100px 0;
    background: var(--light-gray);
}

.home-features__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.home-features__header {
    text-align: center;
    margin-bottom: 60px;
}

.home-features__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(200, 212, 0, 0.1);
    color: #1C3A3A;
    font-size: 13px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 9999px;
    margin-bottom: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.home-features__title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 16px;
}

.home-features__title span {
    color: var(--primary);
}

.home-features__subtitle {
    font-size: 1.15rem;
    color: var(--text-muted);
    max-width: 600px;
    margin: 0 auto;
}

.home-features__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

.home-feature {
    background: white;
    border-radius: 20px;
    padding: 36px;
    box-shadow: 0 4px 6px -1px rgba(200, 212, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.home-feature:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px -15px rgba(200, 212, 0, 0.15);
}

.home-feature__icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
}

.home-feature__icon svg {
    width: 32px;
    height: 32px;
    stroke: white;
}

.home-feature__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 12px;
}

.home-feature__text {
    font-size: 1rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0;
}


/* CTA Section */
.home-cta {
    padding: 100px 0;
    background: var(--gradient-dark);
    position: relative;
    overflow: hidden;
}

.home-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(ellipse 600px 400px at 20% 50%, rgba(200, 212, 0, 0.15), transparent),
        radial-gradient(ellipse 400px 300px at 80% 50%, rgba(200, 212, 0, 0.1), transparent);
    pointer-events: none;
}

.home-cta__container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 24px;
    text-align: center;
    position: relative;
    z-index: 1;
}

.home-cta__title {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin: 0 0 20px;
}

.home-cta__title span {
    color: var(--primary);
}

.home-cta__text {
    font-size: 1.2rem;
    color: rgba(255,255,255,0.8);
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

.home-cta__buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
}

.home-cta__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    font-size: 1rem;
    padding: 16px 32px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.home-cta__btn--primary {
    background: var(--gradient-primary);
    color: black;
    box-shadow: 0 10px 40px -10px rgba(200, 212, 0, 0.4);
}

.home-cta__btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(200, 212, 0, 0.6);
}

.home-cta__btn--secondary {
    background: rgba(255,255,255,0.1);
    color: white;
    border: 1px solid rgba(255,255,255,0.2);
}

.home-cta__btn--secondary:hover {
    background: rgba(255,255,255,0.15);
}

.home-cta__btn svg {
    width: 20px;
    height: 20px;
}

/* Responsive */
@media (max-width: 1024px) {
    .home-hero__container {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    
    .home-hero__visual {
        display: none;
    }
    
    .home-features__grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .home-hero {
        min-height: auto;
        padding: 120px 0 80px;
    }
    
    .home-hero__buttons {
        flex-direction: column;
    }
    
    .home-hero__btn {
        justify-content: center;
    }
    
    .home-features__grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="home-hero">
    <div class="home-hero__container">
        <div class="home-hero__content">
            <span class="home-hero__badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path d="M12 14v7"/>
                </svg>
                Techniek College Rotterdam
            </span>
            <h1 class="home-hero__title">
                Je toekomst is
                <span>goud waard</span>
            </h1>
            <p class="home-hero__text">
                Welkom bij het Keuzedeel Portaal van Techniek College Rotterdam. Kies je keuzedelen en start je carrière in de techniek.
            </p>
            <div class="home-hero__buttons">
                <a href="/keuzedelen" class="home-hero__btn home-hero__btn--secondary">
                    Ontdek keuzedelen
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="home-hero__visual">
            <div class="home-hero__image">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" alt="Techniek College Rotterdam - Moderne werkplaats">
            </div>
            <div class="home-hero__card">
                <div class="home-hero__stats">
                    <div class="home-hero__stat">
                        <span class="home-hero__stat-number">50+</span>
                        <span class="home-hero__stat-label">Keuzedelen</span>
                    </div>
                    <div class="home-hero__stat">
                        <span class="home-hero__stat-number">10.000+</span>
                        <span class="home-hero__stat-label">Studenten</span>
                    </div>
                    <div class="home-hero__stat">
                        <span class="home-hero__stat-number">95%</span>
                        <span class="home-hero__stat-label">Baangarantie</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="home-features">
    <div class="home-features__container">
        <div class="home-features__header">
            <span class="home-features__badge">Waarom TCR</span>
            <h2 class="home-features__title">Waarom kiezen voor <span>Techniek College</span>?</h2>
            <p class="home-features__subtitle">
                Wij bieden de beste technische keuzedelen met moderne faciliteiten en directe connecties met het bedrijfsleven.
            </p>
        </div>
        <div class="home-features__grid">
            <div class="home-feature">
                <div class="home-feature__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                    </svg>
                </div>
                <h3 class="home-feature__title">Praktijkgericht Leren</h3>
                <p class="home-feature__text">
                    Leer door te doen in onze moderne praktijklokalen met de nieuwste apparatuur en technologie.
                </p>
            </div>
            <div class="home-feature">
                <div class="home-feature__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                    </svg>
                </div>
                <h3 class="home-feature__title">Stage & Werk</h3>
                <p class="home-feature__text">
                    Directe connecties met het bedrijfsleven zorgen voor uitstekende stage- en baanmogelijkheden.
                </p>
            </div>
            <div class="home-feature">
                <div class="home-feature__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="home-feature__title">Erkende Diploma's</h3>
                <p class="home-feature__text">
                    Behaal een erkend MBO-diploma op niveau 2, 3 of 4 en start je carrière in de techniek.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="home-cta">
    <div class="home-cta__container">
        <h2 class="home-cta__title">Klaar om te <span>starten</span>?</h2>
        <p class="home-cta__text">
            Meld je aan bij Techniek College Rotterdam en bouw aan je technische toekomst. 
            Ontdek welke keuzedelen het beste bij jou passen.
        </p>
        <div class="home-cta__buttons">
            <a href="/register" class="home-cta__btn home-cta__btn--primary">
                Aanmelden
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="/login" class="home-cta__btn home-cta__btn--secondary">
                Inloggen
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
