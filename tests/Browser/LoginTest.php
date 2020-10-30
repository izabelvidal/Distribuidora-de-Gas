<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(1)->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('submit')
                ->assertPathIs('/home');
        });
    }
}
