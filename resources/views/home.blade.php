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
        radial-gradient(ellipse 1000px 800px at 20% 30%, rgba(242, 183, 5, 0.2), transparent),
        radial-gradient(ellipse 800px 600px at 80% 70%, rgba(232, 93, 4, 0.15), transparent);
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
    color: var(--primary);
    display: block;
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
    box-shadow: 0 10px 40px -10px rgba(242, 183, 5, 0.4);
}

.home-hero__btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(242, 183, 5, 0.6);
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
    background: rgba(242, 183, 5, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(242, 183, 5, 0.2);
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
    background: rgba(242, 183, 5, 0.1);
    color: #b8860b;
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
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.home-feature:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.15);
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

/* Opleidingen Section */
.home-opleidingen {
    padding: 100px 0;
    background: white;
}

.home-opleidingen__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.home-opleidingen__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 48px;
}

.home-opleidingen__header-content {
    max-width: 500px;
}

.home-opleidingen__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(242, 183, 5, 0.1);
    color: #b8860b;
    font-size: 13px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 9999px;
    margin-bottom: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.home-opleidingen__title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 12px;
}

.home-opleidingen__subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    margin: 0;
}

.home-opleidingen__link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.home-opleidingen__link:hover {
    gap: 12px;
}

.home-opleidingen__link svg {
    width: 20px;
    height: 20px;
}

.home-opleidingen__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.home-opleiding {
    background: var(--light-gray);
    border-radius: 16px;
    padding: 28px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: block;
}

.home-opleiding:hover {
    background: white;
    box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.15);
    transform: translateY(-4px);
}

.home-opleiding__icon {
    width: 52px;
    height: 52px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.home-opleiding__icon svg {
    width: 26px;
    height: 26px;
    stroke: white;
}

.home-opleiding__title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text);
    margin: 0 0 8px;
}

.home-opleiding__niveau {
    font-size: 0.85rem;
    color: var(--text-muted);
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
        radial-gradient(ellipse 600px 400px at 20% 50%, rgba(242, 183, 5, 0.15), transparent),
        radial-gradient(ellipse 400px 300px at 80% 50%, rgba(232, 93, 4, 0.1), transparent);
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
    box-shadow: 0 10px 40px -10px rgba(242, 183, 5, 0.4);
}

.home-cta__btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(242, 183, 5, 0.6);
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
    
    .home-opleidingen__grid {
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
    
    .home-opleidingen__header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }
    
    .home-opleidingen__grid {
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
                Bouw aan je
                <span>Technische Toekomst</span>
            </h1>
            <p class="home-hero__text">
                Welkom bij het Keuzedeel Portaal van Techniek College Rotterdam. Ontdek onze opleidingen, kies je keuzedelen en start je carrière in de techniek.
            </p>
            <div class="home-hero__buttons">
                <a href="/opleidingen" class="home-hero__btn home-hero__btn--primary">
                    Bekijk opleidingen
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="/keuzedelen" class="home-hero__btn home-hero__btn--secondary">
                    Ontdek keuzedelen
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="home-hero__visual">
            <div class="home-hero__card">
                <div class="home-hero__stats">
                    <div class="home-hero__stat">
                        <span class="home-hero__stat-number">140+</span>
                        <span class="home-hero__stat-label">Opleidingen</span>
                    </div>
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
                Wij bieden de beste technische opleidingen met moderne faciliteiten en directe connecties met het bedrijfsleven.
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
                        <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
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

<!-- Opleidingen Section -->
<section class="home-opleidingen">
    <div class="home-opleidingen__container">
        <div class="home-opleidingen__header">
            <div class="home-opleidingen__header-content">
                <span class="home-opleidingen__badge">Opleidingen</span>
                <h2 class="home-opleidingen__title">Populaire Opleidingen</h2>
                <p class="home-opleidingen__subtitle">Ontdek onze meest gekozen technische opleidingen</p>
            </div>
            <a href="/opleidingen" class="home-opleidingen__link">
                Bekijk alle opleidingen
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>
        <div class="home-opleidingen__grid">
            <a href="/opleidingen" class="home-opleiding">
                <div class="home-opleiding__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                    </svg>
                </div>
                <h3 class="home-opleiding__title">Software & Online</h3>
                <p class="home-opleiding__niveau">Niveau 4</p>
            </a>
            <a href="/opleidingen" class="home-opleiding">
                <div class="home-opleiding__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="home-opleiding__title">Elektrotechniek</h3>
                <p class="home-opleiding__niveau">Niveau 3 & 4</p>
            </a>
            <a href="/opleidingen" class="home-opleiding">
                <div class="home-opleiding__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                    </svg>
                </div>
                <h3 class="home-opleiding__title">Logistiek</h3>
                <p class="home-opleiding__niveau">Niveau 2, 3 & 4</p>
            </a>
            <a href="/opleidingen" class="home-opleiding">
                <div class="home-opleiding__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="home-opleiding__title">Autotechniek</h3>
                <p class="home-opleiding__niveau">Niveau 2, 3 & 4</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="home-cta">
    <div class="home-cta__container">
        <h2 class="home-cta__title">Klaar om te <span>starten</span>?</h2>
        <p class="home-cta__text">
            Meld je aan voor een opleiding bij Techniek College Rotterdam en bouw aan je technische toekomst. 
            Ontdek welke keuzedelen bij jouw opleiding passen.
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
