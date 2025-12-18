<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Over Ons | Keuzedeel Portaal</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
  </head>
  <body>
    <div class="site">
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
            <a class="nav__item" href="/opleidingen">Opleidingen</a>
            <a class="nav__item nav__item--active" href="/over-ons">Over ons</a>
            <a class="nav__item" href="/veelgestelde-vragen">FAQ</a>
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
        <div class="hero__glow"></div>
        <div class="hero__container">
          <span class="hero__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 14l9-5-9-5-9 5 9 5z"/>
              <path d="M12 14v7"/>
            </svg>
            Over Onze School
          </span>
          <h1 class="hero__title">Waar <span class="hero__title-highlight">Talent</span> Groeit</h1>
          <p class="hero__text">Al meer dan 25 jaar leiden wij studenten op tot vakmensen die klaar zijn voor de toekomst. Ontdek wie we zijn en waar we voor staan.</p>
          <div class="hero__buttons">
            <a href="/opleidingen" class="hero__btn hero__btn--primary">
              Bekijk Opleidingen
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
              </svg>
            </a>
            <a href="#mission" class="hero__btn hero__btn--secondary">
              Onze Missie
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="hero__scroll">
          <div class="hero__scroll-icon"></div>
          Scroll
        </div>
      </section>

      <!-- Stats Section -->
      <section class="stats">
        <div class="stats__container">
          <div class="stats__grid">
            <div class="stats__card">
              <div class="stats__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                </svg>
              </div>
              <div class="stats__number">5.200+</div>
              <div class="stats__label">Actieve Studenten</div>
            </div>
            <div class="stats__card">
              <div class="stats__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                </svg>
              </div>
              <div class="stats__number">50+</div>
              <div class="stats__label">Opleidingen</div>
            </div>
            <div class="stats__card">
              <div class="stats__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                </svg>
              </div>
              <div class="stats__number">96%</div>
              <div class="stats__label">Slagingspercentage</div>
            </div>
            <div class="stats__card">
              <div class="stats__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0"/>
                </svg>
              </div>
              <div class="stats__number">200+</div>
              <div class="stats__label">Partnerbedrijven</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Mission Section -->
      <section class="mission" id="mission">
        <div class="mission__container">
          <div class="section-header">
            <span class="section-badge">Wat Drijft Ons</span>
            <h2 class="section-title">Missie, Visie & Strategie</h2>
            <p class="section-text">Wij geloven dat elk talent telt en dat iedereen de kans verdient om te groeien en te excelleren.</p>
          </div>
          
          <div class="mission__grid">
            <div class="mission__card">
              <div class="mission__card-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                </svg>
              </div>
              <h3 class="mission__card-title">Onze Missie</h3>
              <p class="mission__card-text">Wij bereiden studenten voor op een succesvolle carrière door praktijkgericht onderwijs te bieden dat naadloos aansluit bij de dynamische arbeidsmarkt van vandaag en morgen.</p>
            </div>
            
            <div class="mission__card">
              <div class="mission__card-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                  <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <h3 class="mission__card-title">Onze Visie</h3>
              <p class="mission__card-text">Wij willen dé MBO-school van de regio zijn waar studenten niet alleen vakkennis opdoen, maar ook persoonlijk groeien en hun unieke talenten ontdekken.</p>
            </div>
            
            <div class="mission__card">
              <div class="mission__card-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
              </div>
              <h3 class="mission__card-title">Onze Strategie</h3>
              <p class="mission__card-text">Door intensieve samenwerking met het bedrijfsleven, innovatief onderwijs en persoonlijke begeleiding zorgen we voor maximale kansen op de arbeidsmarkt.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Values Section -->
      <section class="values">
        <div class="values__bg"></div>
        <div class="values__container">
          <div class="section-header">
            <span class="section-badge">Kernwaarden</span>
            <h2 class="section-title">Waar Wij Voor Staan</h2>
            <p class="section-text">Deze vijf kernwaarden vormen het fundament van alles wat we doen.</p>
          </div>
          
          <div class="values__grid">
            <div class="values__item">
              <div class="values__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>
              </div>
              <h3 class="values__title">Respect</h3>
              <p class="values__text">Iedereen is welkom en wordt gewaardeerd</p>
            </div>
            
            <div class="values__item">
              <div class="values__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
              </div>
              <h3 class="values__title">Verantwoordelijkheid</h3>
              <p class="values__text">Eigenaarschap over je eigen leerproces</p>
            </div>
            
            <div class="values__item">
              <div class="values__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                </svg>
              </div>
              <h3 class="values__title">Samenwerking</h3>
              <p class="values__text">Samen bereiken we meer dan alleen</p>
            </div>
            
            <div class="values__item">
              <div class="values__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                </svg>
              </div>
              <h3 class="values__title">Ontwikkeling</h3>
              <p class="values__text">Continu leren en jezelf verbeteren</p>
            </div>
            
            <div class="values__item">
              <div class="values__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                </svg>
              </div>
              <h3 class="values__title">Innovatie</h3>
              <p class="values__text">Voorop lopen met nieuwe technologieën</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Timeline Section -->
      <section class="timeline">
        <div class="timeline__container">
          <div class="section-header">
            <span class="section-badge">Onze Geschiedenis</span>
            <h2 class="section-title">25 Jaar Vakmanschap</h2>
            <p class="section-text">Een rijke geschiedenis van groei, innovatie en succes.</p>
          </div>
          
          <div class="timeline__list">
            <div class="timeline__item">
              <div class="timeline__dot"></div>
              <span class="timeline__year">1998</span>
              <h3 class="timeline__title">De Oprichting</h3>
              <p class="timeline__text">Onze school werd opgericht met één locatie en 200 studenten. De focus lag op technische opleidingen voor de regionale industrie.</p>
            </div>
            
            <div class="timeline__item">
              <div class="timeline__dot"></div>
              <span class="timeline__year">2005</span>
              <h3 class="timeline__title">Uitbreiding Opleidingsaanbod</h3>
              <p class="timeline__text">Introductie van economische en zorgopleiding. Het aantal studenten groeide naar 1.500.</p>
            </div>
            
            <div class="timeline__item">
              <div class="timeline__dot"></div>
              <span class="timeline__year">2012</span>
              <h3 class="timeline__title">Nieuwe Campus</h3>
              <p class="timeline__text">Opening van onze moderne hoofdlocatie met state-of-the-art faciliteiten en praktijklokalen.</p>
            </div>
            
            <div class="timeline__item">
              <div class="timeline__dot"></div>
              <span class="timeline__year">2018</span>
              <h3 class="timeline__title">Digitale Transformatie</h3>
              <p class="timeline__text">Lancering van het Keuzedeel Portaal en volledige digitalisering van het onderwijsproces.</p>
            </div>
            
            <div class="timeline__item">
              <div class="timeline__dot"></div>
              <span class="timeline__year">2025</span>
              <h3 class="timeline__title">Vandaag & Morgen</h3>
              <p class="timeline__text">Met meer dan 5.000 studenten en 50+ opleidingen blijven we innoveren en groeien. De toekomst is groen!</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="team">
        <div class="team__container">
          <div class="section-header">
            <span class="section-badge">Ons Team</span>
            <h2 class="section-title">De Mensen Achter De School</h2>
            <p class="section-text">Maak kennis met ons toegewijde managementteam.</p>
          </div>
          
          <div class="team__grid">
            <div class="team__card">
              <div class="team__avatar">JV</div>
              <h3 class="team__name">Jan Vermeer</h3>
              <p class="team__role">College van Bestuur</p>
              <p class="team__bio">Al 15 jaar leiding aan onze instelling met passie voor innovatief onderwijs.</p>
            </div>
            
            <div class="team__card">
              <div class="team__avatar">SB</div>
              <h3 class="team__name">Sarah Bakker</h3>
              <p class="team__role">Directeur Onderwijs</p>
              <p class="team__bio">Verantwoordelijk voor de kwaliteit en ontwikkeling van ons onderwijsaanbod.</p>
            </div>
            
            <div class="team__card">
              <div class="team__avatar">MK</div>
              <h3 class="team__name">Mohammed Khalid</h3>
              <p class="team__role">Directeur Bedrijfsvoering</p>
              <p class="team__bio">Zorgt voor optimale faciliteiten en efficiënte bedrijfsprocessen.</p>
            </div>
            
            <div class="team__card">
              <div class="team__avatar">LW</div>
              <h3 class="team__name">Lisa de Wit</h3>
              <p class="team__role">Manager Studentenzaken</p>
              <p class="team__bio">Het welzijn en de begeleiding van studenten staat bij haar centraal.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="cta">
        <div class="cta__bg"></div>
        <div class="cta__container">
          <h2 class="cta__title">Klaar om te starten?</h2>
          <p class="cta__text">Ontdek welke opleiding bij jou past en begin aan je toekomst.</p>
          <a href="/register" class="cta__btn">
            Meld je aan
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
          </a>
        </div>
      </section>

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
                <li><a href="/over-ons">Over Ons</a></li>
                <li><a href="/opleidingen">Opleidingen</a></li>
                <li><a href="/nieuwsberichten">Nieuws</a></li>
                <li><a href="/veelgestelde-vragen">FAQ</a></li>
              </ul>
            </div>
            
            <div class="footer__section">
              <h4 class="footer__heading">Contact</h4>
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
              <a href="/cookiebeleid">Cookies</a>
              <a href="/toegankelijkheid">Toegankelijkheid</a>
            </div>
            <p class="footer__copy">© 2025 Keuzedeel Portaal. Alle rechten voorbehouden.</p>
          </div>
        </div>
      </footer>
    </div>

    <script>
      // Header scroll effect
      const header = document.querySelector('.header');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          header.classList.add('header--scrolled');
        } else {
          header.classList.remove('header--scrolled');
        }
      });
    </script>
  </body>
</html>
