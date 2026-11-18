@php
    $cookieConsent = function_exists('cookie_consent_script_attributes') ? cookie_consent_script_attributes('goatcounter') : '';
@endphp
@php($settings = app(\JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings::class))

@if($settings->isConfigured())
    <script{!! $cookieConsent !!} @if(\Illuminate\Support\Facades\Vite::cspNonce()) nonce="{{ \Illuminate\Support\Facades\Vite::cspNonce() }}" @endif data-goatcounter="https://{{ $settings->code }}.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
@endif
