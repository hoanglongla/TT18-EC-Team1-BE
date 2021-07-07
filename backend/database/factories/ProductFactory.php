<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            //
            "name" => $this->faker->name(),
            "price" => $this->faker->numberBetween(100000, 10000000),
            "price_discount" => null,
            "description" => $this->faker->realText(2000,2),
            "picture" => "https://source.unsplash.com/random",
            "stock" => $this->faker->numberBetween(0,10000),
            "amount"  => $this->faker->randomElement(["100","200", "300", "500"]),
            "unit" => $this->faker->randomElement(["ml", "gam"]),
            "products_categories_id" => $this->faker->numberBetween(1,5),
            "created_at" =>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            "updated_at" =>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
