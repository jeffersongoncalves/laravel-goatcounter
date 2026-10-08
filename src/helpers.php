<?php

use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

if (! function_exists('goatcounter_settings')) {
    function goatcounter_settings(): GoatCounterSettings
    {
        return app(GoatCounterSettings::class);
    }
}
