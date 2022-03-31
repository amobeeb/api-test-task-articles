<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText(200),
            'description'=>$this->faker->realTextBetween(200, 1000),
            'views'=>0,
            'likes'=>0,
            'thumbnail_image'=>'/thumbnail-image.jpg',
            'main_image'=>'/main-image.jpg',
            'posted_date'=>$this->faker->date()
        ];

    }
}
