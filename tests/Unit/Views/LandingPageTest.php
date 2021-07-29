<?php

namespace Tests\Unit\Views;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function testTranslateAndComponentInPage()
    {
        $response = $this->get('/');

        $response->assertSee('wrap');
        $response->assertSee('logo');
        $response->assertSee('image-slider');

        $response->assertSeeText(trans('messages.landing_page.home'));
        $response->assertSeeText(trans('messages.landing_page.about'));
        $response->assertSeeText(trans('messages.landing_page.review'));
        $response->assertSeeText(trans('messages.landing_page.admin'));
    }
}
