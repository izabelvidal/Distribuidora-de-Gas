<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProdutoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testProduto()
    {
        $produto = factory(\App\Produto::class)->create([
            'nome' => 'gás',
        ]);

        $this->browse(function ($browser) use ($produto){
            
        });

        
    }
}
