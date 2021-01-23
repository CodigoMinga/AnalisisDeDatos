<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_date' => $this->faker->dateTimeBetween('-3 years','now'),
            'client_id' => $this->faker->numberBetween(1,1000),
            'vendor_id' => $this->faker->numberBetween(1,10)

        ];
    }
}
