## Laravel GoatCounter

### Overview
Renders the GoatCounter script in Blade layouts. The settings are stored in the database with `spatie/laravel-settings` (`GoatCounterSettings`, group `goatcounter`) — no config file, no `.env`.

### Usage

@verbatim
<code-snippet name="blade-include" lang="blade">
@include('goatcounter::script')
</code-snippet>
@endverbatim

@verbatim
<code-snippet name="configure" lang="php">
$settings = goatcounter_settings();
$settings->code = 'mysite';
$settings->save();
</code-snippet>
@endverbatim

### Conventions
- Namespace: `JeffersonGoncalves\GoatCounter`; view namespace `goatcounter` (`goatcounter::script`)
- The script renders only when `GoatCounterSettings::isConfigured()` is true
- Publish migrations with `php artisan vendor:publish --tag=goatcounter-settings-migrations`
