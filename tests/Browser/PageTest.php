<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * Class PageTest
 *
 * @package Tests\Browser
 * @group pages
 */
class PageTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     *
     * @throws \Exception
     * @throws \Throwable
     */
    public function testHomeOfPages()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pages')
                ->assertSee('Páginas');
        });
    }
}
