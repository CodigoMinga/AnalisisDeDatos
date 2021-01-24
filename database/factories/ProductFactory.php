<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $faker = $this->faker;
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        return [
            'name' => $this->faker->productName,
            'stock' => $this->faker->numberBetween(1,10000),
            'price' => $this->faker->numberBetween(1,40000),

        ];
    }
}
