# Database Scripts

Deze map bevat PHP scripts voor database onderhoud en setup.

## Scripts

### `check_aantal.php`
- Controleert deelnemers telling per keuzedeel
- Vergelijkt database kolom met dynamische telling
- Debug tool voor deelnemers data

### `debug_keuzedelen.php`
- Debug script voor keuzedelen data
- Check database connectie
- Toont eerste 3 keuzedelen

### `setup_admin.php`
- Maakt admin account aan
- Email: `admin@techniekcollege.nl`
- Password: `admin123`

### `setup_slb.php`
- Maakt SLB account aan
- Email: `slb@techniekcollege.nl`
- Password: `slb123`

### `test_controller.php`
- Test alle controllers
- Check of methods bestaan
- Health check voor applicatie

### `create_slb_route.php`
- SLB account creation (route versie)
- Test login credentials
- Include error handling

## Gebruik

```bash
php database/scripts/check_aantal.php
php database/scripts/setup_admin.php
php database/scripts/setup_slb.php
```

## Let op

Deze scripts zijn voor development en debugging.
Gebruik ze niet in productie zonder aanpassingen.
