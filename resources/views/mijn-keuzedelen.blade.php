@extends('layouts.app')

@section('title', 'Mijn Keuzedelen')
@section('meta_description', 'Bekijk en beheer je gekozen keuzedelen')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
/* Mijn Keuzedelen Page Styles */
.mijn-keuzedelen-hero {
    background: var(--gradient-dark);
    padding: 120px 0 60px;
    position: relative;
}

.mijn-keuzedelen-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(ellipse 800px 600px at 30% 20%, rgba(200, 212, 0, 0.15), transparent),
        radial-gradient(ellipse 600px 400px at 70% 80%, rgba(200, 212, 0, 0.1), transparent);
    pointer-events: none;
}

.mijn-keuzedelen-hero__container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}

.mijn-keuzedelen-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(200, 212, 0, 0.15);
    color: #C8D400;
    font-size: 13px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 9999px;
    margin-bottom: 24px;
    border: 1px solid rgba(200, 212, 0, 0.3);
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.mijn-keuzedelen-hero__badge svg {
    width: 16px;
    height: 16px;
}

.mijn-keuzedelen-hero__title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    color: white;
    margin: 0 0 20px;
    line-height: 1.1;
}

.mijn-keuzedelen-hero__title span {
    color: #C8D400;
}

.mijn-keuzedelen-hero__text {
    font-size: 1.15rem;
    color: rgba(255,255,255,0.8);
    max-width: 600px;
    line-height: 1.7;
    margin: 0;
}

/* Content Section */
.mijn-keuzedelen-section {
    padding: 80px 0;
    background: #F7F7F7;
    min-height: 400px;
}

.mijn-keuzedelen-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

/* Empty State */
.mijn-keuzedelen-empty {
    text-align: center;
    padding: 80px 24px;
    background: white;
    border-radius: 24px;
    box-shadow: 0 4px 6px -1px rgba(200, 212, 0, 0.1);
}

.mijn-keuzedelen-empty__icon {
    width: 100px;
    height: 100px;
    background: rgba(200, 212, 0, 0.1);
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
}

.mijn-keuzedelen-empty__icon svg {
    width: 48px;
    height: 48px;
    color: #C8D400;
}

.mijn-keuzedelen-empty__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 12px;
}

.mijn-keuzedelen-empty__text {
    font-size: 1.1rem;
    color: #666;
    margin: 0 0 32px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

.mijn-keuzedelen-empty__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #C8D400;
    color: black;
    font-weight: 600;
    font-size: 1rem;
    padding: 16px 32px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 40px -10px rgba(200, 212, 0, 0.3);
}

.mijn-keuzedelen-empty__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(200, 212, 0, 0.5);
}

.mijn-keuzedelen-empty__btn svg {
    width: 20px;
    height: 20px;
}

/* Keuzedelen Grid (when user has selected keuzedelen) */
.mijn-keuzedelen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 24px;
}

.mijn-keuzedeel-card {
    background: white;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 6px -1px rgba(200, 212, 0, 0.1);
    border: 1px solid rgba(0,0,0,0.05);
}

.mijn-keuzedeel-card__header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}

.mijn-keuzedeel-card__icon {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, #C8D400 0%, #C8D400 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.mijn-keuzedeel-card__icon svg {
    width: 28px;
    height: 28px;
    stroke: white;
}

.mijn-keuzedeel-card__info {
    flex: 1;
}

.mijn-keuzedeel-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #333;
    margin: 0 0 4px;
}

.mijn-keuzedeel-card__meta {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.mijn-keuzedeel-card__status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.mijn-keuzedeel-card__status--active {
    background: rgba(200, 212, 0, 0.1);
    color: #C8D400;
}

.mijn-keuzedeel-card__status--completed {
    background: rgba(200, 212, 0, 0.1);
    color: #333;
}

.mijn-keuzedeel-card__progress {
    margin-top: 16px;
}

.mijn-keuzedeel-card__progress-label {
    display: flex;
    justify-content: space-between;
    font-size: 0.85rem;
    color: #666;
    margin-bottom: 8px;
}

.mijn-keuzedeel-card__progress-bar {
    height: 8px;
    background: #F7F7F7;
    border-radius: 4px;
    overflow: hidden;
}

.mijn-keuzedeel-card__progress-fill {
    height: 100%;
    background: #C8D400;
    border-radius: 4px;
    transition: width 0.3s ease;
}

/* Login Required State */
.login-required {
    text-align: center;
    padding: 80px 24px;
    background: white;
    border-radius: 24px;
    box-shadow: 0 4px 6px -1px rgba(200, 212, 0, 0.1);
}

.login-required__icon {
    width: 100px;
    height: 100px;
    background: rgba(200, 212, 0, 0.1);
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
}

.login-required__icon svg {
    width: 48px;
    height: 48px;
    color: #C8D400;
}

.login-required__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 12px;
}

.login-required__text {
    font-size: 1.1rem;
    color: #666;
    margin: 0 0 32px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

.login-required__btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #C8D400;
    color: black;
    font-weight: 600;
    font-size: 1rem;
    padding: 16px 32px;
    border-radius: 9999px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 40px -10px rgba(200, 212, 0, 0.3);
}

.login-required__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 40px -10px rgba(200, 212, 0, 0.5);
}

.login-required__btn svg {
    width: 20px;
    height: 20px;
}

@media (max-width: 768px) {
    .mijn-keuzedelen-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="mijn-keuzedelen-hero">
    <div class="mijn-keuzedelen-hero__container">
        <span class="mijn-keuzedelen-hero__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
            </svg>
            Mijn Account
        </span>
        <h1 class="mijn-keuzedelen-hero__title">
            Mijn <span>Keuzedelen</span>
        </h1>
        <p class="mijn-keuzedelen-hero__text">
            Bekijk en beheer de keuzedelen die je hebt gekozen voor je opleiding. Volg je voortgang en bekijk je resultaten.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="mijn-keuzedelen-section">
    <div class="mijn-keuzedelen-container">
        @auth
            {{-- User is logged in - check if they have keuzedelen --}}
            @if(isset($keuzedelen) && count($keuzedelen) > 0)
                {{-- User has selected keuzedelen --}}
                <div class="mijn-keuzedelen-grid">
                    @foreach($keuzedelen as $keuzedeel)
                    <div class="mijn-keuzedeel-card">
                        <div class="mijn-keuzedeel-card__header">
                            <div class="mijn-keuzedeel-card__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                </svg>
                            </div>
                            <div class="mijn-keuzedeel-card__info">
                                <h3 class="mijn-keuzedeel-card__title">{{ $keuzedeel->naam }}</h3>
                                <div class="mijn-keuzedeel-card__meta">
                                    <span class="mijn-keuzedeel-card__status mijn-keuzedeel-card__status--{{ $keuzedeel->status }}">
                                        {{ $keuzedeel->status == 'active' ? 'Actief' : 'Afgerond' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mijn-keuzedeel-card__progress">
                            <div class="mijn-keuzedeel-card__progress-label">
                                <span>Voortgang</span>
                                <span>{{ $keuzedeel->voortgang }}%</span>
                            </div>
                            <div class="mijn-keuzedeel-card__progress-bar">
                                <div class="mijn-keuzedeel-card__progress-fill" style="width: {{ $keuzedeel->voortgang }}%"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                {{-- User has no keuzedelen selected --}}
                <div class="mijn-keuzedelen-empty">
                    <div class="mijn-keuzedelen-empty__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <h2 class="mijn-keuzedelen-empty__title">Nog geen keuzedelen gekozen</h2>
                    <p class="mijn-keuzedelen-empty__text">
                        Je hebt nog geen keuzedelen geselecteerd. Bekijk het aanbod en kies de keuzedelen die bij jouw opleiding passen.
                    </p>
                    <a href="/keuzedelen" class="mijn-keuzedelen-empty__btn">
                        Bekijk keuzedelen
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            @endif
        @else
            {{-- User is not logged in --}}
            <div class="login-required">
                <div class="login-required__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                    </svg>
                </div>
                <h2 class="login-required__title">Inloggen vereist</h2>
                <p class="login-required__text">
                    Log in op je account om je gekozen keuzedelen te bekijken en je voortgang te volgen.
                </p>
                <a href="/login" class="login-required__btn">
                    Inloggen
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        @endauth
    </div>
</section>
@endsection
