@extends('layouts.app')

@section('title', 'Keuzedelen Presentatie')
@section('meta_description', 'PowerPoint-achtige presentatie van keuzedelen voor SLB\'ers')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/presentatie.css') }}">
@endsection

@section('content')
<div class="presentatie-container">
    <header class="presentatie-header">
        <h1>🎓 Keuzedelen Presentatie</h1>
        <p>Klik op een keuzedeel om de presentatie te starten</p>
        <div class="presentatie-controls">
            <button id="fullscreen-btn" class="btn btn--primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/>
                </svg>
                Volledig scherm
            </button>
        </div>
    </header>

    <main class="presentatie-grid">
        @foreach($keuzedelen as $keuzedeel)
            <a href="{{ route('presentatie.detail', $keuzedeel->id) }}" class="presentatie-card">
                <div class="presentatie-card__header">
                    <h3>{{ $keuzedeel->titel }}</h3>
                    <span class="presentatie-card__code">{{ $keuzedeel->code }}</span>
                </div>
                <div class="presentatie-card__content">
                    <p class="presentatie-card__beschrijving">{{ Str::limit($keuzedeel->beschrijving, 100) }}</p>
                    <div class="presentatie-card__meta">
                        <span class="meta-item">
                            <strong>Niveau:</strong> {{ $keuzedeel->niveau }}
                        </span>
                        <span class="meta-item">
                            <strong>EC:</strong> {{ $keuzedeel->ec }}
                        </span>
                        <span class="meta-item">
                            <strong>Docent:</strong> {{ $keuzedeel->docent }}
                        </span>
                        <span class="meta-item">
                            <strong>Locatie:</strong> {{ $keuzedeel->locatie }}
                        </span>
                    </div>
                </div>
                <div class="presentatie-card__footer">
                    <span class="presentatie-card__deelnemers">
                        {{ $keuzedeel->huidige_deelnemers }}/{{ $keuzedeel->max_deelnemers }} deelnemers
                    </span>
                    <div class="presentatie-card__action">
                        <span>Start presentatie →</span>
                    </div>
                </div>
            </a>
        @endforeach
    </main>

    <footer class="presentatie-footer">
        <p>Totaal: {{ $keuzedelen->count() }} keuzedelen</p>
        <p>Gebruik pijltoetsen voor navigatie in presentatie modus</p>
    </footer>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fullscreen functionality
    const fullscreenBtn = document.getElementById('fullscreen-btn');
    
    fullscreenBtn.addEventListener('click', function() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen().catch(err => {
                console.log(`Error attempting to enable fullscreen: ${err.message}`);
            });
        } else {
            document.exitFullscreen();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        // Only handle navigation when not in input fields
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;
        
        const cards = document.querySelectorAll('.presentatie-card');
        const currentFocus = document.activeElement;
        let currentIndex = -1;
        
        // Find current focused card
        cards.forEach((card, index) => {
            if (card === currentFocus || card.contains(currentFocus)) {
                currentIndex = index;
            }
        });
        
        switch(e.key) {
            case 'ArrowRight':
            case 'ArrowDown':
                e.preventDefault();
                if (currentIndex < cards.length - 1) {
                    cards[currentIndex + 1].focus();
                } else if (currentIndex === -1 && cards.length > 0) {
                    cards[0].focus();
                }
                break;
                
            case 'ArrowLeft':
            case 'ArrowUp':
                e.preventDefault();
                if (currentIndex > 0) {
                    cards[currentIndex - 1].focus();
                }
                break;
                
            case 'Enter':
                e.preventDefault();
                if (currentIndex >= 0) {
                    cards[currentIndex].click();
                }
                break;
        }
    });

    // Make cards focusable
    document.querySelectorAll('.presentatie-card').forEach(card => {
        card.setAttribute('tabindex', '0');
    });
});
</script>
@endsection
