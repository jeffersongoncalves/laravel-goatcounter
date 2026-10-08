<?php

use JeffersonGoncalves\GoatCounter\Facades\GoatCounter;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

it('can resolve GoatCounterSettings from the container', function () {
    expect(app(GoatCounterSettings::class))->toBeInstanceOf(GoatCounterSettings::class);
});

it('is not configured by default', function () {
    expect(app(GoatCounterSettings::class)->isConfigured())->toBeFalse();
});

it('can update and persist settings', function () {
    goatcounter(['code' => 'mysite']);

    expect(app(GoatCounterSettings::class)->isConfigured())->toBeTrue()
        ->and(app(GoatCounterSettings::class)->code)->toBe('mysite');
});

it('belongs to the goatcounter group', function () {
    expect(GoatCounterSettings::group())->toBe('goatcounter');
});

it('can be accessed via the helper function', function () {
    expect(goatcounter_settings())->toBeInstanceOf(GoatCounterSettings::class);
});

it('reads a persisted value through the Facade', function () {
    goatcounter(['code' => 'mysite']);

    expect(GoatCounter::getFacadeRoot()->code)->toBe('mysite');
});
