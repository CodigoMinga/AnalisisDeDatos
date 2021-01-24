<?php

namespace Database\Factories;

use App\Models\Saledetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaledetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Saledetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,100),
            'quantity' => $this->faker->numberBetween(1,10)

        ];
    }
}
