@extends('layouts.app')

@section('title', 'Nieuwsberichten')
@section('meta_description', 'Bekijk het laatste nieuws van het Techniek College')

@section('content')
<div class="login-page">
    <div class="login-container">
          <!-- Left Side - Info -->
          <div class="login-info">
            <span class="login-info__badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
              </svg>
              Nieuws
            </span>
            <h1 class="login-info__title">
              Laatste <span class="login-info__title-highlight">Nieuws</span>
            </h1>
            <p class="login-info__text">
              Blijf op de hoogte van het laatste nieuws, evenementen en ontwikkelingen binnen onze school en opleidingen.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Evenementen</h3>
                  <p>Open dagen en workshops</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Successen</h3>
                  <p>Prestaties van onze studenten</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Updates</h3>
                  <p>Nieuwe ontwikkelingen</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Side - News Card -->
          <div class="login-card">
            <div class="login-card__header">
              <div class="login-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                </svg>
              </div>
              <h2 class="login-card__title">Nieuwsberichten</h2>
              <p class="login-card__subtitle">Het laatste nieuws van school</p>
            </div>

            <div class="nieuws-list">
              <div class="nieuws-item">
                <span class="nieuws-item__date">12 Jan 2026</span>
                <h3 class="nieuws-item__title">Open Dag op 25 Januari</h3>
                <p class="nieuws-item__excerpt">Kom langs en ontdek onze opleidingen tijdens de open dag. Maak kennis met docenten en studenten.</p>
              </div>

              <div class="nieuws-item">
                <span class="nieuws-item__date">8 Jan 2026</span>
                <h3 class="nieuws-item__title">Nieuwe ICT Faciliteiten</h3>
                <p class="nieuws-item__excerpt">Onze ICT-afdeling heeft nieuwe computers en software ontvangen voor praktijklessen.</p>
              </div>

              <div class="nieuws-item">
                <span class="nieuws-item__date">3 Jan 2026</span>
                <h3 class="nieuws-item__title">Welkom Terug!</h3>
                <p class="nieuws-item__excerpt">We wensen alle studenten en medewerkers een succesvol nieuw jaar toe.</p>
              </div>
            </div>

            <a href="/contact" class="btn btn--primary btn--full">
              <span>Schrijf je in voor de Nieuwsbrief</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
              </svg>
            </a>
        </div>
    </div>
</div>

<style>
.nieuws-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.nieuws-item {
    padding: 1rem;
    background: var(--bg-secondary, #f8fafc);
    border-radius: 12px;
    border-left: 3px solid var(--primary-color, #3b82f6);
}

.nieuws-item__date {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--primary-color, #3b82f6);
}

.nieuws-item__title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-primary, #1e293b);
    margin: 0.5rem 0;
}

.nieuws-item__excerpt {
    font-size: 0.875rem;
    color: var(--text-secondary, #475569);
    line-height: 1.5;
    margin: 0;
}
</style>
@endsection
