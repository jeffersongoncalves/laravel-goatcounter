<?php

use Illuminate\Support\Facades\Vite;

it('stamps the CSP nonce on every script tag', function () {
    Vite::useCspNonce('test-nonce');
    goatcounter(['code' => 'mysite']);
    $html = (string) $this->blade('@include("goatcounter::script")');

    preg_match_all('/<script\b[^>]*>/', $html, $tags);

    expect($tags[0])->not->toBeEmpty()->each->toContain('nonce="test-nonce"');
});

it('renders no nonce attribute when the app uses none', function () {
    goatcounter(['code' => 'mysite']);
    $html = (string) $this->blade('@include("goatcounter::script")');

    expect($html)->toContain('<script')->not->toContain('nonce=');
});
