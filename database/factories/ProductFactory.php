<?php

namespace Database\Factories;

use App\Faker\FoodPictureProvider;
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
        $this->faker->addProvider(FoodPictureProvider::class);

        return [
            'name' => $this->faker->domainName(),
            'picture' => $this->faker->foodPicture(),
            'stock' => $this->faker->numberBetween(0,100),
            'price' => $this->faker->numberBetween(100,1500),
        ];
    }
}
