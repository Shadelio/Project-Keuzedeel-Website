@extends('layouts.app')

@section('title', 'Mijn Inschrijvingen')
@section('meta_description', 'Bekijk en beheer je gekozen keuzedelen')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mijn-keuzedelen.css') }}">
<style>
/* Mijn Keuzedelen Page Styles */
.mijn-keuzedelen-page {
    background: linear-gradient(135deg, #1C3A3A 0%, #2C4A4A 100%);
    min-height: 100vh;
    color: white;
}

/* Notice Bar Styles */
.notice-bar {
    background: rgba(34, 197, 94, 0.1);
    border-left: 4px solid #22c55e;
    color: #16a34a;
    padding: 16px 20px;
    position: relative;
}

.notice-bar--error {
    background: rgba(239, 68, 68, 0.1);
    border-left-color: #ef4444;
    color: #dc2626;
}

.notice-bar__container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 12px;
}

.notice-bar__icon {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.notice-bar__text {
    font-weight: 600;
    font-size: 0.875rem;
}

.mijn-keuzedelen-hero {
    text-align: center;
    padding: 80px 20px 60px;
    position: relative;
}

.mijn-keuzedelen-hero__container {
    max-width: 1200px;
    margin: 0 auto;
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
    font-weight: 700;
    margin: 0 0 16px 0;
    line-height: 1.2;
    color: white;
}

.mijn-keuzedelen-hero__title span {
    color: #C8D400;
}

.mijn-keuzedelen-hero__text {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.6;
}

.mijn-keuzedelen-section {
    padding: 0 20px 80px;
}

.mijn-keuzedelen-container {
    max-width: 1200px;
    margin: 0 auto;
}

.mijn-keuzedelen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 30px;
}

.mijn-keuzedeel-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.mijn-keuzedeel-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
}

.mijn-keuzedeel-card__header {
    background: linear-gradient(135deg, #1C3A3A, #2C4A4A);
    padding: 24px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.mijn-keuzedeel-card__icon {
    width: 48px;
    height: 48px;
    background: rgba(200, 212, 0, 0.15);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #C8D400;
}

.mijn-keuzedeel-card__icon svg {
    width: 24px;
    height: 24px;
}

.mijn-keuzedeel-card__info {
    flex: 1;
}

.mijn-keuzedeel-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: white;
    margin: 0 0 8px 0;
}

.mijn-keuzedeel-card__meta {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.mijn-keuzedeel-card__status {
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.mijn-keuzedeel-card__status--geaccepteerd {
    background: rgba(34, 197, 94, 0.2);
    color: #22c55e;
}

.mijn-keuzedeel-card__status--in behandeling {
    background: rgba(251, 191, 36, 0.2);
    color: #f59e0b;
}

.mijn-keuzedeel-card__code {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.9);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
}

.mijn-keuzedeel-card__content {
    padding: 24px;
}

.mijn-keuzedeel-card__description {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 20px 0;
}

.mijn-keuzedeel-card__details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
    margin-bottom: 20px;
}

.mijn-keuzedeel-card__detail {
    background: #f9fafb;
    padding: 12px;
    border-radius: 8px;
}

.mijn-keuzedeel-card__label {
    font-size: 0.75rem;
    color: #6b7280;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
}

.mijn-keuzedeel-card__detail span:last-child {
    color: #1C3A3A;
    font-weight: 600;
    font-size: 0.875rem;
}

.mijn-keuzedeel-card__opmerkingen {
    background: #f0f9ff;
    border-left: 4px solid #0ea5e9;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.mijn-keuzedeel-card__opmerkingen strong {
    color: #0369a1;
    font-size: 0.875rem;
}

.mijn-keuzedeel-card__opmerkingen {
    color: #0c4a6e;
    font-size: 0.875rem;
    margin: 4px 0 0 0;
}

.mijn-keuzedeel-card__actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.875rem;
}

.btn--outline {
    background: transparent;
    color: #1C3A3A;
    border: 2px solid #e5e7eb;
}

.btn--outline:hover {
    background: #f9fafb;
    border-color: #1C3A3A;
}

.btn--danger {
    background: linear-gradient(135deg, #dc2626, #ef4444);
    color: white;
}

.btn--danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);
}

.btn--small {
    padding: 8px 16px;
    font-size: 0.8rem;
}

.mijn-keuzedelen-empty {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.mijn-keuzedelen-empty__icon {
    width: 64px;
    height: 64px;
    background: rgba(200, 212, 0, 0.15);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    color: #C8D400;
}

.mijn-keuzedelen-empty__icon svg {
    width: 32px;
    height: 32px;
}

.mijn-keuzedelen-empty__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 16px 0;
}

.mijn-keuzedelen-empty__text {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 32px 0;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.mijn-keuzedelen-empty__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #16A34A, #22C55E);
    color: white;
    padding: 14px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.mijn-keuzedelen-empty__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
}

.mijn-keuzedelen-empty__btn svg {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
}

.mijn-keuzedelen-empty__btn:hover svg {
    transform: translateX(4px);
}

.login-required {
    text-align: center;
    padding: 80px 20px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.login-required__icon {
    width: 64px;
    height: 64px;
    background: rgba(239, 68, 68, 0.15);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    color: #ef4444;
}

.login-required__icon svg {
    width: 32px;
    height: 32px;
}

.login-required__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 16px 0;
}

.login-required__text {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 32px 0;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.login-required__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #16A34A, #22C55E);
    color: white;
    padding: 14px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.login-required__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
}

.login-required__btn svg {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
}

.login-required__btn:hover svg {
    transform: translateX(4px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .mijn-keuzedelen-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .mijn-keuzedeel-card__header {
        padding: 20px;
    }
    
    .mijn-keuzedeel-card__content {
        padding: 20px;
    }
    
    .mijn-keuzedeel-card__actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>
@endsection

@section('content')
<div class="mijn-keuzedelen-page">
    <!-- Notice Bar -->
    @if(session('success'))
    <div class="notice-bar notice-bar--success">
        <div class="notice-bar__container">
            <svg class="notice-bar__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="notice-bar__text">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    @if(session('error'))
    <div class="notice-bar notice-bar--error">
        <div class="notice-bar__container">
            <svg class="notice-bar__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="notice-bar__text">{{ session('error') }}</span>
        </div>
    </div>
    @endif

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
                Mijn <span>Inschrijvingen</span>
            </h1>
            <p class="mijn-keuzedelen-hero__text">
                Bekijk en beheer je inschrijvingen voor keuzedelen. Volg je voortgang en bekijk je resultaten.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="mijn-keuzedelen-section">
        <div class="mijn-keuzedelen-container">
            @auth
            @if($inschrijvingen->count() > 0)
                <div class="mijn-keuzedelen-grid">
                    @foreach($inschrijvingen as $inschrijving)
                        <div class="mijn-keuzedeel-card">
                            <div class="mijn-keuzedeel-card__header">
                                <div class="mijn-keuzedeel-card__icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                    </svg>
                                </div>
                                <div class="mijn-keuzedeel-card__info">
                                    <h3 class="mijn-keuzedeel-card__title">{{ $inschrijving->keuzedeel->titel }}</h3>
                                    <div class="mijn-keuzedeel-card__meta">
                                        <span class="mijn-keuzedeel-card__status mijn-keuzedeel-card__status--{{ $inschrijving->status }}">
                                            {{ ucfirst($inschrijving->status) }}
                                        </span>
                                        <span class="mijn-keuzedeel-card__code">{{ $inschrijving->keuzedeel->code }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mijn-keuzedeel-card__content">
                                <p class="mijn-keuzedeel-card__description">
                                    {{ Str::limit($inschrijving->keuzedeel->beschrijving, 120) }}
                                </p>
                                
                                <div class="mijn-keuzedeel-card__details">
                                    <div class="mijn-keuzedeel-card__detail">
                                        <div class="mijn-keuzedeel-card__label">Docent</div>
                                        <span>{{ $inschrijving->keuzedeel->docent }}</span>
                                    </div>
                                    <div class="mijn-keuzedeel-card__detail">
                                        <div class="mijn-keuzedeel-card__label">Locatie</div>
                                        <span>{{ $inschrijving->keuzedeel->locatie }}</span>
                                    </div>
                                    <div class="mijn-keuzedeel-card__detail">
                                        <div class="mijn-keuzedeel-card__label">Inschrijfdatum</div>
                                        <span>{{ $inschrijving->inschrijfdatum->format('d-m-Y') }}</span>
                                    </div>
                                    <div class="mijn-keuzedeel-card__detail">
                                        <div class="mijn-keuzedeel-card__label">EC</div>
                                        <span>{{ $inschrijving->keuzedeel->ec }}</span>
                                    </div>
                                </div>
                                
                                @if($inschrijving->opmerkingen)
                                <div class="mijn-keuzedeel-card__opmerkingen">
                                    <strong>Opmerkingen:</strong>
                                    <p>{{ $inschrijving->opmerkingen }}</p>
                                </div>
                                @endif
                                
                                <div class="mijn-keuzedeel-card__actions">
                                    <a href="{{ route('keuzedeel.show', $inschrijving->keuzedeel->id) }}" class="btn btn--outline btn--small">
                                        Bekijk details
                                    </a>
                                    <form action="{{ route('keuzedeel.uitschrijven', $inschrijving->keuzedeel->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je je wilt uitschrijven?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn--danger btn--small">
                                            Uitschrijven
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mijn-keuzedelen-empty">
                    <div class="mijn-keuzedelen-empty__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <h2 class="mijn-keuzedelen-empty__title">Geen inschrijvingen gevonden</h2>
                    <p class="mijn-keuzedelen-empty__text">
                        Je hebt je nog niet ingeschreven voor keuzedelen. Bekijk de beschikbare keuzedelen en schrijf je in!
                    </p>
                    <a href="{{ route('keuzedelen') }}" class="mijn-keuzedelen-empty__btn">
                        Bekijk keuzedelen
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            @endif
            @else
                <div class="login-required">
                    <div class="login-required__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <h2 class="login-required__title">Inloggen vereist</h2>
                    <p class="login-required__text">
                        Log in op je account om je inschrijvingen te bekijken en je voortgang te volgen.
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
</div>
@endsection
