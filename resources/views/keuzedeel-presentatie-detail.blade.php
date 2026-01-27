@extends('layouts.app')

@section('title', $keuzedeel->titel . ' - Presentatie')
@section('meta_description', 'Presentatie van ' . $keuzedeel->titel)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/presentatie.css') }}">
@endsection

@section('content')
<div class="presentatie-detail-container">
    <!-- Presentatie Header -->
    <header class="presentatie-detail-header">
        <div class="presentatie-nav">
            <div class="presentatie-progress">
                <span class="progress-text">{{ $currentIndex + 1 }} / {{ $totaalAantal }}</span>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ (($currentIndex + 1) / $totaalAantal) * 100 }}%"></div>
                </div>
            </div>
            
            <div class="presentatie-actions">
                @if($vorigeKeuzedeel)
                    <a href="{{ route('presentatie.detail', $vorigeKeuzedeel->id) }}" class="nav-btn nav-btn--prev">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 18l-6-6 6-6"/>
                        </svg>
                        Vorige
                    </a>
                @endif
                
                <a href="{{ route('presentatie') }}" class="nav-btn nav-btn--overview">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Overzicht
                </a>
                
                @if($volgendeKeuzedeel)
                    <a href="{{ route('presentatie.detail', $volgendeKeuzedeel->id) }}" class="nav-btn nav-btn--next">
                        Volgende
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l6-6-6-6"/>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
        
        <button id="fullscreen-btn" class="btn btn--primary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/>
            </svg>
            Volledig scherm
        </button>
    </header>

    <!-- Presentatie Slide -->
    <main class="presentatie-slide">
        <div class="slide-content">
            <!-- Title Slide -->
            <section class="slide slide--title">
                <div class="slide-header">
                    <div class="slide-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                        Keuzedeel
                    </div>
                    <h1 class="slide-title">{{ $keuzedeel->titel }}</h1>
                    <div class="slide-meta">
                        <span class="slide-meta-item">{{ $keuzedeel->code }}</span>
                        <span class="slide-meta-item">Niveau {{ $keuzedeel->niveau }}</span>
                        <span class="slide-meta-item">{{ $keuzedeel->ec }} EC</span>
                    </div>
                </div>
            </section>

            <!-- Description Slide -->
            <section class="slide slide--content">
                <h2 class="slide-heading">Beschrijving</h2>
                <div class="slide-text">
                    <p>{{ $keuzedeel->beschrijving }}</p>
                </div>
            </section>

            @if($keuzedeel->voorwaarden)
            <!-- Requirements Slide -->
            <section class="slide slide--content">
                <h2 class="slide-heading">Voorwaarden</h2>
                <div class="slide-text">
                    <p>{{ $keuzedeel->voorwaarden }}</p>
                </div>
            </section>
            @endif

            <!-- Info Grid Slide -->
            <section class="slide slide--info">
                <h2 class="slide-heading">Praktische Informatie</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h3>Docent</h3>
                        <p>{{ $keuzedeel->docent }}</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3>Locatie</h3>
                        <p>{{ $keuzedeel->locatie }}</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3>Startdatum</h3>
                        <p>{{ $keuzedeel->startdatum->format('d F Y') }}</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3>Einddatum</h3>
                        <p>{{ $keuzedeel->einddatum->format('d F Y') }}</p>
                    </div>
                </div>
            </section>

            <!-- Participants Slide -->
            <section class="slide slide--stats">
                <h2 class="slide-heading">Deelnemers</h2>
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-number">{{ $keuzedeel->huidige_deelnemers }}</div>
                        <div class="stat-label">Huidige deelnemers</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">{{ $keuzedeel->max_deelnemers }}</div>
                        <div class="stat-label">Maximum plekken</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">{{ $keuzedeel->max_deelnemers - $keuzedeel->huidige_deelnemers }}</div>
                        <div class="stat-label">Beschikbaar</div>
                    </div>
                </div>
                
                @if($keuzedeel->isVol())
                    <div class="status-message status-message--full">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Dit keuzedeel is vol
                    </div>
                @else
                    <div class="status-message status-message--available">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Nog {{ $keuzedeel->max_deelnemers - $keuzedeel->huidige_deelnemers }} plekken beschikbaar
                    </div>
                @endif
            </section>
        </div>
    </main>

    <!-- Keyboard Instructions -->
    <div class="keyboard-hints">
        <div class="hint">
            <kbd>←</kbd> Vorige
        </div>
        <div class="hint">
            <kbd>→</kbd> Volgende
        </div>
        <div class="hint">
            <kbd>Esc</kbd> Overzicht
        </div>
        <div class="hint">
            <kbd>F</kbd> Volledig scherm
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fullscreen functionality
    const fullscreenBtn = document.getElementById('fullscreen-btn');
    
    function toggleFullscreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen().catch(err => {
                console.log(`Error attempting to enable fullscreen: ${err.message}`);
            });
        } else {
            document.exitFullscreen();
        }
    }
    
    fullscreenBtn.addEventListener('click', toggleFullscreen);

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        // Only handle navigation when not in input fields
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;
        
        switch(e.key) {
            case 'ArrowLeft':
                e.preventDefault();
                @if($vorigeKeuzedeel)
                    window.location.href = "{{ route('presentatie.detail', $vorigeKeuzedeel->id) }}";
                @endif
                break;
                
            case 'ArrowRight':
                e.preventDefault();
                @if($volgendeKeuzedeel)
                    window.location.href = "{{ route('presentatie.detail', $volgendeKeuzedeel->id) }}";
                @endif
                break;
                
            case 'Escape':
                e.preventDefault();
                window.location.href = "{{ route('presentatie') }}";
                break;
                
            case 'f':
            case 'F':
                e.preventDefault();
                toggleFullscreen();
                break;
        }
    });

    // Auto-advance functionality (optional)
    let autoAdvance = false;
    let autoAdvanceInterval;
    
    function toggleAutoAdvance() {
        autoAdvance = !autoAdvance;
        
        if (autoAdvance) {
            autoAdvanceInterval = setInterval(() => {
                @if($volgendeKeuzedeel)
                    window.location.href = "{{ route('presentatie.detail', $volgendeKeuzedeel->id) }}";
                @else
                    // Stop at the end
                    toggleAutoAdvance();
                @endif
            }, 10000); // 10 seconds per slide
        } else {
            clearInterval(autoAdvanceInterval);
        }
    }

    // Add visual indicator for auto-advance (could be enhanced)
    document.addEventListener('keydown', function(e) {
        if (e.key === ' ' && e.shiftKey) {
            e.preventDefault();
            toggleAutoAdvance();
        }
    });
});
</script>
@endsection
