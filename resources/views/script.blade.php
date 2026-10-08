@php($settings = app(\JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings::class))

@if($settings->isConfigured())
    <script data-goatcounter="https://{{ $settings->code }}.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
@endif
