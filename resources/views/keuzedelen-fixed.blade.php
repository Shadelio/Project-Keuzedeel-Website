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
    line-height: 1;
}

.keuzedelen-hero__stat-label {
    display: block;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.7);
    margin-top: 8px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.keuzedelen-section {
    padding: 60px 20px;
    background: #f9fafb;
}

.keuzedelen-container {
    max-width: 1200px;
    margin: 0 auto;
}

.keuzedelen-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.keuzedeel-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
}

.keuzedeel-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.keuzedeel-card__image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.keuzedeel-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.keuzedeel-card:hover .keuzedeel-card__image img {
    transform: scale(1.05);
}

.keuzedeel-card__overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 100%);
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    padding: 16px;
}

.keuzedeel-card__badge {
    background: rgba(200, 212, 0, 0.9);
    color: #1C3A3A;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.keuzedeel-card__ec {
    background: rgba(255, 255, 255, 0.9);
    color: #1C3A3A;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.75rem;
    font-weight: 600;
}

.keuzedeel-card__content {
    padding: 24px;
}

.keuzedeel-card__title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1C3A3A;
    margin: 0 0 8px 0;
    line-height: 1.3;
}

.keuzedeel-card__code {
    color: #6b7280;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 16px;
}

.keuzedeel-card__description {
    color: #6b7280;
    line-height: 1.6;
    margin: 0 0 20px 0;
}

.keuzedeel-card__meta {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 20px;
}

.keuzedeel-card__meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #6b7280;
    font-size: 0.875rem;
}

.keuzedeel-card__meta-item svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    color: #9ca3af;
}

.keuzedeel-card__footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid #e5e7eb;
}

.keuzedeel-card__participants {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #6b7280;
    font-size: 0.875rem;
}

.keuzedeel-card__participants svg {
    width: 16px;
    height: 16px;
    color: #9ca3af;
}

.keuzedeel-card__status {
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.keuzedeel-card__status--vol {
    background: rgba(239, 68, 68, 0.1);
    color: #dc2626;
}

.keuzedeel-card__status--available {
    background: rgba(34, 197, 94, 0.1);
    color: #22c55e;
}

.keuzedeel-card__actions {
    display: flex;
    gap: 12px;
}

.keuzedeel-card__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.875rem;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
}

.keuzedeel-card__btn--primary {
    background: linear-gradient(135deg, #16A34A, #22C55E);
    color: white;
}

.keuzedeel-card__btn--primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(22, 163, 74, 0.3);
}

@media (max-width: 768px) {
    .keuzedelen-hero__stats {
        gap: 30px;
    }
    
    .keuzedelen-hero__stat-number {
        font-size: 2rem;
    }
    
    .keuzedelen-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .keuzedeel-card__footer {
        flex-direction: column;
        gap: 16px;
        align-items: stretch;
    }
    
    .keuzedeel-card__actions {
        justify-content: center;
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
                Ontdek <span>Keuzedelen</span>
            </h1>
            <p class="keuzedelen-hero__text">
                Verbreid je kennis en ontwikkel nieuwe vaardigheden met onze diverse keuzedelen. 
                Kies uit tech, design, business en meer!
            </p>
            <div class="keuzedelen-hero__stats">
                <div class="keuzedelen-hero__stat">
                    <span class="keuzedelen-hero__stat-number">{{ $keuzedelen->count() }}</span>
                    <span class="keuzedelen-hero__stat-label">Beschikbaar</span>
                </div>
                <div class="keuzedelen-hero__stat">
                    <span class="keuzedelen-hero__stat-number">{{ $keuzedelen->sum('ec') }}</span>
                    <span class="keuzedelen-hero__stat-label">EC Punten</span>
                </div>
                <div class="keuzedelen-hero__stat">
                    <span class="keuzedelen-hero__stat-number">{{ $keuzedelen->where('niveau', 'K3')->count() }}</span>
                    <span class="keuzedelen-hero__stat-label">K3 Niveau</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Keuzedelen Grid -->
    <section class="keuzedelen-section">
        <div class="keuzedelen-container">
            <div class="keuzedelen-grid">
                @foreach($keuzedelen as $keuzedeel)
                    <div class="keuzedeel-card">
                        <div class="keuzedeel-card__image">
                            <img src="{{ $keuzedeel->image_url ?? 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=200&fit=crop' }}" 
                                 alt="{{ $keuzedeel->titel }}" 
                                 loading="lazy">
                            <div class="keuzedeel-card__overlay">
                                <div class="keuzedeel-card__badge">
                                    {{ $keuzedeel->niveau }}
                                </div>
                                <div class="keuzedeel-card__ec">
                                    {{ $keuzedeel->ec }} EC
                                </div>
                            </div>
                        </div>
                        
                        <div class="keuzedeel-card__content">
                            <h3 class="keuzedeel-card__title">{{ $keuzedeel->titel }}</h3>
                            <div class="keuzedeel-card__code">{{ $keuzedeel->code }}</div>
                            
                            <p class="keuzedeel-card__description">
                                {{ Str::limit($keuzedeel->beschrijving, 120) }}
                            </p>
                            
                            <div class="keuzedeel-card__meta">
                                <div class="keuzedeel-card__meta-item">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    {{ $keuzedeel->docent }}
                                </div>
                                <div class="keuzedeel-card__meta-item">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $keuzedeel->locatie }}
                                </div>
                                <div class="keuzedeel-card__meta-item">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $keuzedeel->startdatum->format('M Y') }}
                                </div>
                            </div>
                            
                            <div class="keuzedeel-card__footer">
                                <div class="keuzedeel-card__participants">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <span>{{ $keuzedeel->huidige_deelnemers }}/{{ $keuzedeel->max_deelnemers }}</span>
                                    @if($keuzedeel->isVol())
                                        <span class="keuzedeel-card__status keuzedeel-card__status--vol">Vol</span>
                                    @else
                                        <span class="keuzedeel-card__status keuzedeel-card__status--available">Beschikbaar</span>
                                    @endif
                                </div>
                                
                                <div class="keuzedeel-card__actions">
                                    <a href="{{ route('keuzedeel.show', $keuzedeel->id) }}" class="keuzedeel-card__btn keuzedeel-card__btn--primary">
                                        Meer info
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
