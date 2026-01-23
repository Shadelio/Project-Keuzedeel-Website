@extends('layouts.app')

@section('title', 'Keuzedelen')
@section('meta_description', 'Bekijk alle keuzedelen van Techniek College Rotterdam - Verdiep je kennis met aanvullende modules')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/keuzedelen.css') }}">
<style>
/* Additional styling for better appearance */
.keuzedelen-page {
    background: linear-gradient(135deg, #1C3A3A 0%, #2C4A4A 100%);
    min-height: 100vh;
}

.keuzedelen-hero {
    text-align: center;
    color: white;
    padding: 80px 20px 60px;
    position: relative;
}

.keuzedelen-hero__container {
    max-width: 1200px;
    margin: 0 auto;
}

.keuzedelen-hero__badge {
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

.keuzedelen-hero__badge svg {
    width: 16px;
    height: 16px;
}

.keuzedelen-hero__title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 700;
    margin: 0 0 16px 0;
    line-height: 1.2;
    color: white;
}

.keuzedelen-hero__title span {
    color: #C8D400;
}

.keuzedelen-hero__text {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.6;
}

.keuzedelen-hero__stats {
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
}

.keuzedelen-hero__stat {
    text-align: center;
}

.keuzedelen-hero__stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #C8D400;
    margin-bottom: 8px;
}

.keuzedelen-hero__stat-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.keuzedelen-section {
    padding: 0 20px 80px;
}

.keuzedelen-container {
    max-width: 1200px;
    margin: 0 auto;
}

.keuzedelen-section__header {
    text-align: center;
    margin-bottom: 60px;
}

.keuzedelen-section__title {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin: 0 0 16px 0;
}

.keuzedelen-section__subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1.125rem;
    max-width: 600px;
    margin: 0 auto;
}

.keuzedelen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.keuzedeel-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
}

.keuzedeel-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
}

.keuzedeel-card__image {
    width: 100%;
    height: 240px;
    overflow: hidden;
    position: relative;
}

.keuzedeel-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.keuzedeel-card:hover .keuzedeel-card__image img {
    transform: scale(1.05);
}

.keuzedeel-card__content {
    padding: 32px;
}

.keuzedeel-card__header {
    margin-bottom: 20px;
}

.keuzedeel-card__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 12px 0;
    line-height: 1.3;
}

.keuzedeel-card__meta {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.keuzedeel-card__niveau, .keuzedeel-card__sbu {
    background: #f3f4f6;
    color: #374151;
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.keuzedeel-card__description {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 24px 0;
    font-size: 0.95rem;
}

.keuzedeel-card__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 24px;
}

.keuzedeel-card__tag {
    background: #16A34A;
    color: white;
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 500;
}

.keuzedeel-card__tag--vol {
    background: #ef4444;
}

.keuzedeel-card__actions {
    margin-top: 24px;
}

.keuzedeel-card__link {
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
    font-size: 0.95rem;
}

.keuzedeel-card__link:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
}

.keuzedeel-card__link svg {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
}

.keuzedeel-card__link:hover svg {
    transform: translateX(4px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .keuzedelen-hero__stats {
        gap: 40px;
    }
    
    .keuzedelen-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .keuzedeel-card__content {
        padding: 24px;
    }
}
</style>
@endsection

@section('content')
<div class="keuzedelen-page">
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
                    <span class="keuzedelen-hero__stat-number">{{ $keuzedelen->count() }}</span>
                    <span class="keuzedelen-hero__stat-label">Keuzedelen beschikbaar</span>
                </div>
                <div class="keuzedelen-hero__stat">
                    <span class="keuzedelen-hero__stat-number">{{ $keuzedelen->avg('ec') ?? 3 }}</span>
                    <span class="keuzedelen-hero__stat-label">EC gemiddeld</span>
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
                <h2 class="keuzedelen-section__title">Beschikbare Keuzedelen</h2>
                <p class="keuzedelen-section__subtitle">Ontdek welke keuzedelen het beste bij jouw opleiding en ambities passen</p>
            </div>

            <div class="keuzedelen-grid">
                @foreach($keuzedelen as $keuzedeel)
                <div class="keuzedeel-card">
                    <div class="keuzedeel-card__image">
                        <img src="{{ $keuzedeel->image_url ?? 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=400&h=240&fit=crop' }}" 
                             alt="{{ $keuzedeel->titel }}">
                    </div>
                    <div class="keuzedeel-card__content">
                        <div class="keuzedeel-card__header">
                            <h3 class="keuzedeel-card__title">{{ $keuzedeel->titel }}</h3>
                            <div class="keuzedeel-card__meta">
                                <span class="keuzedeel-card__niveau">Niveau {{ $keuzedeel->niveau }}</span>
                                <span class="keuzedeel-card__sbu">{{ $keuzedeel->ec }} EC</span>
                            </div>
                        </div>
                        <p class="keuzedeel-card__description">
                            {{ Str::limit($keuzedeel->beschrijving, 180) }}
                        </p>
                        <div class="keuzedeel-card__tags">
                            <span class="keuzedeel-card__tag">{{ $keuzedeel->code }}</span>
                            <span class="keuzedeel-card__tag">{{ $keuzedeel->docent }}</span>
                            @if($keuzedeel->isVol())
                                <span class="keuzedeel-card__tag keuzedeel-card__tag--vol">Vol</span>
                            @else
                                <span class="keuzedeel-card__tag">{{ $keuzedeel->huidige_deelnemers }}/{{ $keuzedeel->max_deelnemers }} plekken</span>
                            @endif
                        </div>
                        <div class="keuzedeel-card__actions">
                            <a href="{{ route('keuzedeel.show', $keuzedeel->id) }}" class="keuzedeel-card__link">
                                Meer informatie
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
