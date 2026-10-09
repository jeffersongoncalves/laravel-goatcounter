@php($settings = app(\JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings::class))

@if($settings->isConfigured())
    <script @if(\Illuminate\Support\Facades\Vite::cspNonce()) nonce="{{ \Illuminate\Support\Facades\Vite::cspNonce() }}" @endif data-goatcounter="https://{{ $settings->code }}.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
@endif
