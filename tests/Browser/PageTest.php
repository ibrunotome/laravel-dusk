<?php

namespace Tests\Browser;

use App\Page;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Log;
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

    /**
     * Test remove page
     *
     * @throws \Exception
     * @throws \Throwable
     */
    public function testRemovePage()
    {
        $page = factory(Page::class)->create([
            'title' => 'Página cadastrada para teste'
        ]);

        $this->browse(function (Browser $browser) use ($page) {
            $browser->visit('/pages/' . $page->id)
                ->assertSee('remover')
                ->press('remover')
                ->assertPathIs('/pages')
                ->assertDontSee('Página cadastrada para teste');
        });
    }
}
