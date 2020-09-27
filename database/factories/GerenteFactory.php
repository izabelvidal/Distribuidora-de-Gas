<?php

namespace Database\Factories;

use App\Models\Gerente;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gerente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoa::factory()->create()->getKey()
        ];
    }
}
