@extends('layouts.app')

@section('title', 'Inloggen')
@section('meta_description', 'Log in op het Techniek College Keuzedeel Portaal')

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
                    <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                  </svg>
                  Google
                </button>
                <button type="button" class="btn btn--social">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                  </svg>
                  GitHub
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
