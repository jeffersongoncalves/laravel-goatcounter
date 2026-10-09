# Changelog

All notable changes to `laravel-goatcounter` will be documented in this file.

## 1.1.0 - 2026-10-09

- Every `<script>` rendered by the package carries Laravel's Vite CSP nonce when the app sets one (e.g. via laravel-security-headers), so nonce-based `script-src` policies work without `'unsafe-inline'`.

## 1.0.0 - 2026-10-08

First release.

- `@include('goatcounter::script')` renders the GoatCounter script once the settings are complete
- `GoatCounterSettings` stored with spatie/laravel-settings, validated before rendering
- `GoatCounter` facade and `goatcounter_settings()` helper

Requires PHP 8.2+ and Laravel 12.61+ or 13.
