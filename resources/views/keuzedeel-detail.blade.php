@extends('layouts.app')

@section('title', $keuzedeel->titel)
@section('meta_description', 'Bekijk details van ' . $keuzedeel->titel . ' - Schrijf je in voor dit keuzedeel')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/keuzedelen.css') }}">
<style>
/* Keuzedeel Detail Page Styles */
.keuzedeel-detail-page {
    background: linear-gradient(135deg, #1C3A3A 0%, #2C4A4A 100%);
    min-height: 100vh;
    color: white;
}

.keuzedeel-detail {
    padding: 80px 20px 60px;
}

.keuzedeel-detail__container {
    max-width: 1200px;
    margin: 0 auto;
}

.keuzedeel-detail__header {
    text-align: center;
    margin-bottom: 60px;
}

.keuzedeel-detail__badge {
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

.keuzedeel-detail__badge svg {
    width: 16px;
    height: 16px;
}

.keuzedeel-detail__title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 700;
    margin: 0 0 16px 0;
    line-height: 1.2;
    color: white;
}

.keuzedeel-detail__meta {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.keuzedeel-detail__niveau, .keuzedeel-detail__ec, .keuzedeel-detail__code {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    padding: 8px 16px;
    border-radius: 12px;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.keuzedeel-detail__status--vol {
    background: rgba(239, 68, 68, 0.2);
    color: #ef4444;
}

.keuzedeel-detail__status--beschikbaar {
    background: rgba(34, 197, 94, 0.2);
    color: #22c55e;
}

.keuzedeel-detail__content {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 60px;
    margin-bottom: 60px;
}

.keuzedeel-detail__main {
    background: white;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.keuzedeel-detail__section {
    margin-bottom: 40px;
}

.keuzedeel-detail__section h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 16px 0;
}

.keuzedeel-detail__section p {
    color: #6b7280;
    line-height: 1.6;
    margin: 0;
}

.keuzedeel-detail__info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.keuzedeel-detail__info-item {
    background: #f9fafb;
    padding: 20px;
    border-radius: 12px;
    border-left: 4px solid #C8D400;
}

.keuzedeel-detail__info-item h3 {
    font-size: 0.875rem;
    font-weight: 600;
    color: #6b7280;
    margin: 0 0 8px 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.keuzedeel-detail__info-item p {
    color: #1C3A3A;
    font-weight: 600;
    margin: 0;
}

.keuzedeel-detail__sidebar {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.keuzedeel-detail__card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.keuzedeel-detail__card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 20px 0;
}

.keuzedeel-detail__status-message {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px;
    border-radius: 12px;
    margin-bottom: 20px;
    font-weight: 600;
}

.keuzedeel-detail__status-message--success {
    background: rgba(34, 197, 94, 0.1);
    color: #16a34a;
}

.keuzedeel-detail__status-message--error {
    background: rgba(239, 68, 68, 0.1);
    color: #dc2626;
}

.keuzedeel-detail__status-message svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.form__group {
    margin-bottom: 20px;
}

.form__label {
    display: block;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.form__textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-family: inherit;
    font-size: 0.875rem;
    resize: vertical;
    transition: border-color 0.3s ease;
}

.form__textarea:focus {
    outline: none;
    border-color: #C8D400;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 14px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.95rem;
}

.btn--primary {
    background: linear-gradient(135deg, #16A34A, #22C55E);
    color: white;
}

.btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
}

.btn--secondary {
    background: #f3f4f6;
    color: #374151;
}

.btn--secondary:hover {
    background: #e5e7eb;
}

.btn--outline {
    background: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
}

.btn--outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
}

.btn--danger {
    background: linear-gradient(135deg, #dc2626, #ef4444);
    color: white;
}

.btn--danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);
}

.btn--full {
    width: 100%;
}

.keuzedeel-detail__quick-info {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.keuzedeel-detail__quick-info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #f3f4f6;
}

.keuzedeel-detail__quick-info-item:last-child {
    border-bottom: none;
}

.keuzedeel-detail__quick-info-item span {
    color: #6b7280;
    font-size: 0.875rem;
}

.keuzedeel-detail__quick-info-item strong {
    color: #1C3A3A;
    font-weight: 600;
}

.keuzedeel-detail__actions {
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .keuzedeel-detail__content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .keuzedeel-detail__sidebar {
        order: -1;
    }
}

@media (max-width: 768px) {
    .keuzedeel-detail__main {
        padding: 24px;
    }
    
    .keuzedeel-detail__card {
        padding: 20px;
    }
    
    .keuzedeel-detail__meta {
        gap: 12px;
    }
}
</style>
@endsection

@section('content')
<div class="keuzedeel-detail-page">
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

    <!-- Keuzedeel Detail -->
    <section class="keuzedeel-detail">
        <div class="keuzedeel-detail__container">
            <div class="keuzedeel-detail__header">
                <div class="keuzedeel-detail__badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                    Keuzedeel
                </div>
                <h1 class="keuzedeel-detail__title">{{ $keuzedeel->titel }}</h1>
                <div class="keuzedeel-detail__meta">
                    <span class="keuzedeel-detail__niveau">Niveau {{ $keuzedeel->niveau }}</span>
                    <span class="keuzedeel-detail__ec">{{ $keuzedeel->ec }} EC</span>
                    <span class="keuzedeel-detail__code">{{ $keuzedeel->code }}</span>
                    @if($keuzedeel->isVol())
                        <span class="keuzedeel-detail__status keuzedeel-detail__status--vol">Vol</span>
                    @else
                        <span class="keuzedeel-detail__status keuzedeel-detail__status--beschikbaar">{{ $keuzedeel->huidige_deelnemers }}/{{ $keuzedeel->max_deelnemers }} plekken beschikbaar</span>
                    @endif
                </div>
            </div>

            <div class="keuzedeel-detail__content">
                <div class="keuzedeel-detail__main">
                    <div class="keuzedeel-detail__section">
                        <h2>Beschrijving</h2>
                        <p>{{ $keuzedeel->beschrijving }}</p>
                    </div>

                    @if($keuzedeel->voorwaarden)
                    <div class="keuzedeel-detail__section">
                        <h2>Voorwaarden</h2>
                        <p>{{ $keuzedeel->voorwaarden }}</p>
                    </div>
                    @endif

                    <div class="keuzedeel-detail__info-grid">
                        <div class="keuzedeel-detail__info-item">
                            <h3>Docent</h3>
                            <p>{{ $keuzedeel->docent }}</p>
                        </div>
                        <div class="keuzedeel-detail__info-item">
                            <h3>Locatie</h3>
                            <p>{{ $keuzedeel->locatie }}</p>
                        </div>
                        <div class="keuzedeel-detail__info-item">
                            <h3>Startdatum</h3>
                            <p>{{ $keuzedeel->startdatum->format('d-m-Y') }}</p>
                        </div>
                        <div class="keuzedeel-detail__info-item">
                            <h3>Einddatum</h3>
                            <p>{{ $keuzedeel->einddatum->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="keuzedeel-detail__sidebar">
                    <div class="keuzedeel-detail__card">
                        <h3>Inschrijving</h3>
                        
                        @if($isIngeschreven)
                            <div class="keuzedeel-detail__status-message keuzedeel-detail__status-message--success">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Je bent ingeschreven voor dit keuzedeel</span>
                            </div>
                            <form action="{{ route('keuzedeel.uitschrijven', $keuzedeel->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je je wilt uitschrijven?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn--secondary btn--full">
                                    Uitschrijven
                                </button>
                            </form>
                        @else
                            @if($keuzedeel->isVol())
                                <div class="keuzedeel-detail__status-message keuzedeel-detail__status-message--error">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Dit keuzedeel is helaas vol</span>
                                </div>
                            @elseif(!$keuzedeel->isBeschikbaar())
                                <div class="keuzedeel-detail__status-message keuzedeel-detail__status-message--error">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Dit keuzedeel is niet beschikbaar</span>
                                </div>
                            @else
                                <form action="{{ route('keuzedeel.inschrijven', $keuzedeel->id) }}" method="POST">
                                    @csrf
                                    <div class="form__group">
                                        <label class="form__label" for="opmerkingen">Opmerkingen (optioneel)</label>
                                        <textarea class="form__textarea" id="opmerkingen" name="opmerkingen" rows="4" placeholder="Voeg eventueel opmerkingen toe..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn--primary btn--full">
                                        Inschrijven
                                    </button>
                                </form>
                            @endif
                        @endif
                    </div>

                    <div class="keuzedeel-detail__card">
                        <h3>Snelle Info</h3>
                        <div class="keuzedeel-detail__quick-info">
                            <div class="keuzedeel-detail__quick-info-item">
                                <span>European Credits:</span>
                                <strong>{{ $keuzedeel->ec }}</strong>
                            </div>
                            <div class="keuzedeel-detail__quick-info-item">
                                <span>Niveau:</span>
                                <strong>{{ $keuzedeel->niveau }}</strong>
                            </div>
                            <div class="keuzedeel-detail__quick-info-item">
                                <span>Deelnemers:</span>
                                <strong>{{ $keuzedeel->huidige_deelnemers }}/{{ $keuzedeel->max_deelnemers }}</strong>
                            </div>
                            <div class="keuzedeel-detail__quick-info-item">
                                <span>Duur:</span>
                                <strong>{{ $keuzedeel->startdatum->format('M') }} - {{ $keuzedeel->einddatum->format('M Y') }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="keuzedeel-detail__actions">
                <a href="{{ route('keuzedelen') }}" class="btn btn--outline">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Terug naar keuzedelen
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
