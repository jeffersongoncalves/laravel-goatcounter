---
name: goatcounter-development
description: Add GoatCounter to a Laravel app with jeffersongoncalves/laravel-goatcounter — Blade include, settings stored in the database via spatie/laravel-settings.
---

# Laravel GoatCounter Development

## When to use this skill

- Adding GoatCounter to a Laravel / Blade app
- Changing the GoatCounter settings at runtime (admin panel, seeder, tinker)
- Debugging why the GoatCounter script doesn't show up

## Setup

```bash
composer require jeffersongoncalves/laravel-goatcounter
php artisan vendor:publish --tag=goatcounter-settings-migrations
php artisan migrate
```

```blade
@include('goatcounter::script')
```

```php
$settings = goatcounter_settings();
$settings->code = 'mysite';
$settings->save();
```

## Settings

| Setting | Type | Default |
|---------|------|---------|
| `code` | `?string` | `null` |

## Troubleshooting

- **No script in the HTML**: the settings are incomplete or invalid — check `goatcounter_settings()->isConfigured()`.
- **Settings not found**: run the settings migration (`php artisan migrate` after publishing).
- **Filament panel**: use `jeffersongoncalves/filament-goatcounter`, which injects the same view into panels and adds a settings page.
