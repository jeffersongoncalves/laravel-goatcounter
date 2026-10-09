<div class="filament-hidden">

![Laravel GoatCounter](https://raw.githubusercontent.com/jeffersongoncalves/laravel-goatcounter/main/art/jeffersongoncalves-laravel-goatcounter.png)

</div>

# Laravel GoatCounter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/laravel-goatcounter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/laravel-goatcounter)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/laravel-goatcounter/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/laravel-goatcounter/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/laravel-goatcounter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/laravel-goatcounter)

Add [GoatCounter](https://www.goatcounter.com) — open source, privacy-friendly web analytics — to your Laravel app. The settings are stored in the database with [spatie/laravel-settings](https://github.com/spatie/laravel-settings), so you can change them at runtime (e.g. from an admin panel) instead of in `.env`.

For a Filament settings page, use [jeffersongoncalves/filament-goatcounter](https://github.com/jeffersongoncalves/filament-goatcounter).

## Installation

```bash
composer require jeffersongoncalves/laravel-goatcounter
```

Publish and run the settings migration:

```bash
php artisan vendor:publish --tag=goatcounter-settings-migrations
php artisan migrate
```

## Configuration

```php
$settings = goatcounter_settings();
$settings->code = 'mysite';
$settings->save();
```

Or through the settings class or the Facade:

```php
use JeffersonGoncalves\GoatCounter\Facades\GoatCounter;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

$settings = app(GoatCounterSettings::class);
$value = GoatCounter::getFacadeRoot()->code;
```

### Available settings

| Setting | Type | Default | Description |
|---------|------|---------|-------------|
| `code` | `?string` | `null` | Your GoatCounter code. The script only renders when it is valid. |

## Usage

Add the script to your Blade layout, inside `<head>`:

```blade
@include('goatcounter::script')
```

Nothing is rendered until the settings are complete, so you can ship the include everywhere and turn GoatCounter on later.

## Content Security Policy

When your app sets a CSP nonce through Laravel's Vite (`Vite::useCspNonce()`, as [laravel-security-headers](https://github.com/jeffersongoncalves/laravel-security-headers) does), every `<script>` this package renders carries it, so a `script-src 'self' 'nonce-{nonce}'` policy works without `'unsafe-inline'`. Scripts loaded afterwards from the vendor's own CDN still need that host in `script-src` (and its API in `connect-src`).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
