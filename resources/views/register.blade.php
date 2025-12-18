<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registreren | Keuzedeel Portaal</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
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
            <a class="nav__item" href="/over-ons">Over ons</a>
            <a class="nav__item" href="/veelgestelde-vragen">FAQ</a>
            <a class="nav__item" href="/login">Inloggen</a>
            <a class="nav__btn nav__item--active" href="/register">Aanmelden</a>
          </nav>

          <button class="mobile-menu" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </header>

      <!-- Main Register Area -->
      <main class="login-wrapper">
        <div class="login-wrapper__bg"></div>
        
        <div class="login-container">
          <!-- Left Side - Info -->
          <div class="login-info">
            <span class="login-info__badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"/>
              </svg>
              Nieuw Account
            </span>
            <h1 class="login-info__title">
              Start Je <span class="login-info__title-highlight">Toekomst</span>
            </h1>
            <p class="login-info__text">
              Maak een account aan en krijg direct toegang tot al je keuzedelen, opdrachten en studiemateriaal.
            </p>
            
            <div class="login-features">
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Gratis Registratie</h3>
                  <p>Registreren is volledig gratis voor alle studenten</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Veilig & Beveiligd</h3>
                  <p>Je gegevens worden veilig opgeslagen en versleuteld</p>
                </div>
              </div>
              
              <div class="login-feature">
                <div class="login-feature__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                  </svg>
                </div>
                <div class="login-feature__content">
                  <h3>Direct Toegang</h3>
                  <p>Na registratie heb je direct toegang tot het portaal</p>
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

            <form class="form" action="#" method="post" autocomplete="on">
              <div class="form__group">
                <label class="form__label" for="name">Volledige naam</label>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                  </svg>
                  <input class="form__input" type="text" id="name" name="name" placeholder="Jan de Vries" required />
                </div>
              </div>
              
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
                <label class="form__label" for="studentnr">Studentnummer</label>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"/>
                  </svg>
                  <input class="form__input" type="text" id="studentnr" name="studentnr" placeholder="1234567" required />
                </div>
              </div>

              <div class="form__group">
                <label class="form__label" for="password">Wachtwoord</label>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                  </svg>
                  <input class="form__input" type="password" id="password" name="password" placeholder="Minimaal 8 karakters" required />
                </div>
              </div>

              <div class="form__group">
                <label class="form__label" for="password_confirm">Bevestig wachtwoord</label>
                <div class="form__input-wrap">
                  <svg class="form__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  <input class="form__input" type="password" id="password_confirm" name="password_confirm" placeholder="Herhaal wachtwoord" required />
                </div>
              </div>

              <label class="form__checkbox">
                <input type="checkbox" name="terms" required />
                <span class="form__checkbox-mark"></span>
                <span>Ik ga akkoord met de <a href="/voorwaarden" class="form__link">voorwaarden</a></span>
              </label>

              <button class="btn btn--primary btn--full" type="submit">
                <span>Account aanmaken</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
              </button>
            </form>

            <div class="login-card__footer">
              <span>Al een account?</span>
              <a href="/login" class="login-card__footer-link">Log hier in</a>
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
              <p class="footer__description">Het online platform voor MBO-studenten om keuzedelen te beheren en studievoortgang te volgen.</p>
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
