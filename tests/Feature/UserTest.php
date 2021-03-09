<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function loginWithFakeUser()
    {
        $user = new User([
            'id' => 1,
            'name' => 'Evans'
        ]);

        $this->be($user);
    }

    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Taylor', 'name')
            ->type('evans@gmail.com', 'email')
            ->type('12345678', 'password')
            ->type('12345678', 'password-confirm')
            ->press('Register')
            ->seePageIs('/home');
    }
}
