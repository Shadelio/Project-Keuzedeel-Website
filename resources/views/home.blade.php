@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Techniek College Rotterdam - Keuzedeel Portaal voor MBO-studenten. Ontdek onze technische opleidingen en keuzedelen.')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
