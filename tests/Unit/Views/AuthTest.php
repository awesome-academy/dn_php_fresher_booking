<?php

namespace Tests\Unit\Views;

use Tests\TestCase;

class AuthTest extends TestCase
{
    public function testUserCanViewLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertViewIs('auth.login')->assertSee('Login');
    }

    public function testUserCanViewRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);

        $response->assertViewIs('auth.register')->assertSee('register');
    }

    public function testTranslateAndComponentInPage()
    {
        $response = $this->get('/login');

        $response->assertSee('card');
        $response->assertSee('card-header');
        $response->assertSee('form-group');

        $response->assertSeeText(trans('messages.login'));
        $response->assertSeeText(trans('messages.register'));
        $response->assertSeeText(trans('messages.password'));
    }
}
