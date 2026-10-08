<?php

use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;
use JeffersonGoncalves\GoatCounter\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

/**
 * Saves the given values on top of the stored GoatCounter settings.
 *
 * @param  array<string, mixed>  $values
 */
function goatcounter(array $values): GoatCounterSettings
{
    $settings = app(GoatCounterSettings::class);
    foreach ($values as $name => $value) {
        $settings->{$name} = $value;
    }
    $settings->save();

    return $settings;
}
