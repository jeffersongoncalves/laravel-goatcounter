<?php

namespace JeffersonGoncalves\GoatCounter\Facades;

use Illuminate\Support\Facades\Facade;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

/**
 * @property ?string $code
 *
 * @see GoatCounterSettings
 */
class GoatCounter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return GoatCounterSettings::class;
    }
}
