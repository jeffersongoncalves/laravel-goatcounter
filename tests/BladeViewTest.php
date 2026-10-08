<?php

it('renders the GoatCounter script once configured', function () {
    goatcounter(['code' => 'mysite']);

    $this->blade('@include("goatcounter::script")')
        ->assertSee('gc.zgo.at/count.js', false)
        ->assertSee('https://mysite.goatcounter.com/count', false);
});

it('renders nothing while it is not configured', function () {
    goatcounter(['code' => null]);

    $this->blade('@include("goatcounter::script")')->assertDontSee('gc.zgo.at', false);
});

it('does not render an invalid value into the page', function () {
    goatcounter(['code' => 'evil.com/x"><script>alert(1)</script>']);

    $this->blade('@include("goatcounter::script")')
        ->assertDontSee('gc.zgo.at', false)
        ->assertDontSee('alert(1)', false);
});
