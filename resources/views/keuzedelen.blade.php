@extends('layouts.app')

@section('title', 'Keuzedelen')
@section('meta_description', 'Bekijk alle keuzedelen van Techniek College Rotterdam - Verdiep je kennis met aanvullende modules')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/keuzedelen.css') }}">
@endsection

@section('content')
<!-- Notice Bar -->
<div class="notice-bar">
    <div class="notice-bar__container">
        <svg class="notice-bar__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <span class="notice-bar__text">Let op: Keuzedelen kunnen momenteel alleen bekeken worden. Inschrijving is nog niet mogelijk.</span>
    </div>
</div>

<!-- Hero Section -->
<section class="keuzedelen-hero">
    <div class="keuzedelen-hero__container">
        <span class="keuzedelen-hero__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
            </svg>
            Keuzedelen
        </span>
        <h1 class="keuzedelen-hero__title">
            Verdiep je met <span>Keuzedelen</span>
        </h1>
        <p class="keuzedelen-hero__text">
            Keuzedelen zijn aanvullende modules waarmee je je opleiding persoonlijker maakt. Kies onderwerpen die aansluiten bij jouw interesses en carrièredoelen.
        </p>
        <div class="keuzedelen-hero__stats">
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">50+</span>
                <span class="keuzedelen-hero__stat-label">Keuzedelen beschikbaar</span>
            </div>
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">240</span>
                <span class="keuzedelen-hero__stat-label">SBU gemiddeld</span>
            </div>
            <div class="keuzedelen-hero__stat">
                <span class="keuzedelen-hero__stat-number">100%</span>
                <span class="keuzedelen-hero__stat-label">Praktijkgericht</span>
            </div>
        </div>
    </div>
</section>

<!-- Keuzedelen Grid -->
<section class="keuzedelen-section">
    <div class="keuzedelen-container">
        <div class="keuzedelen-section__header">
            <h2 class="keuzedelen-section__title">Beschikbare Keuzedelen</h2>
            <p class="keuzedelen-section__subtitle">Ontdek welke keuzedelen het beste bij jouw opleiding en ambities passen</p>
        </div>

        <div class="keuzedelen-grid">
            <!-- Programmeren -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=400&h=200&fit=crop" alt="Programmeren">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Programmeren</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Leer de basis van programmeren met Python, JavaScript of C#. Ontwikkel eigen applicaties en scripts.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Python</span>
                        <span class="keuzedeel-card__tag">JavaScript</span>
                        <span class="keuzedeel-card__tag">Logica</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('programmeren')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Duurzaamheid -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=400&h=200&fit=crop" alt="Duurzaamheid">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Duurzaamheid in de Techniek</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Leer over duurzame technologieën, energiebesparing en circulaire economie in de technische sector.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Energie</span>
                        <span class="keuzedeel-card__tag">Circulair</span>
                        <span class="keuzedeel-card__tag">Milieu</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('duurzaamheid')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 3D Printen -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=400&h=200&fit=crop" alt="3D Printen">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">3D Printen & Modelleren</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Ontwerp 3D-modellen en print ze uit. Leer werken met CAD-software en verschillende printtechnieken.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">CAD</span>
                        <span class="keuzedeel-card__tag">3D Design</span>
                        <span class="keuzedeel-card__tag">Prototyping</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('3dprint')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Robotica -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=400&h=200&fit=crop" alt="Robotica">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Basis Robotica</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Bouw en programmeer robots. Leer over sensoren, actuatoren en automatisering.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Arduino</span>
                        <span class="keuzedeel-card__tag">Sensoren</span>
                        <span class="keuzedeel-card__tag">Automatisering</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('robotica')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Smart Technology -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=200&fit=crop" alt="Smart Technology">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Smart Technology</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Ontdek IoT, smart home systemen en connected devices. Bouw slimme oplossingen.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">IoT</span>
                        <span class="keuzedeel-card__tag">Smart Home</span>
                        <span class="keuzedeel-card__tag">Netwerken</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('smart')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Ondernemerschap -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=200&fit=crop" alt="Ondernemerschap">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Ondernemerschap</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 3-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Start je eigen bedrijf. Leer over businessplannen, marketing en financieel beheer.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Business</span>
                        <span class="keuzedeel-card__tag">Marketing</span>
                        <span class="keuzedeel-card__tag">ZZP</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('ondernemerschap')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Veiligheid -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=400&h=200&fit=crop" alt="Veiligheid">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Arbo & Veiligheid</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Leer over veilig werken, risico-inventarisatie en preventiemaatregelen in de techniek.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">VCA</span>
                        <span class="keuzedeel-card__tag">RI&E</span>
                        <span class="keuzedeel-card__tag">Preventie</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('veiligheid')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Lassen -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&h=200&fit=crop" alt="Lassen">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Lassen & Verbindingen</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-3</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Beheers diverse lastechnieken zoals MIG, MAG en TIG. Werk met staal en aluminium.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">MIG/MAG</span>
                        <span class="keuzedeel-card__tag">TIG</span>
                        <span class="keuzedeel-card__tag">Metaal</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('lassen')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- EHBO -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=400&h=200&fit=crop" alt="EHBO">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">EHBO & BHV</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-4</span>
                            <span class="keuzedeel-card__sbu">120 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Behaal je EHBO- en BHV-diploma. Leer eerste hulp verlenen en noodsituaties beheersen.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">EHBO</span>
                        <span class="keuzedeel-card__tag">BHV</span>
                        <span class="keuzedeel-card__tag">Reanimatie</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('ehbo')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Digitale Vaardigheden -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=400&h=200&fit=crop" alt="Digitale Vaardigheden">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Digitale Vaardigheden</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-3</span>
                            <span class="keuzedeel-card__sbu">120 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Verbeter je digitale vaardigheden. Leer werken met Office, cloud diensten en cybersecurity basics.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Office</span>
                        <span class="keuzedeel-card__tag">Cloud</span>
                        <span class="keuzedeel-card__tag">Security</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('digitaal')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Elektrotechniek -->
            <div class="keuzedeel-card">
                <div class="keuzedeel-card__image">
                    <img src="https://images.unsplash.com/photo-1413882353314-73389f63b6fd?w=400&h=200&fit=crop" alt="Elektrotechniek">
                </div>
                <div class="keuzedeel-card__content">
                    <div class="keuzedeel-card__header">
                        <h3 class="keuzedeel-card__title">Elektrotechniek Basis</h3>
                        <div class="keuzedeel-card__meta">
                            <span class="keuzedeel-card__niveau">Niveau 2-3</span>
                            <span class="keuzedeel-card__sbu">240 SBU</span>
                        </div>
                    </div>
                    <p class="keuzedeel-card__description">
                        Leer de basis van elektriciteit, schakelingen en installaties. Werk veilig met elektra.
                    </p>
                    <div class="keuzedeel-card__tags">
                        <span class="keuzedeel-card__tag">Elektra</span>
                        <span class="keuzedeel-card__tag">Installaties</span>
                        <span class="keuzedeel-card__tag">NEN</span>
                    </div>
                    <div class="keuzedeel-card__actions">
                        <button class="keuzedeel-card__link" onclick="openModal('elektro')">
                            Meer informatie
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<div id="modal" class="modal">
    <div class="modal__content">
        <button class="modal__close" onclick="closeModal()">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <div class="modal__header">
            <h2 class="modal__title" id="modal-title"></h2>
            <div class="modal__meta" id="modal-meta"></div>
        </div>
        <div class="modal__body" id="modal-body"></div>
    </div>
</div>

<script>
function openModal(keuzedeel) {
    const modal = document.getElementById('modal');
    modal.classList.add('active');
    
    // Modal content based on keuzedeel
    const modalData = getModalData(keuzedeel);
    document.getElementById('modal-title').textContent = modalData.title;
    document.getElementById('modal-meta').innerHTML = modalData.meta;
    document.getElementById('modal-body').innerHTML = modalData.body;
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

function getModalData(keuzedeel) {
    const data = {
        programmeren: {
            title: 'Programmeren',
            meta: '<span class="modal__badge modal__badge--niveau">Niveau 3-4</span><span class="modal__badge modal__badge--sbu">240 SBU</span>',
            body: `
                <div class="modal__section">
                    <h3>Beschrijving</h3>
                    <p>In dit keuzedeel leer je de fundamenten van programmeren. Je maakt kennis met verschillende programmeertalen zoals Python, JavaScript en C#. Je leert logisch denken, probleem oplossen en het ontwikkelen van eenvoudige tot complexe applicaties.</p>
                </div>
                <div class="modal__section">
                    <h3>Wat ga je leren?</h3>
                    <ul>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Basis programmeerconcepten (variabelen, loops, functies)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Object-georiënteerd programmeren</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Database management en SQL</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Webdevelopment (HTML, CSS, JavaScript)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Version control met Git</li>
                    </ul>
                </div>
            `
        },
        duurzaamheid: {
            title: 'Duurzaamheid in de Techniek',
            meta: '<span class="modal__badge modal__badge--niveau">Niveau 2-4</span><span class="modal__badge modal__badge--sbu">240 SBU</span>',
            body: `
                <div class="modal__section">
                    <h3>Beschrijving</h3>
                    <p>Dit keuzedeel richt zich op duurzame technologieën en innovaties. Je leert over energiebesparing, circulaire economie en hoe je als technicus kunt bijdragen aan een duurzamere wereld.</p>
                </div>
                <div class="modal__section">
                    <h3>Wat ga je leren?</h3>
                    <ul>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Duurzame energiebronnen en -opslag</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Circulaire economie principes</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CO2-reductie technieken</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Recycling en afvalbeheer</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Duurzame materialenkeuze</li>
                    </ul>
                </div>
            `
        },
        '3dprint': {
            title: '3D Printen & Modelleren',
            meta: '<span class="modal__badge modal__badge--niveau">Niveau 3-4</span><span class="modal__badge modal__badge--sbu">240 SBU</span>',
            body: `
                <div class="modal__section">
                    <h3>Beschrijving</h3>
                    <p>Duik in de wereld van 3D-printing en digitaal modelleren. Van ontwerp tot eindproduct, je leert het complete proces van 3D-printen beheersen.</p>
                </div>
                <div class="modal__section">
                    <h3>Wat ga je leren?</h3>
                    <ul>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CAD-software (Fusion 360, SolidWorks)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>3D-printtechnieken (FDM, SLA, SLS)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Materiaalkennis voor 3D-printen</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Slicing software en printinstellingen</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Post-processing en afwerking</li>
                    </ul>
                </div>
            `
        },
        robotica: {
            title: 'Basis Robotica',
            meta: '<span class="modal__badge modal__badge--niveau">Niveau 3-4</span><span class="modal__badge modal__badge--sbu">240 SBU</span>',
            body: `
                <div class="modal__section">
                    <h3>Beschrijving</h3>
                    <p>Stap in de fascinerende wereld van robotica. Je leert robots bouwen, programmeren en toepassen in praktische situaties.</p>
                </div>
                <div class="modal__section">
                    <h3>Wat ga je leren?</h3>
                    <ul>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Arduino en Raspberry Pi programmeren</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Sensoren en actuatoren integreren</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Robot kinematica en beweging</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Computer vision basics</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>PLC programmering</li>
                    </ul>
                </div>
            `
        },
        smart: {
            title: 'Smart Technology',
            meta: '<span class="modal__badge modal__badge--niveau">Niveau 3-4</span><span class="modal__badge modal__badge--sbu">240 SBU</span>',
            body: `
                <div class="modal__section">
                    <h3>Beschrijving</h3>
                    <p>Ontdek de wereld van Internet of Things (IoT) en slimme technologie. Leer hoe je connected devices ontwikkelt en integreert in moderne systemen.</p>
                </div>
                <div class="modal__section">
                    <h3>Wat ga je leren?</h3>
                    <ul>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>IoT-architectuur en protocollen</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Smart home systemen (Zigbee, Z-Wave)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Cloud platforms (AWS IoT, Azure IoT)</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Data analytics voor IoT</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Security voor connected devices</li>
                    </ul>
                </div>
            `
        }
    };
    
    return data[keuzedeel] || { title: 'Keuzedeel', meta: '', body: '<p>Informatie wordt binnenkort toegevoegd.</p>' };
}

// Close modal on outside click
document.getElementById('modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && document.getElementById('modal').classList.contains('active')) {
        closeModal();
    }
});
</script>

@endsection
