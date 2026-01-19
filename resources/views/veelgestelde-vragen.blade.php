@extends('layouts.app')

@section('title', 'Veelgestelde Vragen')
@section('meta_description', 'Veelgestelde vragen over het Techniek College')

@section('content')
<div class="login-page">
    <div class="login-container">
          <!-- Left Side - Info -->
          <div class="login-info">
            <span class="login-info__badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
              </svg>
              FAQ
            </span>
            <h1 class="login-info__title">
              Veelgestelde <span class="login-info__title-highlight">Vragen</span>
            </h1>
            <p class="login-info__text">
              Heb je een vraag? Bekijk hieronder de meest gestelde vragen en antwoorden. Staat je vraag er niet bij? Neem dan contact met ons op.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Aanmelding</h3>
                  <p>Informatie over inschrijven</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Opleidingen</h3>
                  <p>Vragen over onze studies</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Contact</h3>
                  <p>Nog vragen? Bel of mail ons</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Side - FAQ Card -->
          <div class="login-card">
            <div class="login-card__header">
              <div class="login-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                </svg>
              </div>
              <h2 class="login-card__title">FAQ</h2>
              <p class="login-card__subtitle">Antwoorden op veelgestelde vragen</p>
            </div>

            <div class="faq-list">
              <details class="faq-item">
                <summary class="faq-item__question">Hoe kan ik mij aanmelden?</summary>
                <p class="faq-item__answer">Je kunt je aanmelden via onze website door op de registreer knop te klikken, of kom langs tijdens een van onze open dagen.</p>
              </details>

              <details class="faq-item">
                <summary class="faq-item__question">Wat zijn de toelatingseisen?</summary>
                <p class="faq-item__answer">De toelatingseisen verschillen per opleiding en niveau. Over het algemeen heb je een VMBO-diploma nodig voor niveau 3 en 4 opleidingen.</p>
              </details>

              <details class="faq-item">
                <summary class="faq-item__question">Wanneer begint het schooljaar?</summary>
                <p class="faq-item__answer">Het schooljaar begint eind augustus of begin september. De exacte datum wordt elk jaar bekend gemaakt op onze website.</p>
              </details>

              <details class="faq-item">
                <summary class="faq-item__question">Zijn er stageplaatsen beschikbaar?</summary>
                <p class="faq-item__answer">Ja, wij hebben een uitgebreid netwerk van stagebedrijven. Onze stagecoördinatoren helpen je bij het vinden van een geschikte stageplek.</p>
              </details>

              <details class="faq-item">
                <summary class="faq-item__question">Hoeveel kost de opleiding?</summary>
                <p class="faq-item__answer">MBO-opleidingen worden grotendeels door de overheid bekostigd. Je betaalt wel lesgeld en eventuele materiaalkosten. Neem contact met ons op voor meer details.</p>
              </details>
            </div>

            <a href="/login" class="btn btn--primary btn--full">
              <span>Log in voor Hulp</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
              </svg>
            </a>
        </div>
    </div>
</div>

<style>
.faq-list {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
}

.faq-item {
    background: var(--bg-secondary, #f8fafc);
    border-radius: 12px;
    overflow: hidden;
}

.faq-item__question {
    padding: 1rem;
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text-primary, #1e293b);
    cursor: pointer;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.faq-item__question::-webkit-details-marker {
    display: none;
}

.faq-item__question::after {
    content: '+';
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--primary-color, #3b82f6);
    transition: transform 0.2s ease;
}

.faq-item[open] .faq-item__question::after {
    content: '−';
}

.faq-item[open] {
    background: var(--bg-tertiary, #f1f5f9);
}

.faq-item__answer {
    padding: 0 1rem 1rem 1rem;
    font-size: 0.875rem;
    color: var(--text-secondary, #475569);
    line-height: 1.6;
    margin: 0;
}
</style>
@endsection
