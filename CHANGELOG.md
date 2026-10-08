# Changelog

All notable changes to `laravel-goatcounter` will be documented in this file.

## 1.0.0 - 2026-10-08

First release.

- `@include('goatcounter::script')` renders the GoatCounter script once the settings are complete
- `GoatCounterSettings` stored with spatie/laravel-settings, validated before rendering
- `GoatCounter` facade and `goatcounter_settings()` helper

Requires PHP 8.2+ and Laravel 12.61+ or 13.
