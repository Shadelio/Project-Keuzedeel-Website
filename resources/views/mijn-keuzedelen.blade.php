@extends('layouts.app')

@section('title', 'Mijn Inschrijvingen')
@section('meta_description', 'Bekijk en beheer je gekozen keuzedelen')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/mijn-keuzedelen.css') }}">
@endsection
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
                    <h2 class="mijn-keuzedelen-empty__title">Nog geen inschrijvingen</h2>
                    <p class="mijn-keuzedelen-empty__text">
                        Je hebt je nog niet ingeschreven voor keuzedelen. Bekijk het aanbod en schrijf je in voor keuzedelen die bij jouw opleiding passen.
                    </p>
                    <a href="/keuzedelen" class="mijn-keuzedelen-empty__btn">
                        Bekijk keuzedelen om je in te schrijven
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
@endsection
