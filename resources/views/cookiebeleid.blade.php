<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cookiebeleid | Keuzedeel Portaal</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  </head>
  <body>
    <div class="site">
      <!-- Top accent bar -->
      <div class="accent-bar"></div>

      <!-- Header -->
      <header class="header">
        <div class="header__container">
          <a class="logo" href="/login">
            <div class="logo__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path d="M12 14v7"/>
              </svg>
            </div>
            <div class="logo__text">
              <span class="logo__title">Keuzedeel Portaal</span>
              <span class="logo__tagline">Je toekomst begint hier</span>
            </div>
          </a>

          <nav class="nav">
            <a class="nav__item" href="#">Opleidingen</a>
            <a class="nav__item" href="#">Over ons</a>
            <a class="nav__item" href="#">Contact</a>
            <a class="nav__item" href="/login">Inloggen</a>
            <a class="nav__btn" href="/register">Aanmelden</a>
          </nav>

          <button class="mobile-menu" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </header>

      <!-- Hero Section -->
      <section class="hero">
        <div class="hero__bg"></div>
        <div class="hero__container">
          <div class="hero__content">
            <span class="hero__badge">Juridisch</span>
            <h1 class="hero__title">Cookiebeleid</h1>
            <p class="hero__text">Informatie over het gebruik van cookies op onze website</p>
          </div>
        </div>
      </section>

      <!-- Main Content -->
      <main class="main">
        <div class="main__container">
          <div class="card card--info">
            <h2 class="card__title">Cookies</h2>
            <p class="card__subtitle">Laatst bijgewerkt: december 2025</p>
            
            <div class="content-section">
              <h3 class="content-section__title">1. Wat zijn cookies?</h3>
              <p class="content-section__text">Cookies zijn kleine tekstbestanden die op je computer of mobiele apparaat worden opgeslagen wanneer je onze website bezoekt. Ze helpen ons om je een betere ervaring te bieden.</p>
            </div>

            <div class="content-section">
              <h3 class="content-section__title">2. Welke cookies gebruiken wij?</h3>
              <p class="content-section__text">Wij gebruiken de volgende soorten cookies:</p>
              <ul class="content-section__list">
                <li><strong>Functionele cookies:</strong> Noodzakelijk voor het functioneren van de website, zoals het onthouden van je inloggegevens</li>
                <li><strong>Sessiecookies:</strong> Tijdelijke cookies die worden verwijderd wanneer je de browser sluit</li>
                <li><strong>Analytische cookies:</strong> Helpen ons te begrijpen hoe bezoekers de website gebruiken</li>
              </ul>
            </div>

            <div class="content-section">
              <h3 class="content-section__title">3. Functionele cookies</h3>
              <p class="content-section__text">Deze cookies zijn essentieel voor het gebruik van het portaal:</p>
              <ul class="content-section__list">
                <li>Inlogsessie bijhouden</li>
                <li>Taalvoorkeuren onthouden</li>
                <li>Beveiligingsinstellingen</li>
              </ul>
            </div>

            <div class="content-section">
              <h3 class="content-section__title">4. Cookies beheren</h3>
              <p class="content-section__text">Je kunt cookies beheren via je browserinstellingen. Let op: het uitschakelen van cookies kan invloed hebben op de werking van het portaal.</p>
            </div>

            <div class="content-section">
              <h3 class="content-section__title">5. Cookies van derden</h3>
              <p class="content-section__text">Wij gebruiken geen cookies van derden voor marketingdoeleinden. Alleen essentiële diensten zoals Google Fonts kunnen cookies plaatsen.</p>
            </div>

            <div class="content-section">
              <h3 class="content-section__title">6. Meer informatie</h3>
              <p class="content-section__text">Voor vragen over ons cookiebeleid kun je contact opnemen via <a href="mailto:privacy@school.nl" class="content-section__link">privacy@school.nl</a></p>
            </div>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="footer__container">
          <div class="footer__top">
            <div class="footer__brand">
              <span class="footer__logo">Keuzedeel Portaal</span>
              <p class="footer__tagline">Je toekomst begint hier</p>
              <p class="footer__description">Het online platform voor MBO-studenten om keuzedelen te beheren, opdrachten in te leveren en studievoortgang te volgen.</p>
            </div>
            
            <div class="footer__section">
              <h4 class="footer__heading">Voor Studenten</h4>
              <ul class="footer__list">
                <li><a href="#">Mijn Keuzedelen</a></li>
                <li><a href="#">Opdrachten</a></li>
                <li><a href="#">Voortgang</a></li>
              </ul>
            </div>
            
            <div class="footer__section">
              <h4 class="footer__heading">Informatie</h4>
              <ul class="footer__list">
                <li><a href="#">Over de School</a></li>
                <li><a href="#">Opleidingen</a></li>
                <li><a href="#">Nieuwsberichten</a></li>
                <li><a href="#">Veelgestelde Vragen</a></li>
              </ul>
            </div>
            
            <div class="footer__section">
              <h4 class="footer__heading">Contact & Support</h4>
              <ul class="footer__list">
                <li><a href="#">Helpdesk</a></li>
                <li><a href="#">Studieloopbaanbegeleiding</a></li>
                <li><a href="#">ICT Support</a></li>
                <li><a href="mailto:info@school.nl">info@school.nl</a></li>
              </ul>
            </div>
          </div>
          
          <div class="footer__bottom">
            <div class="footer__links">
              <a href="/privacy">Privacy</a>
              <a href="/voorwaarden">Voorwaarden</a>
              <a href="/cookiebeleid">Cookiebeleid</a>
              <a href="/toegankelijkheid">Toegankelijkheid</a>
            </div>
            <p class="footer__copy">© 2025 Keuzedeel Portaal. Alle rechten voorbehouden.</p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
