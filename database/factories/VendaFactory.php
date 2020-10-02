<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Gerente;
use App\Models\Item;
use App\Models\Venda;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory()->create()->getKey(),
            'funcionario_id' => Funcionario::factory()->create()->getKey(),
            'gerente_id' => Gerente::factory()->create()->getKey(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Venda $venda) {
            Item::factory()->count(3)->create(['venda_id' => $venda->getKey()]);
            $vendaAtualizada = Venda::find($venda->getKey());
            $items = $vendaAtualizada->items;
            $preco = 0;
            foreach ($items as $item){
                $preco += $item->preco;
            }
            $vendaAtualizada->preco = $preco;
            $vendaAtualizada->save();
        });
    }
}
