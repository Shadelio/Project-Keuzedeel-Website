@extends('layouts.app')

@section('title', 'Inloggen')
@section('meta_description', 'Log in op het Techniek College Keuzedeel Portaal')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-page" style="background: linear-gradient(135deg, #1C3A3A 0%, #2C4A4A 100%);">
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
              Welkom <span class="login-info__title-highlight">Terug</span>
            </h1>
            <p class="login-info__text">
              Log in op je persoonlijke leeromgeving en krijg toegang tot je keuzedelen, opdrachten en studievoortgang.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Keuzedelen Beheren</h3>
                  <p>Bekijk en beheer al je keuzedelen op één plek</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Opdrachten Inleveren</h3>
                  <p>Lever opdrachten in en bekijk je deadlines</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Voortgang Volgen</h3>
                  <p>Volg je studievoortgang en bekijk je resultaten</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Side - Login Card -->
          <div class="login-card">
            <div class="login-card__header">
              <div class="login-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                </svg>
              </div>
              <h2 class="login-card__title">Inloggen</h2>
              <p class="login-card__subtitle">Gebruik je schoolaccount om in te loggen</p>
            </div>

            <form class="form" action="#" method="post" autocomplete="on">
              <div class="form__group">
                <label class="form__label" for="email">E-mailadres</label>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                  </svg>
                  <input class="form__input" type="email" id="email" name="email" placeholder="student@school.nl" required />
                </div>
              </div>

              <div class="form__group">
                <div class="form__label-row">
                  <label class="form__label" for="password">Wachtwoord</label>
                  <a class="form__link" href="#">Vergeten?</a>
                </div>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                  </svg>
                  <input class="form__input" type="password" id="password" name="password" placeholder="••••••••" required />
                </div>
              </div>

              <label class="form__checkbox">
                <input type="checkbox" name="remember" />
                <span class="form__checkbox-mark"></span>
                <span>Onthoud mij op dit apparaat</span>
              </label>

              <button class="btn btn--primary btn--full" type="submit">
                <span>Inloggen</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
              </button>
              
              <div class="form__divider">of</div>
              
              <div class="social-buttons">
                <button type="button" class="btn btn--social">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 7l6-4v2.5l-4 2.5m3.5 0l-2.5 2-1.5-1 4-3m7 11l6 4v-2.5l-4-2.5m3.5 0l-2.5-2 1.5-1-4 3M8 5v14l8-4.5V5m0 0l3 2v4l-3-1.5V5m0 0l-3 2v4l3-1.5V5"/>
                  </svg>
                  Microsoft
                </button>
              </div>
            </form>

            <div class="login-card__footer">
              <span>Nog geen account?</span>
              <a href="/register" class="login-card__footer-link">Registreer je hier</a>
            </div>
        </div>
    </div>
</div>
@endsection
