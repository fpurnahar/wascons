<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Project ' . $this->faker->text(rand(5, 5)),
            'category' => 'Category ' . $this->faker->text(rand(5, 20)),
            'client' => 'Client PT. ' . $this->faker->text(rand(5, 5)),
            'project_date' => $this->faker->date(now()),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, cupiditate. Dolorum nam debitis reprehenderit deserunt natus nesciunt, minus rem quis porro. Dignissimos enim similique tempore iste minima veritatis asperiores, qui perspiciatis necessitatibus voluptate illum ipsa quo eum sequi perferendis facere repellendus at accusamus minus, recusandae, consectetur mollitia dolorem suscipit. Sint voluptas nihil non fugit, neque officiis incidunt excepturi, ratione debitis voluptatem dicta reiciendis impedit provident! Fugiat molestias vitae, debitis beatae rem asperiores repellendus, incidunt repudiandae placeat consequuntur quos dolorum ab laborum. Nam ullam nesciunt facere totam minima fuga, ea aliquid dolores, eaque dolorem reiciendis expedita incidunt pariatur veniam tempora ipsum.',
            'image' => '/assets/img/portfolio-thumbnails/portfolio-3.jpg',
            'image_2' => '/assets/img/portfolio-detail-2/portfolio-3.jpg',
            'image_3' => '/assets/img/portfolio-detail-3/portfolio-3.jpg',
        ];
    }
}
