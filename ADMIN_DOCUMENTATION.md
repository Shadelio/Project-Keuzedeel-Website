# Admin Systeem Documentatie

## Setup

1. Voer het setup script uit:
   ```bash
   php setup_admin.php
   ```

2. Start de Laravel server:
   ```bash
   php artisan serve
   ```

3. Ga naar `http://127.0.0.1:8000/admin`

## Inloggegevens

**Admin Account:**
- Email: `admin@keuzedeel.nl`
- Wachtwoord: `admin123`

**Test Student:**
- Email: `student@test.nl`
- Wachtwoord: `student123`

## Functionaliteiten

### 1. Admin Dashboard
- **Statistieken**: Overzicht van studenten, keuzedelen, inschrijvingen
- **Waarschuwingen**: Keuzedelen met <15 inschrijvingen
- **Volle keuzedelen**: Keuzedelen die de limiet hebben bereikt
- **Recente inschrijvingen**: Laatste 10 inschrijvingen

### 2. Keuzedelen Beheren (`/admin/keuzedelen`)
- **Activeer/Deactiveer**: Schakel keuzedelen aan/uit zonder data te verwijderen
- **Inschrijvingen overzicht**: Zie aantal inschrijvingen per keuzedeel
- **Waarschuwingen**: Visuele indicatie voor te weinig inschrijvingen
- **Vol indicator**: Rode kleur wanneer limiet bereikt is

### 3. Inschrijvingen Beheren (`/admin/inschrijvingen`)
- **Filter op status**: Alle, geaccepteerd, of wachtend
- **Student details**: Naam, email, keuzedeel informatie
- **Status beheer**: Zie inschrijfstatus en data

### 4. Studenten Beheren (`/admin/studenten`)
- **Activeer/Deactiveer**: Schakel student accounts aan/uit
- **Inschrijvingen count**: Aantal inschrijvingen per student
- **Rol beheer**: Zie of gebruiker admin of student is

### 5. Dubbele Inschrijvingen (`/admin/dubbele-inschrijvingen`)
- **Conflict detectie**: Automatische detectie van overlappende periodes
- **Periode vergelijking**: Zie start/eind data van keuzedelen
- **Conflict indicator**: Rood/groen indicator voor conflicten

### 6. Instellingen (`/admin/instellingen`)
- **Inschrijfperiode**: Open/sluit de inschrijfperiode
- **Deelnemerslimieten**: Stel maximaal in (standaard 30)
- **Waarschuwingsgrens**: Stel minimum aantal inschrijvingen in (standaard 15)
- **Systeemstatus**: Live statistieken

## Instellingen

### Inschrijfperiode
- **Open**: Studenten kunnen inschrijven
- **Gesloten**: Studenten kunnen niet inschrijven

### Deelnemerslimieten
- **Maximum per keuzedeel**: Standaard 30, aanpasbaar per keuzedeel
- **Waarschuwingsgrens**: Standaard 15, waarschuwing bij minder inschrijvingen

## Beveiliging

- **Admin middleware**: Alleen admins kunnen admin routes bereiken
- **Authenticatie**: Alle admin routes vereisen inloggen
- **Role-based access**: Gebruikers hebben `admin` of `student` rol

## Database Changes

### Nieuwe tabellen/velden:
- `users.role` (admin/student)
- `users.is_active` (boolean)
- `settings` tabel (systeeminstellingen)
- `keuzedelen.is_active` (boolean)
- `inschrijvingen.periode` (string)
- `inschrijvingen.accepted_at` (timestamp)

### Nieuwe modellen:
- `Setting` model voor systeeminstellingen
- `AdminController` voor admin functionaliteit
- `AdminMiddleware` voor beveiliging

## Routes

Alle admin routes zijn onder `/admin/*` prefix:
- `/admin` - Dashboard
- `/admin/inschrijvingen` - Inschrijvingen beheren
- `/admin/keuzedelen` - Keuzedelen beheren
- `/admin/studenten` - Studenten beheren
- `/admin/dubbele-inschrijvingen` - Conflicten detecteren
- `/admin/instellingen` - Systeeminstellingen

## Tips

1. **Test data**: Gebruik de test student account om functionaliteit te testen
2. **Backups**: Maak backups voor het uitvoeren van migrations
3. **Caches**: Leeg caches na wijzigingen: `php artisan cache:clear`
4. **Logs**: Check `storage/logs/laravel.log` voor fouten
