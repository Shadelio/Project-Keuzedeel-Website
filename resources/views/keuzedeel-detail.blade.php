@extends('layouts.app')

@section('title', $keuzedeel->titel)
@section('meta_description', 'Bekijk details van ' . $keuzedeel->titel . ' - Schrijf je in voor dit keuzedeel')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/keuzedelen.css') }}">
@endsection

@section('content')
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
                            <strong>{{ $keuzedeel->niveau }}</span>
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
@endsection
