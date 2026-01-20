@extends('layouts.app')

@section('title', 'Registreren')
@section('meta_description', 'Registreer voor het Techniek College Keuzedeel Portaal')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/register-custom.css') }}">
@endsection

@section('content')
<div class="login-page">
    <div class="login-container">
        <!-- Left Side - Info -->
        <div class="login-info">
            <span class="login-info__badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path d="M12 14v7"/>
                </svg>
                Studentenportaal
            </span>
            <h1 class="login-info__title">
                Start Je <span class="login-info__title-highlight">Toekomst</span>
            </h1>
            <p class="login-info__text">
                Maak een account aan en krijg toegang tot je persoonlijke leeromgeving met keuzedelen, opdrachten en studievoortgang.
            </p>
            
            <div class="login-features">
                <div class="login-feature">
                    <div class="login-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                        </svg>
                    </div>
                    <div class="login-feature__content">
                        <h3>Persoonlijk Dashboard</h3>
                        <p>Beheer al je keuzedelen op één centrale plek</p>
                    </div>
                </div>
                
                <div class="login-feature">
                    <div class="login-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                        </svg>
                    </div>
                    <div class="login-feature__content">
                        <h3>Opdrachten & Deadlines</h3>
                        <p>Houd overzicht over al je taken en deadlines</p>
                    </div>
                </div>
                
                <div class="login-feature">
                    <div class="login-feature__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                    <div class="login-feature__content">
                        <h3>Voortgang Inzien</h3>
                        <p>Bekijk je resultaten en volg je studievoortgang</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Register Card -->
        <div class="login-card">
            <div class="login-card__header">
                <div class="login-card__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"/>
                    </svg>
                </div>
                <h2 class="login-card__title">Registreren</h2>
                <p class="login-card__subtitle">Maak een nieuw account aan</p>
            </div>

            <form class="form" method="POST" action="{{ route('register.submit') }}" autocomplete="on">
                @csrf
                <div class="form__group">
                    <label class="form__label" for="name">Volledige naam</label>
                    <div class="form__input-wrap">
                        <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                        <input class="form__input" type="text" id="name" name="name" placeholder="Jan de Vries" value="{{ old('name') }}" required autofocus />
                    </div>
                    @error('name')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__group">
                    <label class="form__label" for="email">E-mailadres</label>
                    <div class="form__input-wrap">
                        <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                        <input class="form__input" type="email" id="email" name="email" placeholder="student@school.nl" value="{{ old('email') }}" required />
                    </div>
                    @error('email')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__group">
                    <label class="form__label" for="password">Wachtwoord</label>
                    <div class="form__input-wrap">
                        <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                        <input class="form__input" type="password" id="password" name="password" placeholder="••••••••" required />
                    </div>
                    @error('password')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__group">
                    <label class="form__label" for="password_confirmation">Bevestig wachtwoord</label>
                    <div class="form__input-wrap">
                        <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                        <input class="form__input" type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required />
                    </div>
                </div>

                <label class="form__checkbox">
                    <input type="checkbox" name="terms" required />
                    <span class="form__checkbox-mark"></span>
                    <span>Ik ga akkoord met de <a href="/voorwaarden">voorwaarden</a></span>
                </label>

                <button class="btn btn--primary btn--full" type="submit">
                    <span>Account Aanmaken</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </button>
            </form>

            <div class="login-card__footer">
                <span>Heb je al een account?</span>
                <a href="/login" class="login-card__footer-link">Log hier in</a>
            </div>
        </div>
    </div>
</div>
@endsection
