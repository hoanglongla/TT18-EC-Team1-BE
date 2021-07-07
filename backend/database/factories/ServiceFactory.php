<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

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

            "time_estimate" => 1*60*60,
            "can_book_online"=> $this->faker->randomElement([true,false]),
            "sex_type" => $this->faker->randomElement([0,1,2]),//all female, male
            "services_categories_id"=> $this->faker->randomElement([0 ,1,2]),
            "created_at" =>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            "updated_at" =>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
