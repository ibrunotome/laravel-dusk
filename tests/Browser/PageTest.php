<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * Class PageTest
 *
 * @package Tests\Browser
 * @group   pages
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

    /**
     * Test add new page
     *
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAddNewPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pages/create')
                ->type('title', 'Sobre nós')
                ->type('body', 'Conteúdo da página')
                ->press('salvar')
                ->assertPathIs('/pages')
                ->assertSee('Sobre nós');
        });
    }
}
