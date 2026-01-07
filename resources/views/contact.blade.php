@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Neem contact op met het Techniek College')

@section('content')
<div class="login-page">
    <div class="login-container">
          <!-- Left Side - Info -->
          <div class="login-info">
            <span class="login-info__badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
              </svg>
              Contact
            </span>
            <h1 class="login-info__title">
              Neem <span class="login-info__title-highlight">Contact</span> Op
            </h1>
            <p class="login-info__text">
              Heb je vragen over onze opleidingen, keuzedelen of wil je meer informatie? We staan klaar om je te helpen en beantwoorden graag al je vragen.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Snelle Reactie</h3>
                  <p>We reageren binnen 24 uur op je bericht</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Bereikbaarheid</h3>
                  <p>Maandag t/m vrijdag van 08:00 - 17:00</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Bezoek Ons</h3>
                  <p>Kom langs voor een rondleiding op school</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Side - Contact Card -->
          <div class="login-card">
            <div class="login-card__header">
              <div class="login-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                </svg>
              </div>
              <h2 class="login-card__title">Contactgegevens</h2>
              <p class="login-card__subtitle">Wij helpen je graag verder</p>
            </div>

            <div class="contact-info">
              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <span class="contact-item__label">Telefoon</span>
                  <a href="tel:+31123456789" class="contact-item__value">+31 (0)12 345 6789</a>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <span class="contact-item__label">E-mail</span>
                  <a href="mailto:info@techniekcollege.nl" class="contact-item__value">info@techniekcollege.nl</a>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                  </svg>
                </div>
                <div class="contact-item__content">
                  <span class="contact-item__label">Adres</span>
                  <span class="contact-item__value">Schoolstraat 123<br>1234 AB Amsterdam</span>
                </div>
              </div>
            </div>

            <div class="contact-message">
              <p>Heb je een vraag of wil je meer informatie? Neem gerust contact met ons op via telefoon of e-mail. We staan je graag te woord!</p>
            </div>

            <a href="mailto:info@techniekcollege.nl" class="btn btn--primary btn--full">
              <span>Stuur een E-mail</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
              </svg>
            </a>
        </div>
    </div>
</div>

<style>
.contact-info {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.contact-item__icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--primary-color, #3b82f6) 0%, var(--primary-dark, #1d4ed8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.contact-item__icon svg {
    width: 20px;
    height: 20px;
    stroke: white;
}

.contact-item__content {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.contact-item__label {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--text-muted, #64748b);
}

.contact-item__value {
    font-size: 1rem;
    font-weight: 500;
    color: var(--text-primary, #1e293b);
    text-decoration: none;
    line-height: 1.5;
}

.contact-item__value:hover {
    color: var(--primary-color, #3b82f6);
}

.contact-message {
    background: var(--bg-secondary, #f8fafc);
    border-radius: 12px;
    padding: 1rem;
    margin-bottom: 1.5rem;
}

.contact-message p {
    font-size: 0.875rem;
    color: var(--text-secondary, #475569);
    line-height: 1.6;
    margin: 0;
}
</style>
@endsection
