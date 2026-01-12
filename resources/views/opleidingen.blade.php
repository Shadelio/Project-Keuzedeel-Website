@extends('layouts.app')

@section('title', 'Opleidingen')
@section('meta_description', 'Bekijk alle opleidingen van het Techniek College')

@section('content')
<div class="login-page">
    <div class="login-container">
          <!-- Left Side - Info -->
          <div class="login-info">
            <span class="login-info__badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
              </svg>
              Onderwijs
            </span>
            <h1 class="login-info__title">
              Onze <span class="login-info__title-highlight">Opleidingen</span>
            </h1>
            <p class="login-info__text">
              Ontdek ons brede aanbod van technische opleidingen. Van elektrotechniek tot ICT, wij bieden de perfecte opleiding voor jouw toekomst.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Praktijkgericht</h3>
                  <p>Leer door te doen met moderne apparatuur</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Stage & Werk</h3>
                  <p>Directe connectie met het bedrijfsleven</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Erkend Diploma</h3>
                  <p>MBO niveau 2, 3 en 4 opleidingen</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Side - Opleidingen Card -->
          <div class="login-card">
            <div class="login-card__header">
              <div class="login-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
              </div>
              <h2 class="login-card__title">Opleidingsaanbod</h2>
              <p class="login-card__subtitle">Kies de opleiding die bij jou past</p>
            </div>

            <div class="opleidingen-list">
              <a href="#" class="opleiding-item">
                <div class="opleiding-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                  </svg>
                </div>
                <div class="opleiding-item__content">
                  <h3>ICT & Software Development</h3>
                  <p>Niveau 4</p>
                </div>
                <svg class="opleiding-item__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
              </a>

              <a href="#" class="opleiding-item">
                <div class="opleiding-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                  </svg>
                </div>
                <div class="opleiding-item__content">
                  <h3>Elektrotechniek</h3>
                  <p>Niveau 3 & 4</p>
                </div>
                <svg class="opleiding-item__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
              </a>

              <a href="#" class="opleiding-item">
                <div class="opleiding-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852z"/>
                  </svg>
                </div>
                <div class="opleiding-item__content">
                  <h3>Werktuigbouwkunde</h3>
                  <p>Niveau 2, 3 & 4</p>
                </div>
                <svg class="opleiding-item__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
              </a>

              <a href="#" class="opleiding-item">
                <div class="opleiding-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                  </svg>
                </div>
                <div class="opleiding-item__content">
                  <h3>Installatietechniek</h3>
                  <p>Niveau 2 & 3</p>
                </div>
                <svg class="opleiding-item__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
              </a>
            </div>

            <a href="/contact" class="btn btn--primary btn--full">
              <span>Meer Informatie Aanvragen</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
              </svg>
            </a>
        </div>
    </div>
</div>

<style>
.opleidingen-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
}

.opleiding-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: var(--bg-secondary, #f8fafc);
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.2s ease;
}

.opleiding-item:hover {
    background: var(--bg-tertiary, #f1f5f9);
    transform: translateX(4px);
}

.opleiding-item__icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--primary-color, #3b82f6) 0%, var(--primary-dark, #1d4ed8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.opleiding-item__icon svg {
    width: 22px;
    height: 22px;
    stroke: white;
}

.opleiding-item__content {
    flex: 1;
}

.opleiding-item__content h3 {
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text-primary, #1e293b);
    margin: 0 0 0.25rem 0;
}

.opleiding-item__content p {
    font-size: 0.8rem;
    color: var(--text-muted, #64748b);
    margin: 0;
}

.opleiding-item__arrow {
    width: 20px;
    height: 20px;
    stroke: var(--text-muted, #64748b);
    flex-shrink: 0;
    transition: transform 0.2s ease;
}

.opleiding-item:hover .opleiding-item__arrow {
    transform: translateX(4px);
    stroke: var(--primary-color, #3b82f6);
}
</style>
@endsection
