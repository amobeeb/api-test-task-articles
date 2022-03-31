<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->realTextBetween(200, 1000),
            'article_id'=>mt_rand(1, 20) //randomize article id
        ];
    }
}
