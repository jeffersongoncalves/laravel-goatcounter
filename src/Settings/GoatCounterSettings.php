<?php

namespace JeffersonGoncalves\GoatCounter\Settings;

use Spatie\LaravelSettings\Settings;

class GoatCounterSettings extends Settings
{
    /** GoatCounter code. Empty = no script. */
    public ?string $code;

    public static function group(): string
    {
        return 'goatcounter';
    }

    /** Whether the settings are complete enough to render the script. */
    public function isConfigured(): bool
    {
        return preg_match('/^[a-z0-9-]+$/i', (string) $this->code) === 1;
    }
}
