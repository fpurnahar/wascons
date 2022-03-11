<?php

namespace Database\Factories;

use App\Models\ClientBanner;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientBannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientBanner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(rand(5, 10)),
            'image' => '/assets/img/clients/client-2.png',
        ];
    }
}
